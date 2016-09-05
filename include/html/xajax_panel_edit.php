<?php
if (@constant('FRK_CONTEXT_ENABLE')) {
	$objContextList = new ItemContextList();
}

$objUserProjectList = new ProjectStats();
$objUserProjectList->addOrder('statusKey ASC, name ASC');
// $objUserProjectList->addWhere('ps.statusKey < 40');
$objUserProjectList->addHaving('projectStatus_statusKey < 40');
$objUserProjectList->loadList($objUser->id,(!$objUser->checkLevel(6)));

?>
		<table cellpadding="2" cellspacing="0" border="0">
    	  <tr>
    	    <th><?php echo $GLOBALS['langForm']['priority']; ?>:</th>
    	    <td><?php
                $objTemp = new ItemPriority();
                $objTemp->qSelect('priority',($objTask->priority)?$objTask->priority:3,'','','style="width:40px"');
            ?></td>
		<?php
			if (@constant('FRK_CONTEXT_ENABLE')) {
		?>
			<th style="text-align:right"><?php echo $GLOBALS['langForm']['context']; ?>:</td>
			<td><?php
                $objContextList->qSelect('context',$objTask->context,'','width:100px');
            ?></td>
		<?php
			}
		?>
          </tr>
		  <tr>
    	    <th><?php echo $GLOBALS['langForm']['deadline']; ?>:</th>
    	    <td<?php echo (@constant('FRK_CONTEXT_ENABLE'))?' colspan="3"':''; ?>>
			  <input type="text" name="deadlineDate" class="dead" id="freak_cal_d" value="<?php echo ($objTask->deadlineDate)?$objTask->getDte('deadlineDate','FRM'):''; ?>" />
              <img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/cal.gif" id="freak_cal_b" style="cursor: pointer;" alt="Calendar" title="Date selector" />
              <span class="discrete"><?php echo $GLOBALS['langDate']['help']; ?></span>
            </td>
    	  </tr>
    	  <tr>
    	    <th><?php echo $GLOBALS['langForm']['project']; ?>:</th>
    	    <td<?php echo (@constant('FRK_CONTEXT_ENABLE'))?' colspan="3"':''; ?>>
			<span id="project_sel" style="display:block"><?php
				$objUserProjectList->rReset();
				$objUserProjectList->qSelect('project','name',$objTask->project->id,'- - - - - - - - -','width:200px','onChange="freak_mp(this)"'); 
                if ($objUser->checkLevel(7)) {
			?> <a href="javascript:freak_switch_protxt()" class="small">&gt; <?php echo $GLOBALS['langForm']['project_new']; ?></a>
			</span>
			<span id="project_txt" style="display:none"><input type="text" name="project2" value="" style="width:200px"/>
			  <a href="javascript:freak_switch_prosel()" class="small">&lt; <?php echo $GLOBALS['langForm']['project_list']; ?></a>
            <?php
                }
            ?>
            </span>
			</td>
    	  </tr>
    	  <tr>
    	    <th><?php echo $GLOBALS['langForm']['title']; ?>:</th>
			<td<?php echo (@constant('FRK_CONTEXT_ENABLE'))?' colspan="3"':''; ?>><input type="text" name="title" value="<?php echo ($objTask->title)?$objTask->getValue('title'):''; ?>" class="full" /></td>
    	  </tr>
		  <?php if (@constant('FRK_DESCRIPTION_ENABLE')) { ?>
    	  <tr valign="top">
    	    <th><?php echo $GLOBALS['langForm']['description']; ?>:</th>
			<td<?php echo (@constant('FRK_CONTEXT_ENABLE'))?' colspan="3"':''; ?>><textarea name="description" class="full"><?php echo $objTask->description; ?></textarea></td>
    	  </tr>
		  <?php } ?>
          <tr>
            <th><?php echo $GLOBALS['langForm']['user']; ?>:</th>
			<td<?php echo (@constant('FRK_CONTEXT_ENABLE'))?' colspan="3"':''; ?>>
			  <select name="user" style="width:150px;">
				<option value="">-</option>
			  </select>
              <?php
				//$objUserList->qSelect('user','getName()',($objTask->member->id)?$objTask->member->id:$pDefaultUserId,'- not decided -','width:150px');
              ?>
              <span><input type="radio" name="showPrivate" value="0" <?php if ($objTask->showPrivate == 0) echo 'checked="checked" '; ?>/><label><?php echo $GLOBALS['langForm']['public']; ?></label></span>
              <?php
                if ($objUser->checkLevel(12)) { 
              ?>
              <span><input type="radio" name="showPrivate" value="1" <?php if ($objTask->showPrivate == 1) echo 'checked="checked" '; ?>/><label><?php echo $GLOBALS['langForm']['internal']; ?></label></span>
              <?php
                } else if ($objTask->showPrivate == 1) {
                    $objTask->showPrivate++;
                }
              ?>
              <span><input type="radio" name="showPrivate" value="2" <?php if ($objTask->showPrivate == 2) echo 'checked="checked" '; ?>/><label><?php echo $GLOBALS['langForm']['private']; ?></label></span>
            </td>
          </tr>
    	  <tr>
    	    <th><?php echo $GLOBALS['langForm']['status']; ?>:</th>
			<td<?php echo (@constant('FRK_CONTEXT_ENABLE'))?' colspan="3"':''; ?>>
			  <select name="status" style="width:150px">
    	      <?php
				for ($i = 0; $i <= FRK_STATUS_LEVELS; $i++) {
					echo '<option value="'.$i.'"';
					if ($objTask->itemStatus->statusKey == $i) {
						echo ' selected="selected"';
					}
					echo '>'.$GLOBALS['langItemStatus'][$i].'</option>';
					echo "\n";
				}
			  ?>
			  </select>
    	    </td>
    	  </tr>
    	</table>
    	<p class="ctr">
    	  <input type="submit" value="<?php echo $GLOBALS['langForm']['save']; ?>" onClick="return freak_sav()" />
    	  &nbsp; &nbsp;
          <input type="button" value="<?php echo $GLOBALS['langForm']['cancel']; ?>" onClick="freak_edit(0)" />
    	</p>
