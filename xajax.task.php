<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* This file is part of "TaskFreak! multi user" program.                      *
*                                                                            *
* TaskFreak! multi user is free software; you can redistribute it and/or     *
* modify it under the terms of the GNU General Public License as published   *
* by the Free Software Foundation; either version 2 of the License, or (at   *  
* your option) any later version.                                            *
*                                                                            *
* TaskFreak! multi user is distributed in the hope that it will be           *
* useful, but WITHOUT ANY WARRANTY; without even the implied warranty of     *
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the              *
* GNU General Public License for more details.                               *
*                                                                            *
* You should have received a copy of the GNU General Public License          *
* along with this program; if not, write to the Free Software                *
* Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA *
\****************************************************************************/

include './_include.php';

define('FRK_LANGUAGE',FRK_DEFAULT_LANGUAGE);
define('FRK_CONTEXT_LONG',FRK_DEFAULT_CONTEXT_LONG);

include PRJ_CLASS_PATH.'tzn_generic.php';
include PRJ_CLASS_PATH.TZN_DB_CLASS;
include PRJ_CLASS_PATH.'tzn_user.php';
include PRJ_CLASS_PATH.'pkg_member.php';
include PRJ_CLASS_PATH.'pkg_project.php';

function ajaxCheckSession(&$objResponse) {
    $objUser = new Member();
    if ($objUser->isLogged()) {
        // already logged in
    } else if ($objUser->checkAutoLogin()) {
        // session timeout but auto logged in
    } else {
        include PRJ_INCLUDE_PATH.'language/'.FRK_LANGUAGE.'/freak.php';
        $_SESSION['tznMessage'] = $GLOBALS['langMessage']['session_expired'];
        $objResponse->addRedirect('login.php');
        return false;
    }
    include PRJ_INCLUDE_PATH.'language/'.FRK_LANGUAGE.'/common.php';
    include PRJ_INCLUDE_PATH.'language/'.FRK_LANGUAGE.'/freak.php';
    include PRJ_INCLUDE_PATH.'language/'.FRK_LANGUAGE.'/options.php';
    define('FRK_SKIN_FOLDER',FRK_DEFAULT_SKIN_FOLDER);
    return $objUser;
}

function ajaxLoadTask($id,$level,$userCanToo,&$objUser,&$objResponse) {
    $objResponse = new xajaxResponse();
    if (!($objUser = ajaxCheckSession($objResponse))) {
        return false;
    }

    $objTask = new ItemStats();
	$objTask->setUid($id);
	if ($objTask->load($objUser->id)) {
		//error_log('task loaded:'.$id.', user '.$objUser->id.' has position '.$objTask->position);
        if ($objUser->checkLevel(13) || $objUser->checkLevel(14) || $objTask->checkRights($objUser->id,$level,$userCanToo)) {
            return $objTask;
        }
    }
    $objResponse->addScriptCall('freak_error',$GLOBALS['langMessage']['not_found_or_denied']);
    return false;
}

function ajaxLoadTaskComment($id,$level,&$objUser,&$objTask,&$objResponse) {
	$objResponse = new xajaxResponse();
	if (!($objUser = ajaxCheckSession($objResponse))) {
        return false;
	}
	$objComment = new ItemComment();
	$objComment->setUid($id);
	if ($objComment->load()) {
		$objTask = new ItemStats();
		$objTask->setUid($objComment->itemId);
		if ($objTask->load($objUser->id)) {
			if ($objComment->checkRights($objUser->id,$level,$objTask)
				|| $objUser->checkLevel(14)
				|| $objTask->checkRights($objUser->id,0)) 
			{
				return $objComment;
			}
		}
	}
	return false;
}

function ajaxLoadDetails($objTask,$what,&$objResponse,$objUser=null) {
	$str = '';
	switch ($what) {
	case 'desc':
		if ($objTask->description) {
			$str = $objTask->getDescription();	
		} else {
			$str = '<div id="vempty">-'.$GLOBALS['langTaskDetails']['description_none'].'-</div>';
		}
		$objResponse->addAssign('vmore','innerHTML', $str);
		break;
	case 'comm':
		if (!$objTask->checkRights($objUser->id,1,true)) {
			$objResponse->addAssign('vmore','innerHTML','<div id="vempty">-'.$GLOBALS['langTaskDetails']['comments_no_access'].'-</div>');
			break;
		}
		$objCommentList = new ItemComment();
		$objCommentList->addWhere('itemId='.$objTask->id);
		$objCommentList->addOrder('postDate '.(@defined('FRK_DEFAULT_COMMENT_ORDER')?FRK_DEFAULT_COMMENT_ORDER:'ASC'));
		$objCommentList->loadList();
		if ($objCommentList->rMore()) {
			while ($objComment = $objCommentList->rNext()) {
				$str .= '<div id="vcomm'.$objComment->id.'">'
					.'<div class="vheader">'
					.'<div class="vaction">';
				if ($objTask->checkRights($objUser->id,2,true)) {
					$str .= '<a href="javascript:freak_comment_reply()">'
						.$GLOBALS['langTaskDetails']['comments_reply'].'</a>';
				} else {
					$str .= $GLOBALS['langTaskDetails']['comments_reply'].'</a>';
				}
				$str .= ' | ';
				if ($objComment->checkRights($objUser->id,3,$objTask)) {
					$str .= '<a href="javascript:freak_comment_edit('.$objComment->id.')">'
						.$GLOBALS['langTaskDetails']['comments_edit'].'</a>';
				} else {
					$str .= $GLOBALS['langTaskDetails']['comments_edit'];
				}
				$str .= ' | ';
				if ($objComment->checkRights($objUser->id,4,$objTask)) {
					$str .='<a href="javascript:freak_comment_delete('.$objComment->id.')" '
					.'onClick="return confirm(\''.$GLOBALS['langTaskDetails']['comments_delete_confirm'].'\')">'
					.$GLOBALS['langTaskDetails']['comments_delete'].'</a>';
				} else {
					$str .= $GLOBALS['langTaskDetails']['comments_delete'];
				}
				$str .= '</div>'
					.$objComment->getDtm('postDate','SHT').' '
					.$GLOBALS['langTaskDetails']['comments_by']
					.' '.$objComment->member->getName().'</div>'
					.'<div class="vbody">'.$objComment->f('body').'</div></div>';
			}
			$objResponse->addAssign('vmore','innerHTML', $str);
			$objResponse->addAssign('ecomm'.$objTask->id,'innerHTML',$objCommentList->rTotal());
			if ((!defined('FRK_DEFAULT_COMMENT_ORDER')) || (@constant('FRK_DEFAULT_COMMENT_ORDER') == 'ASC')) {
				$objResponse->addScript('freak_more_scroll()');
			}
		} else {
			$str .= '<div id="vempty">-'.$GLOBALS['langTaskDetails']['comments_none'].'-';
			if ($objTask->checkRights($objUser->id,2,true)) {
				$str .= '<div class="vnewaction"><a href="javascript:freak_body_edit(true)">'
					.$GLOBALS['langTaskDetails']['comments_new'].'</a></div></div>';
			}
			$objResponse->addAssign('vmore','innerHTML', $str);
			$objResponse->addAssign('ecomm'.$objTask->id,'innerHTML','0');
		}
		break;
	case 'hist':
		$objStatusList = new ItemStatus();
		$objStatusList->addWhere('itemId='.$objTask->id);
		$objStatusList->addOrder('statusDate ASC');
		$objStatusList->loadList();
		$str = '<table id="vhist"><tr>'
			.'<th>'.$GLOBALS['langTaskDetails']['history_date'].'</th>'
			.'<th>'.$GLOBALS['langTaskDetails']['history_user'].'</th>'
			.'<th>'.$GLOBALS['langTaskDetails']['history_what'].'</th></tr>';
		while ($objStatus = $objStatusList->rNext()) {
			$str .= '<tr><td>'.$objStatus->getDtm('statusDate','SHT',$objUser->timeZone).'</td>'
				.'<td>'.$objStatus->member->getName().'</td>'
				.'<td>'.$GLOBALS['langItemStatus'][$objStatus->statusKey].'</td></tr>';
		}
		$str .= '</table>';
		$objResponse->addAssign('vmore','innerHTML', $str);
		break;
	}
}


function task_load_edit($id) {
	$objResponse = new xajaxResponse();

	if ($id) {
		// loading task
		if ($objTask = ajaxLoadTask($id,7,false,$objUser,$objResponse)) {
			ob_start();
			include PRJ_INCLUDE_PATH.'html/xajax_panel_edit.php';
			$str = ob_get_contents(); 
			ob_clean();
			$objResponse->addScriptCall('freak_edit_text','id',$objTask->id);
			$objResponse->addAssign('fviewcontent','innerHTML',$str);
			/*
			$objResponse->addScriptCall('freak_edit_select','priority',$objTask->priority);
			if (@constant('FRK_CONTEXT_ENABLE')) {
			}
			$objResponse->addScriptCall('freak_edit_text','deadlineDate',$objTask->getDte('deadlineDate',SHT));
			$objResponse->addScriptCall('freak_edit_text','title',$objTask->title);
			$objResponse->addScriptCall('freak_edit_text','description',$objTask->description);
			$objResponse->addScriptCall('freak_edit_select','project',$objTask->project->id);
			$objResponse->addScriptCall('freak_edit_privacy',$objTask->showPrivate);
			task_load_users_inside($objTask->project->id,$objUser,$objResponse);
			$objResponse->addScriptCall('freak_edit_select','user',$objTask->member->id);
			$objResponse->addScriptCall('freak_edit_select','status',$objTask->itemStatus->statusKey);
			 */
			task_load_users_inside($objTask->project->id,$objUser,$objResponse);
			$objResponse->addScriptCall('freak_edit_select','user',$objTask->member->id);
			$objResponse->addScript('Calendar.setup({});');
			$objResponse->addScript('hD(gE("fviewload"))');
			$objResponse->addScript('sD(gE("fviewcontent"))');
		} else {
			$objResponse->addScriptCall('freak_message',$GLOBALS['langMessage']['not_found_or_denied']);
		}
	} else if ($objUser = ajaxCheckSession($objResponse)) {
		// form to create new task
		$objTask = new Item();
		if ($_SESSION['linkItems']) {
			preg_match('/sProject=([0-9]+)&/',$_SESSION['linkItems'],$matches);
			$objTask->project->id = $matches[1];
		}
		ob_start();
		include PRJ_INCLUDE_PATH.'html/xajax_panel_edit.php';
		$str = ob_get_contents(); 
		ob_clean();
		$objResponse->addScriptCall('freak_edit_text','id','0');
		$objResponse->addAssign('fviewcontent','innerHTML',$str);
		task_load_users_inside(0,$objUser,$objResponse);
		$objResponse->addScriptCall('freak_edit_select','user',$objUser->id);
		$objResponse->addScript('Calendar.setup({});');
		$objResponse->addScript('hD(gE("fviewload"))');
		$objResponse->addScript('sD(gE("fviewcontent"))');
	}
	$objResponse->addScript('freak_label()');
	$objResponse->addScript('freak_stop()');
	$objResponse->addScript('document.forms[0].priority.focus()');

    return $objResponse->getXML();
}

function task_load_view($id,$tab='desc') {

    $objResponse = new xajaxResponse();

    if ($objTask = ajaxLoadTask($id,0,false,$objUser,$objResponse)) {
		// -todo- show private status
		ob_start();
		include PRJ_INCLUDE_PATH.'html/xajax_panel_view.php';
		$str = ob_get_contents();
		ob_clean();
		$objResponse->addScriptCall('freak_edit_text','id',$objTask->id);
		$objResponse->addAssign('fviewcontent','innerHTML',$str);
		$tab = ($tab)?$tab:'desc';
		$objResponse->addScriptCall('freak_tab',$tab);
		ajaxLoadDetails($objTask,$tab,$objResponse,$objUser);


        if ($objUser->checkLevel(14) || $objTask->checkRights($objUser->id,7)) {
            // can edit
            $objResponse->addScript('sD(gE("fviewedit"))');
        } else {
            $objResponse->addScript('hD(gE("fviewedit"))');
        }
        if ($objUser->checkLevel(14) || $objTask->checkRights($objUser->id,9)) {
            // can delete
            $objResponse->addScript('sD(gE("fviewdelete"))');
        } else {
            $objResponse->addScript('hD(gE("fviewdelete"))');
        }
	}
	$objResponse->addScript('hD(gE("fviewload"))');
	$objResponse->addScript('sD(gE("fviewcontent"))');
	$objResponse->addScript('freak_stop()');
    
    return $objResponse->getXML();

}

function task_load_more($id,$what) {
    $objResponse = new xajaxResponse();

	if ($objTask = ajaxLoadTask($id,0,false,$objUser,$objResponse)) {
		ajaxLoadDetails($objTask,$what,$objResponse,$objUser);
	}

    $objResponse->addScript('freak_stop()');
    
    return $objResponse->getXML();
}

function task_load_users($projectId) {

	$objResponse = new xajaxResponse();

    if ($objUser = ajaxCheckSession($objResponse)) {

        task_load_users_inside($projectId,$objUser,$objResponse);
        $objResponse->addScriptCall('freak_mp_default','');

    }
	$objResponse->addScript('freak_stop()');
    
    return $objResponse->getXML();
}

function task_load_users_inside($projectId,$objUser,&$objResponse) {
    $objResponse->addScript('freak_mp_reset()');
    if ($projectId) {
        $objMemberList = new MemberProject();
        $objMemberList->addWhere($objMemberList->gTable().".projectId='".intval($projectId)."'");
        $objMemberList->addOrder('level DESC, firstName ASC');
        $objMemberList->loadList();

        if ($objMemberList->rMore()) {
            while ($objItem = $objMemberList->rNext()) {
                $objResponse->addScriptCall('freak_mp_add',$objItem->member->id,$objItem->member->getName());
            }	
        }
    } else {
        $objMemberList = new Member();
        if (!$objUser->checkLevel(1)) {
            $objMemberList->addWhere($objMemberList->gTable().'.memberId='.$objUser->id);
        }
        $objMemberList->loadList();
        if ($objMemberList->rMore()) {
            while ($objItem = $objMemberList->rNext()) {
                $objResponse->addScriptCall('freak_mp_add',$objItem->id,$objItem->getName());
            }
        }
    }
    
}

function task_update_status($id,$status) {
    $objResponse = new xajaxResponse();
    if ($objTask = ajaxLoadTask($id,8,true,$objUser,$objResponse)) {
        $newStatus = intval($status);
        if ($newStatus != $objTask->itemStatus->statusKey) {
            $objTask->setStatus($newStatus,$objUser->id);
			if ($newStatus == FRK_STATUS_LEVELS) {
				// task is completed
				if (@constant('FRK_COMPLETE_DEADLINE') == TRUE) {
					// update deadline to current date
					$objTask->setDte('deadlineDate','NOW');
					$objTask->update('deadlineDate');
				}
			}
			if (!@constant('FRK_DEFAULT_NO_DEADLINE_KEEP') && ($newStatus == FRK_STATUS_LEVELS)) {
				// completed task should disapear from task list view
	        	$objResponse->addScriptCall('freak_del_remove',$id);
            } else {
                // show new status
                for ($i = 0; $i < FRK_STATUS_LEVELS; $i++) {
                    $j = ($i < $newStatus)?(FRK_STATUS_LEVELS - $i):0;
                    $objResponse->addAssign('est'.($i+1).$objTask->id,'className','sts'.$j);
                }
                // update date?
                if (($newStatus == FRK_STATUS_LEVELS) && (@constant('FRK_COMPLETE_DEADLINE') == TRUE)) {
                	$objResponse->addAssign('edead'.$objTask->id,'innerHTML',$objTask->getDeadline(true));
                }
            }

            $objResponse->addScriptCall('freak_message',$GLOBALS['langMessage']['done_status']);
        }
    }
    $objResponse->addScript('freak_stop()');
    return $objResponse->getXML();
}

function task_update_full($data) {

    $objResponse = new xajaxResponse();

    if (!($objUser = ajaxCheckSession($objResponse))) {
        return false;
    }

    $objTask = new ItemStats();
	$objTask->setUid($data['id']);
	if ($objTask->load($objUser->id)) {
        $objOldTask = $objTask->cloneme();
        $pUserCanEdit = ($objUser->checkLevel(14) || $objTask->checkRights($objUser->id,7));
    }

    $objTask->setAuto($data,null,'_setDirect');

    // project
    $objProject = new Project();

    if ($objUser->checkLevel(7) && $data['project2']) {
        
        // create new project on the fly
        $objProject->set('name',$data['project2']);
        $objProject->add(0,$objUser->id);
        //$objResponse->addScript('freak_rld()');
        
        // update project list
        $link = Tzn::concatUrl($_SESSION['linkItems'],'sProject='.$objProject->id);
        $link = Tzn::concatUrl($link,'show=');
        if ($objTask->isLoaded() && $pUserCanEdit) {
            $objResponse->addScriptCall('freak_edit_add_project',
                $objProject->id,$objProject->name,$link,$GLOBALS['langMenu']['future_tasks'],
                $GLOBALS['langMenu']['past_tasks'],$GLOBALS['langMenu']['all_tasks']);
        }

        // associate task to new project
        $objTask->project =& $objProject;


    } else if ($tmpId = intval($data['project'])) {

        $pCanAddTask = false;
        if ($objUser->checkLevel(8)) {
            // user is administrator
            $objProject->setUid($tmpId);
            if ($objProject->load()) {
                $pCanAddTask = true;
            }
        } else {
            // user is not administrator
            // need to check rights to access project
            $objMemberProject = new MemberProject();
            if ($objMemberProject->loadPosition($tmpId,$objUser->id))
            {
                $pCanAddTask = $objMemberProject->checkRights(6);
                $objProject =& $objMemberProject->project;
            }
        }

        if ($pCanAddTask) {
            // associate to existing project
            $objTask->project =& $objProject;
        }

    } else {

        // no project
        $objTask->project->name = '-';
        $objTask->project->id = 0;
    }

    // user(s)
    $objMember = new Member();
    $objTask->member =& $objMember;
    if ($tmpId = intval($data['user'])) {
        $objMember->setUid($tmpId);
        $objMember->load();
    }

    // status
	$newStatus = intval($data['status']);
    $oldStatus = -1;
    
    // update DB (if compulsory fields ok)
    if ($objTask->check()) {

        if ($objTask->isLoaded() && $pUserCanEdit) {
            
            // update database
            $objTask->update();
            $pMessage = $langMessage['done_updated'];
            
            // check status changes
            $oldStatus = intval($objOldTask->itemStatus->statusKey);

            if ($objTask->sameSame($objOldTask)) {
                // update list (dynamic)
                /*
                $objResponse->addAssign('eprio'.$objTask->id,'innerHTML','<span class="pr'.$objTask->priority
                    .'" title="'.$_GLOBALS['arrPriorities'][$objItem->priority].'">'.$objTask->priority.'</span>');
                if (@constant('FRK_CONTEXT_ENABLE')) {
                    $objResponse->addAssign('ectxt'.$objTask->id,'innerHTML',$objTask->getContext(@constant('FRK_CONTEXT_LONG')));
                }
                */
                $objResponse->addAssign('eproj'.$objTask->id,'innerHTML',$objTask->project->get('name','-'));
                $strTitle = $objTask->get('title');
                if ($objTask->description) {
                    $strTitle .= '<img src="skins/'.FRK_SKIN_FOLDER
                        .'/images/desc.png" width="16" height="16" align="absmiddle" border="0" alt="" />';
                }
                switch ($objTask->showPrivate) {
                    case 1:
                        $strTitle .= '<img src="skins/'.FRK_SKIN_FOLDER
                            .'/images/priv1.png" width="12" height="16" align="absmiddle" border="0" alt="" />';
                        break;
                    case 2:
                        $strTitle .= '<img src="skins/'.FRK_SKIN_FOLDER
                            .'/images/priv2.png" width="12" height="16" align="absmiddle" border="0" alt="" />';
                        break;
                }
                $objResponse->addAssign('ectxt'.$objTask->id,'innerHTML',$objTask->getContext(@constant('FRK_CONTEXT_LONG')));
                $objResponse->addAssign('etitl'.$objTask->id,'innerHTML',$strTitle);
                $objResponse->addAssign('euser'.$objTask->id,'innerHTML',$objTask->member->getShortName('-'));
                /*
                $objResponse->addAssign('edead'.$objTask->id,'innerHTML',$objTask->member->getDeadline());
                */

                for ($i = 0; $i < FRK_STATUS_LEVELS; $i++) {
                    $j = ($i < $newStatus)?(FRK_STATUS_LEVELS - $i):0;
                    $objResponse->addAssign('est'.($i+1).$objTask->id,'className','sts'.$j);
                }

                // -TODO- remove task if not in context or project
                // -TODO- resort list

                $objResponse->addScriptCall('freak_message',$GLOBALS['langMessage']['done_updated']);

            } else {
                // reload page
                $_SESSION['tznMessage'] = $GLOBALS['langMessage']['done_updated'];
                $objResponse->addScript('freak_rld()');
            }

        } else if ($objUser->checkLevel(11)) {

            $objTask->authorId = $objUser->id;

            // add item to DB (if user has rights to do it)
            $objTask->add();

            // reload page
            $_SESSION['tznMessage'] = $GLOBALS['langMessage']['done_added'];
            $objResponse->addScript('freak_rld()');

        } else {
            $oldStatus = $newStatus;
        }

        // update status
        if ($oldStatus != $newStatus) {
			$objTask->setStatus($newStatus,$objUser->id);

			if ($newStatus == FRK_STATUS_LEVELS) {
				// task is completed
				if (@constant('FRK_COMPLETE_DEADLINE') == TRUE) {
					// update deadline to current date
					$objTask->setDte('deadlineDate','NOW');
					$objTask->update('deadlineDate');
				}
				if (!@constant('FRK_DEFAULT_NO_DEADLINE_KEEP')) {
					// task should disapear from task list view
	                $objResponse->addScriptCall('freak_del_remove',$data['id']);
				}
            }
        }
    }

    $objResponse->addScript('freak_stop()');

    return $objResponse->getXML();
}

function task_delete($id) {

    $objResponse = new xajaxResponse();
    if ($objTask = ajaxLoadTask($id,9,false,$objUser,$objResponse)) {
        $objTask->delete();
        $objResponse->addScriptCall('freak_del_remove',$id);
        $objResponse->addScriptCall('freak_message',$GLOBALS['langMessage']['done_deleted']);
    } else {
        $objResponse->addScriptCall('freak_error',$GLOBALS['langMessage']['not_found_or_denied']);
    }
    $objResponse->addScript('freak_stop()');
    return $objResponse->getXML();

}

function task_comment_edit($id) {
	$objResponse = new xajaxResponse();
	if ($objComment = ajaxLoadTaskComment($id,3,$objUser,$objTask,$objResponse)) {
		//$objResponse->addAssign('veditbody','value',$objComment->body);
		$objResponse->addScriptCall('freak_body_edit',$objComment->id,$objComment->body);
	}
	$objResponse->addScript('freak_stop()');
	return $objResponse->getXML();
}

function task_comment_delete($id) {
	$objResponse = new xajaxResponse();
	if ($objComment = ajaxLoadTaskComment($id,4,$objUser,$objTask,$objResponse)) {
		$objComment->delete();
		$objResponse->addRemove('vcomm'.$id);
		$objCommentList = new ItemComment();
		$objCommentList->addWhere('itemId='.$objComment->itemId);
		$objResponse->addAssign('ecomm'.$objTask->id,'innerHTML',$objCommentList->loadCount());
		$objResponse->addScriptCall('freak_message',$GLOBALS['langMessage']['done_comment_deleted']);
	}
	$objResponse->addScript('freak_stop()');
	return $objResponse->getXML();
}

function task_update_comment($taskId,$commId,$body) {
	$objResponse = new xajaxResponse();
	$str = $GLOBALS['langMessage']['operation_failed'];
	
	//error_log('receiving... task='.$taskId.' comment='.$commId.' body='.$body);
	if ($commId && ($objComment = ajaxLoadTaskComment($commId,3,$objUser,$objTask,$objResponse))) {
		// update comment
		$objComment->set('body',$body);
		if ($objComment->update('body')) {
			$str = $GLOBALS['langMessage']['done_comment_updated'];
		}
	} else if ($objUser = ajaxCheckSession($objResponse)) {
		if ($body && ($objTask = ajaxLoadTask($taskId,2,true,$objUser,$objResponse))) {
			// add new comment
			$objComment = new ItemComment();
			$objComment->set('body',$body);
			$objComment->itemId = $objTask->id;
			$objComment->member->id = $objUser->id;
			if ($objComment->add()) {
				$str = $GLOBALS['langMessage']['done_comment_added'];
			}
		}
	}
	if ($objUser->id) {
		ajaxLoadDetails($objTask,'comm',$objResponse,$objUser);
	}
	$objResponse->addScript('freak_body_edit()');
    $objResponse->addScriptCall('freak_message',$str);
	$objResponse->addScript('freak_stop()');
	return $objResponse->getXML();
}

function staying_alive() {
	// error_log('oh oh oh, staying alive, staying alive...!');
	$objResponse = new xajaxResponse();
    if ($objUser = ajaxCheckSession($objResponse)) {
		// you're cool
		$objResponse->addScript("self.setTimeout('keep_alive()',300000);"); // call again in 5 minutes
		$objResponse->addScript('freak_stop()');
    } else {
    	// user has been disconnected for some reason
    	$_SESSION['tznMessage'] = $GLOBALS['langMessage']['session_expired'];
        $objResponse->addRedirect('login.php');
    }
    
    return $objResponse->getXML();
}

session_start();

require_once ('xajax/xajax.inc.php');

$xajax = new xajax('xajax.task.php');
$xajax->registerFunction("task_load_view");
$xajax->registerFunction("task_load_more");
$xajax->registerFunction("task_load_edit");
$xajax->registerFunction("task_load_users");
$xajax->registerFunction("task_update_status");
$xajax->registerFunction("task_update_full");
$xajax->registerFunction("task_delete");
$xajax->registerFunction("task_comment_edit");
$xajax->registerFunction("task_comment_delete");
$xajax->registerFunction("task_update_comment");
$xajax->registerFunction("staying_alive");

$xajax->processRequests();

?>
