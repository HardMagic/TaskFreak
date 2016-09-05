<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

if (!@constant('TZN_IS_IMPORTED')) {
    redirect('index.php');
    exit;
}

include_once(PRJ_CLASS_PATH.'tzn_generic.php');
include_once(PRJ_CLASS_PATH.'tzn_mysql.php');
include_once(PRJ_CLASS_PATH.'tzn_user.php');
include_once(PRJ_CLASS_PATH.'pkg_member.php');
include_once(PRJ_CLASS_PATH.'pkg_project.php');

class Task extends TznDb
{
	function Task()
	{
		parent::TznDb('task');
		$this->addProperties(array(
			'id'	 			=> 'UID',
			'priority'			=> 'NUM',
			'project'			=> 'STR',
			'context'			=> 'STR',
			'title'				=> 'STR',
			'description'		=> 'BBS',
			'status'			=> 'NUM',
			'creationDate'		=> 'DTM',
			'lastChangeDate'	=> 'DTM',
			'deadlineDate'		=> 'DTE'
		));
	}
}

$src_host = $dst_host = TZN_DB_HOST;
$src_user = $dst_user = TZN_DB_USER;
//$src_pass = $dst_pass = TZN_DB_PASS;
$src_base = $dst_base = TZN_DB_BASE;
$src_table = 'task';

if ($_REQUEST['submit']) {
    $src_host = Tzn::getHttp($_POST['src_host']);
    $src_user = Tzn::getHttp($_POST['src_user']);
    $src_pass = Tzn::getHttp($_POST['src_pass']);
    $src_base = Tzn::getHttp($_POST['src_base']);
    $src_table = Tzn::getHttp($_POST['src_table']);

    $dst_host = Tzn::getHttp($_POST['dst_host']);
    $dst_user = Tzn::getHttp($_POST['dst_user']);
    $dst_pass = Tzn::getHttp($_POST['dst_pass']);
    $dst_base = Tzn::getHttp($_POST['dst_base']);

    $objProjectList =  new Member();
    $objProjectList->addOrder('level DESC,lastName ASC');
    $objProjectList->getConnection($dst_host, $dst_user, $dst_pass, $dst_base);
    $objProjectList->loadList();

    $arrProjectList = array();
    while ($objProject = $objProjectList->rNext()) {
        $arrProjectList[$objProject->name] = $arrProjectList->id;
    }

}

$objMemberList =  new Member();
$objMemberList->addOrder('level DESC,lastName ASC');
$objMemberList->getConnection($dst_host, $dst_user, $dst_pass, $dst_base);
$objMemberList->loadList();

?>
<div id="preview">
  <h2 align="center"><strong>Import data from TaskFreak! single user version</strong></h2>
<?php
if (!$_REQUEST['submit']) {

?>
<form method="POST">
  <input type="hidden" name="action" value="4" />
  <center>
    <table cellpadding="4" cellspacing="0" border="0">
        <tr>
            <th>Source<br />(single version)</th>
            <th></th>
            <th>Destination<br />(multiple version)</th>
        </tr>
        <tr>
            <td style="font-family: monospace" valign="top">
                Host &nbsp; &nbsp; : <input type="text" name="src_host" value="<?php echo $src_host; ?>" /><br />
                User &nbsp; &nbsp; : <input type="text" name="src_user" value="<?php echo $src_user; ?>" /><br />
                Pass &nbsp; &nbsp; : <input type="password" name="src_pass" value="<?php echo $src_pass; ?>" /><br />
                Database : <input type="text" name="src_base" value="<?php echo $src_base; ?>" /><br />
                Table &nbsp; &nbsp;: <input type="text" name="src_table" value="<?php echo $src_table; ?>" />
            </td>
            <td style="font-family: monospace" valign="middle"><big>&nbsp;--&gt;&nbsp;</big></td>
            <td style="font-family: monospace" valign="top">
                Host &nbsp; &nbsp; : <input type="text" name="dst_host" value="<?php echo $dst_host; ?>" /><br />
                User &nbsp; &nbsp; : <input type="text" name="dst_user" value="<?php echo $dst_user; ?>" /><br />
                Pass &nbsp; &nbsp; : <input type="password" name="dst_pass" value="<?php echo $dst_pass; ?>" /><br />
                Database : <input type="text" name="dst_base" value="<?php echo $dst_base; ?>" />
            </td>
        </tr>
    </table>
    <div style="text-align:left;width:300px">
        <br />
        <input type="radio" name="user_mode" value="1" onclick="hD(gE('user_context'))" checked="checked" /> Assign tasks to 
        <?php $objMemberList->qSelect('user_list','username','','- nobody -'); ?><br />
        <input type="radio" name="user_mode" value="2" onclick="sD(gE('user_context'))" /> Auto assign tasks from context field
        <div id="user_context" style="margin:0px 0px 0px 25px;padding:5px;background-color:#fcfcfc;display:none">
            <table cellpadding="2" cellspacing="0" border="0">
                <tr>
                    <th style="text-align:left">Context<br />Code (source)</th>
                    <th>&nbsp;</th>
                    <th style="text-align:left">User<br />(destination)</th>
                    <th>&nbsp;</th>
                </tr>
                <?php
                $objMemberList->rReset();
                while($objMember = $objMemberList->rNext()) {
                ?>
                <tr>
                    <td><input type="text" name="user_context[<?php echo $objMember->id; ?>]" style="width:90px"></td>
                    <td>-&gt;</td>
                    <td><?php echo $objMember->getShortName(); ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div><br />
    <div>* Please make sure you had backup your data before trying this *<br />
    <input type="submit" name="submit" value="Import tasks" /></div>
  </center>
</form>
<?php

} else {

    $objSrcList = new Task();
    $objSrcList->addOrder('deadlineDate ASC');
    $objSrcList->getConnection($src_host, $src_user, $src_pass, $src_base);
    $objSrcList->loadList('SELECT * FROM '.$_REQUEST['src_table']);
    echo '<p>Importing '.$objSrcList->rTotal().' Tasks from table <b>'.$_REQUEST['src_table'].'</b> in database <b>'.$src_base.'/'.$objSrcList->_dbConnection->_dbBase
        .'</b><br />Please wait....</p>';

    if ($objSrcList->rNext()) {

        $i=0;
        $pSqlNow = gmdate('Y-m-d',time()-(3600*24*3));
        while ($objSrc = $objSrcList->rNext()) {

            $objItem = new Item();
            
            $objItem->priority = $objSrc->priority;
            $objItem->context = 1;
            $objItem->title = $objSrc->title;
            $objItem->description = $objSrc->description;
            $objItem->deadlineDate = $objSrc->deadlineDate;
            
            // check user
            $pUserId = $_REQUEST['user_list'];
            if ($_REQUEST['user_mode'] == 2) {
                $pUserId = array_search($objSrc->context,$_REQUEST['user_context']);
                $objItem->member->id = $pUserId;
                $objItem->authorId = ($pUserId)?$pUserId:1;
            } else {
                $objItem->member->id = $pUserId;
                $objItem->member->id = $pUserId;
            }

            // check project
            $pProjectId = $arrProjectList[$objSrc->project];
            if (!array_key_exists($objSrc->project,$arrProjectList)) {
                // create project
                $objProject = new Project();
                $objProject->name=$objSrc->project;
                $objProject->getConnection($dst_host, $dst_user, $dst_pass, $dst_base);
                $objProject->add(1,1);
                $arrProjectList[$objSrc->project] = $objProject->id;
                $pProjectId = $objProject->id;
            }
            $objItem->project->id = $pProjectId;
            
            $objItem->getConnection($dst_host, $dst_user, $dst_pass, $dst_base);
            $objItem->add();

            $objItemStatus = new ItemStatus();
            $objItemStatus->itemId = $objItem->id;
            $objItemStatus->member->id = ($pUserId)?$pUserId:1;
            $objItemStatus->statusKey = $objSrc->status;
            $objItemStatus->statusDate = $pSqlNow;
            $objItemStatus->getConnection($dst_host, $dst_user, $dst_pass, $dst_base);
            $objItemStatus->add();

            echo '.';
            if (++$i % 50 == 0) {
                echo "<br />\n";
                usleep(500);
            }
        }

        echo '<p class="ok">'.$i.' tasks imported!! Good job!</p>';

    }
?>
<?php
}
?>
</div>
