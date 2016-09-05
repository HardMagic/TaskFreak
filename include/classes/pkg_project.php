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

//define('PRJ_DTE_NOW',strtotime(gmdate('Y-m-d',time()+Tzn::_getUserTZ())));
define('PRJ_DTE_NOW',strtotime(date('Y-m-d',time()+Tzn::_getUserTZ())));

class ItemStatus extends TznDb
{
	
	function ItemStatus() {
		parent::TznDb('itemStatus');
		$this->addProperties(array(
			'id'			=> 'UID',
			'itemId'		=> 'NUM',
			'statusDate'	=> 'DTM',
			'statusKey'		=> 'NUM',
			'member'		=> 'OBJ'
		));
	}
	
	function getStatus() {
		return $GLOBALS['langItemStatus'][$this->statusKey];
	}
	

    function add() {
        if (!$this->statusDate) {
            $this->setDtm('statusDate','NOW');
        }
        return parent::add();
    }
}

class Item extends TznDb
{
	function Item()
	{
		parent::TznDb('item');
		$this->addProperties(array(
			'id'	 			=> 'UID',
			'project'			=> 'OBJ',
			'priority'			=> 'NUM',
			'context'			=> 'NUM',
			'title'				=> 'STR',
			'description'		=> 'BBS',
            'deadlineDate'      => 'DTE',
            'expectedDuration'  => 'NUM',
			'showInCalendar'	=> 'BOL',
			'showPrivate'   	=> 'NUM',
            'member'            => 'OBJ',
            'authorId'          => 'NUM'
		));
		// default values
		$this->showPrivate = (defined('FRK_DEFAULT_VISIBILITY'))?FRK_DEFAULT_VISIBILITY:1;
	}

    function getDescription() {
        $value = Tzn::_value('description');
		$value = preg_replace("/(?<!\")((http|ftp)+(s)?"
			.":\/\/[^<>\s]+)/i", "<a href=\"\\0\" target=\"_blank\">\\0</a>", $value);
		return nl2br($value);
    }

    function setStatus($status,$userId) {
        $objItemStatus = new ItemStatus();
        $objItemStatus->itemId = $this->id;
        $objItemStatus->member->id = $userId;
        $objItemStatus->statusKey = $status;
        $objItemStatus->add();
    }

    function getContext($mode=false) { // mode=0/short, 1/long
        $str = $GLOBALS['langItemContext'][$this->context];
		if ($mode) {
            return $str;
        } else {
            return '<span style="background-color:'.$GLOBALS['confContext'][$this->context].'" title="'.$str.'">'
            	.Tzn::utf8_substr($str,0,1).'</span>';
        }
	}
	
    function sameSame($objOld) {
        if ($this->priority == $objOld->priority
            && $this->deadlineDate == $objOld->deadlineDate)
        {
            return true;
        } else {
            return false;
        }
    }

	function check() {
		$this->checkEmpty('title');
		if (!$this->priority) {
			$this->priority = 4;
		}
		if (!$this->deadlineDate) {
			$this->deadlineDate = '9999-00-00';
		}
		return (count($this->_error) == 0);
	}

    function getDir($pDir, $key='') {
		$fDir = ($key == 'deadline')?-$pDir:$pDir;
		if ($pDir == 1) {
			return 'ASC';
		} else {
			return 'DESC';
		}
	}

	function setOrder($pSort,$pDir) {
		switch($pSort) {
			case 'deadline';
				$this->addOrder('deadlineDate '.$this->getDir($pDir,'deadline')
					.', priority '.$this->getDir($pDir));
				break;
			case 'priority':
				$this->addOrder('priority '.$this->getDir($pDir)
					.', deadlineDate '.$this->getDir($pDir,'deadline'));
				break;
			default:
				$this->addOrder($pSort.' '.$this->getDir($pDir)
					.', deadlineDate ASC, priority ASC');
				break;
		}
	}

	function loadList($sql='') {
		if ($sql) {
			return parent::loadList(TZN_DB_COUNT_OFF,$sql);
		} else {
			$sql = 'SELECT ii.*, ';
			if (@constant('FRK_MYSQL_VERSION_GT_4_1')) {
				$sql .= 'iis.statusDate as itemStatus_statusDate, iis.statusKey as itemStatus_statusKey, ';
			} else {
				$sql .= 'SUBSTRING(MAX(CONCAT(iis.statusDate,iis.statusKey)),1,19) AS itemStatus_statusDate, '
					.'SUBSTRING(MAX(CONCAT(iis.statusDate,iis.statusKey)),20) AS itemStatus_statusKey, ';
			}
			$sql .= 'pp.name as project_name, '
				.'mm.title as member_title, mm.firstName as member_firstName, mm.middleName as member_middleName, '
				.'mm.lastName as member_lastName, mm.username as member_username';
			if ($userId) {
				$sql .= ', mp.position';
			}
			$sql .= ' FROM '.$this->gTable().' as ii '
				.'INNER JOIN '.$this->gTable('itemStatus').' AS iis ON ii.itemId = iis.itemId '
				.'LEFT JOIN '.$this->gTable('project').' AS pp ON ii.projectId = pp.projectId';
			if ($userId) {
				$sql .= ' LEFT JOIN '.$this->gTable('memberProject')
					.' AS mp ON ii.projectId = mp.projectId AND mp.memberId='.$userId;
			}
			$sql .= ' LEFT JOIN '.$this->gTable('member').' AS mm ON ii.memberId = mm.memberId ';
			$this->addGroup('ii.itemId');
			if (@constant('FRK_MYSQL_VERSION_GT_4_1')) {
				$this->addWhere('iis.statusDate=(SELECT MAX(iis2.statusDate) FROM '.$this->gTable('itemStatus')
					.' AS iis2 WHERE ii.itemId = iis2.itemId)');
			}
			return parent::loadList(TZN_DB_COUNT_AUTO,$sql);
		}
	}

	function delete() {
		if (parent::delete()) {
			$this->query('DELETE FROM '.$this->gTable('itemStatus').' WHERE itemId='.$this->id);
			$this->query('DELETE FROM '.$this->gTable('itemComment').' WHERE itemId='.$this->id);
			$this->query('DELETE FROM '.$this->gTable('itemFile').' WHERE itemId='.$this->id);
			return true;
		}
		return false;
	}

}

class ItemStats extends Item
{
	function ItemStats()
	{
		parent::Item();
		$this->addProperties(array(
            'itemStatus'		=> 'OBJ',
			'itemCommentCount'	=> 'NUM',
			'itemFileCount'		=> 'NUM',
            'position'          => 'NUM'
		));
	}

    function getDeadline($short=false) {
        if (ereg('(9999|0000)',$this->deadlineDate)) {
			return '-';
		} else {
			$dead = strtotime($this->deadlineDate);
			$diff = $dead - intval(PRJ_DTE_NOW) ;
			if ($diff < 0) {
                $format = ($short)?'SHT':'SHX';
				if ($this->itemStatus->statusKey < FRK_STATUS_LEVELS) {
					return '<span class="dlate">'.$this->getDte('deadlineDate',$format).'</span>';
				} else {
					return '<span class="ddone">'.$this->getDte('deadlineDate',$format).'</span>';
				}
			} else if ($diff == 0) {
				if (@constant('FRK_DATEDIFF_MODE') == 'date') {
					return '<span class="dday">'.$this->getDte('deadlineDate',($short)?'SHT':'SHX','').'</span>';
				} else {
					return '<span class="dday">'.$GLOBALS['langTznDate']['today'].'</span>';
				}
			} else if ($short) {
                $diff = $diff / 3600 / 24;
				switch (@constant('FRK_DATEDIFF_MODE')) {
				case 'day':
					if (@constant('FRK_DATEDIFF_TOMORROW') && $diff == 1) {
						return $GLOBALS['langTznDate']['tomorrow'];
					} else if ($diff < 7) {
					    $day = strtolower(date('l',$dead));
					    if (is_array($GLOBALS['langTznDate']) && array_key_exists($day,$GLOBALS['langTznDate'])) {
					       $day = ucfirst($GLOBALS['langTznDate'][$day]);
					    }
					    return '<span class="small">'.ucFirst($day).'</span>';
					} else {
					    return '<span class="small">'
							.$this->getDte('deadlineDate',($short)?'SHT':'SHX','')
							.'</span>';
					}
					break;
				case 'diff':
					switch($diff) {
						case '1':
							if (@constant('FRK_DATEDIFF_TOMORROW')) {
								return $GLOBALS['langTznDate']['tomorrow'];
							} else {
								return '1 '.$GLOBALS['langTznDate']['day'];
							}
							break;
						case '2':
						case '3':
						case '4':
						case '5':
						case '6':
							return $diff.' '.$GLOBALS['langTznDate']['dasy'];
							break;
						default:
							return '<span class="small">'
								.$this->getDte('deadlineDate',($short)?'SHT':'SHX','')
								.'</span>';
							break;
					}
					break;
				default:
					return '<span class="small">'
						.$this->getDte('deadlineDate','SHT','')
						.'</span>';
					break;
				}
            } else {
                return '<span class="dtodo">'.$this->getDte('deadlineDate','SHX').'</span>'; 
            }
        }
    }

    function pDeadline() {
		echo $this->getDeadline(true);
	}

    function pStatus() {
		echo $this->itemStatus->getStatus();
	}

    function checkRights($userId, $level=0, $userCanToo=false) {
    	if (!$this->position) {
    		$this->position = 0;
    	}
        if ($userCanToo && $userId == $this->member->id) {
            return true;
        } else if ($userId == $this->authorId) {
            return true;
        } else if ($level) {
            $level--;
            return ($GLOBALS['confProjectRights'][$this->position]{$level} == '1');
        } else {
            return (intval($this->position) > 0);
        }
    }

    function _cleanProperties() {
        unset($this->_properties['itemCommentCount']);
        unset($this->_properties['itemFileCount']);
        unset($this->_properties['position']);
        unset($this->_properties['itemStatus']);
        unset($this->itemStatus);
        unset($this->itemCommentCount);
        unset($this->itemFileCount);
        unset($this->position);
    }

    function add() {
        $this->_cleanProperties();
        parent::add();
    }
	
    function update($param='') {
        $this->_cleanProperties();
        parent::update($param);
    }

	function load($userId) {
		if (!$this->id) {
			return false;
		}
        if (@constant('FRK_MYSQL_VERSION_GT_4_1')) {
            // optimize for mysql > 4.1
            $sql = 'SELECT ii.*, count(iic.postDate) as itemCommentCount, count(iif.postDate) as itemFileCount, '
                .'iis.statusDate as itemStatus_statusDate, iis.statusDate, iis.statusKey as itemStatus_statusKey, '
                .'pp.name as project_name, '
                .'mm.title as member_title, mm.firstName as member_firstName, mm.middleName as member_middleName, '
                .'mm.lastName as member_lastName, mm.username as member_username, mp.position '
                .'FROM '.$this->gTable().' AS ii '
                .'INNER JOIN '.$this->gTable('itemStatus').' AS iis ON ii.itemId = iis.itemId '
                .'LEFT JOIN '.$this->gTable('project').' AS pp ON ii.projectId = pp.projectId '
                .'LEFT JOIN '.$this->gTable('memberProject').' AS mp ON ii.projectId = mp.projectId AND mp.memberId='.$userId
                .' LEFT JOIN '.$this->gTable('member').' AS mm ON ii.memberId = mm.memberId '
                .'LEFT JOIN '.$this->gTable('itemComment').' AS iic ON ii.itemId=iic.itemId '
                .'LEFT JOIN '.$this->gTable('itemFile').' AS iif ON ii.itemId=iif.itemId '
                .'WHERE iis.statusDate=(SELECT MAX(iis2.statusDate) FROM '.$this->gTable('itemStatus')
                .' AS iis2 WHERE ii.itemId = iis2.itemId) AND ii.itemId = '.$this->id.' GROUP BY ii.itemId';
        } else {
            $sql = 'SELECT ii.*, count(iic.postDate) as itemCommentCount, count(iif.postDate) as itemFileCount, '
                .'SUBSTRING(MAX(CONCAT(iis.statusDate,iis.statusKey)),1,19) AS itemStatus_statusDate, '
                .'SUBSTRING(MAX(CONCAT(iis.statusDate,iis.statusKey)),20) AS itemStatus_statusKey, '
                .'pp.name as project_name, '
                .'mm.title as member_title, mm.firstName as member_firstName, mm.middleName as member_middleName, '
                .'mm.lastName as member_lastName, mm.username as member_username, mp.position '
                .'FROM '.$this->gTable().' AS ii '
                .'INNER JOIN '.$this->gTable('itemStatus').' AS iis ON ii.itemId = iis.itemId '
                .'LEFT JOIN '.$this->gTable('project').' AS pp ON ii.projectId = pp.projectId '
                .'LEFT JOIN '.$this->gTable('memberProject').' AS mp ON ii.projectId = mp.projectId AND mp.memberId='.$userId
                .' LEFT JOIN '.$this->gTable('member').' AS mm ON ii.memberId = mm.memberId '
                .'LEFT JOIN '.$this->gTable('itemComment').' AS iic ON ii.itemId=iic.itemId '
                .'LEFT JOIN '.$this->gTable('itemFile').' AS iif ON ii.itemId=iif.itemId '
                .'WHERE ii.itemId = '.$this->id.' GROUP BY ii.itemId';
        }
		$this->getConnection();
		if ($result = $this->query($sql)) {
			if ($data = $result->rNext()) {
				$this->setAuto($data);
				$this->_loaded = true;
				return $this->id;
			}   
        }
		return false;
	}
	
	function addDateFilter($filter) {
		if (@constant('FRK_MYSQL_VERSION_GT_4_1')) {
			$this->addWhere('('.$filter.')');
		} else {
			$this->addHaving(str_replace('status','itemStatus_status',$filter));
		}
	}
	
	function loadList($userId=0) {
		$sql = 'SELECT ii.*, ';
        if (@constant('FRK_MYSQL_VERSION_GT_4_1')) {
			$sql .= 'count(iic.postDate) as itemCommentCount, '
				.'count(iif.postDate) as itemFileCount, '
				.'iis.statusDate as itemStatus_statusDate, iis.statusKey as itemStatus_statusKey, ';
        } else {
            $sql .= 'count(DISTINCT iic.postDate) as itemCommentCount, '
				.'count(DISTINCT iif.postDate) as itemFileCount, '
				.'SUBSTRING(MAX(CONCAT(iis.statusDate,iis.statusKey)),1,19) AS itemStatus_statusDate, '
                .'SUBSTRING(MAX(CONCAT(iis.statusDate,iis.statusKey)),20) AS itemStatus_statusKey, ';
        }
        $sql .= 'pp.name as project_name, '
            .'mm.title as member_title, mm.firstName as member_firstName, mm.middleName as member_middleName, '
            .'mm.lastName as member_lastName, mm.username as member_username';
        if ($userId) {
            $sql .= ', mp.position';
        }
        $sql .= ' FROM '.$this->gTable().' as ii '
            .'INNER JOIN '.$this->gTable('itemStatus').' AS iis ON ii.itemId = iis.itemId '
            .'LEFT JOIN '.$this->gTable('project').' AS pp ON ii.projectId = pp.projectId';
        if ($userId) {
            $sql .= ' LEFT JOIN '.$this->gTable('memberProject')
                .' AS mp ON ii.projectId = mp.projectId AND mp.memberId='.$userId;
        }
        $sql .= ' LEFT JOIN '.$this->gTable('member').' AS mm ON ii.memberId = mm.memberId '
            .'LEFT JOIN '.$this->gTable('itemComment').' AS iic ON ii.itemId=iic.itemId '
			.'LEFT JOIN '.$this->gTable('itemFile').' AS iif ON ii.itemId=iif.itemId ';
		$this->addGroup('ii.itemId');
        if (@constant('FRK_MYSQL_VERSION_GT_4_1')) {
            $this->addWhere('iis.statusDate=(SELECT MAX(iis2.statusDate) FROM '.$this->gTable('itemStatus')
                .' AS iis2 WHERE ii.itemId = iis2.itemId)');
        }
		return parent::loadList($sql);
	}
}

class ItemContextList extends TznCollection
{
    function ItemContextList() {
		parent::TznCollection($GLOBALS['langItemContext']);
    }

    function getColor($code) {
        if (array_key_exists($code, $GLOBALS['confContext'])) {
            return $GLOBALS['confContext'][$code];
        } else {
            return '#666';
        }
    }

}

class ItemComment extends TznDb
{
	function ItemComment()
	{
		parent::TznDb('itemComment');
		$this->addProperties(array(
			'id'				=> 'UID',
			'itemId'			=> 'NUM',
			'member'			=> 'OBJ',
			'postDate'			=> 'DTM',
			'body'				=> 'BBS',
			'lastChangeDate'	=> 'DTM'
		));
	}
	
	/*
	function _idkey() {
		return 'taskId = '.$this->taskId
			.' AND memberId = '.$this->member->id
			.' AND postDate = \''.$this->postDate.'\'';
	}
	 */

	function checkRights($userId, $level=0, $objTask, $userCanToo=false) {
		//error_log('checkin #'.$this->id.'/'.$level.' : '.$userId.' = '.$this->member->id);
		if ($userId == $objTask->member->id && $userCanToo) {
			return true;
		} else if ($userId == $this->member->id) {
            return true;
        } else if ($level) {
            $level--;
            return ($GLOBALS['confProjectRights'][$objTask->position]{$level} == '1');
		} else {
			return false;
		}
    }
	
	function add() {
		$this->setDtm('postDate','NOW');
		return parent::add();
	}
	
	function update() {
		$this->setDtm('lastChangeDate','NOW');
		return parent::update();
	}
	
	/*
	function delete() {
		if ($this->taskId && $this->member->id && $this->postDate) {
			$this->getConnection();
			$sql = 'DELETE FROM taskComment WHERE '.$this->_idkey();
			return $this->query($sql);
		} else {
			return false;
		}
	}
	*/
	
}

class ItemCommentFull extends ItemComment
{

	function ItemCommentFull()
	{
		parent::TaskComment();
		$this->addProperties(array(
			'memberProject'			=> 'OBJ'
		));
	}
	
	function loadList() {
		$sql = 'SELECT iic.*, mm.username as member_username, mm.timeZone as member_timeZone,'
			.'mm.creationDate as member_creationDate, mm.firstName as member_firstName, '
			.'mm.middleName as member_middleName, mm.lastName as member_lastName, '
			.'mp.position as memberTeam_position '
			.'FROM '.$this->gTable('itemComment').' AS iic '
            .'INNER JOIN '.$this->gTable('member').' AS mm ON iic.memberId=mm.memberId '
			.'INNER JOIN '.$this->gTable('item').' AS ii ON ii.itemId = iic.itemId '
			.'LEFT JOIN '.$this->gTable('memberProject').' AS mp ON iic.memberId = mp.memberId '
			.'AND mp.teamId = ii.teamId';
		return parent::loadList($sql);
	}

}

// easy meat

class ItemPriority extends TznCollection
{
	
	function ItemPriority() {
		/* $prioCount = (@constant('FRK_PRIORITY_LEVELS'))?FRK_PRIORITY_LEVELS:9;
		$arrPrio = array();
		for($i=1;$i<=$prioCount;$i++) {
			$arrPrio[$i] = $i;
		} */
		parent::TznCollection($GLOBALS['langItemPriority']);
	}
}

?>
