	<fieldset>
		<legend><?php echo $langUser['information']; ?></legend>
        <p><?php echo $langForm['compulsory_legend']; ?></p>
		<table cellpadding="2" cellspacing="1" border="0" class="form">
			<tr>
				<th width="100"><?php echo $langUser['title']; ?>:</th>
				<td><?php $objEditItem->qText('title','','width:50px'); ?> <small>Mr. Mrs. Ms. Dr. Pr. etc...</small></td>
			</tr>
			<tr>
				<th><span class="compulsory"><?php echo $langUser['first_name']; ?></span>:</th>
				<td><?php $objEditItem->qText('firstName','','width:250px'); ?></td>
			</tr>
			<tr>
				<th><?php echo $langUser['middle_name']; ?>:</th>
				<td><?php $objEditItem->qText('middleName','','width:250px'); ?></td>
			</tr>
			<tr>
				<th><span class="compulsory"><?php echo $langUser['last_name']; ?></span>:</th>
				<td><?php $objEditItem->qText('lastName','','width:250px'); ?></td>
			</tr>
			<tr>
			<?php
				if ($pUserIsLogged) {
			?>
				<th><?php echo $langUser['email']; ?>:</th>
			<?php
				} else {
			?>
				<th><span class="compulsory"><?php echo $langUser['email']; ?></span>:</th>
			<?php
				}
			?>
				<td><?php $objEditItem->qText('email','','width:250px'); ?></td>
			</tr>
			<tr>
				<th><?php echo $langUser['city']; ?>:</th>
				<td><?php $objEditItem->qText('city','','width:250px'); ?></td>
			</tr>
			<tr>
				<th><?php echo $langUser['country']; ?>:</th>
				<td><?php 
					$objCountryList->rReset(); 
					$objCountryList->qSelect('countryId','name',$objEditItem->country->id,'','width:250px'); 
				?></td>
			</tr>
			<tr>
				<th><?php echo $langUser['state']; ?>:</th>
				<td>
					<?php
						$objStateList->qSelect('stateCode',$objEditItem->stateCode,$GLOBALS['langUser']['state_us_only'],'width:250px'); 
						$objEditItem->pError('stateCode');
					?>
				</td>
			</tr>
		</table>
	</fieldset><br />
	<fieldset>
		<legend><?php echo $langUser['account']; ?></legend>
		<p><?php echo $langUser['account_legend']; ?></p>
		<table cellpadding="2" cellspacing="1" border="0" class="form">
			<tr>
				<th width="100"><span class="compulsory"><?php echo $langUser['username']; ?></span>:</th>
				<td><?php $objEditItem->qText('username'); ?></td>
			</tr>
			<?php
				if ($objEditItem->isLoaded()) {
			?>
			<tr>
				<td colspan="2" align="center"><small><?php echo $langUser['password_legend']; ?></small></td>
			</tr>
			<?php
				}
			?>
			<tr>
				<th><span class="compulsory"><?php echo $langUser['password']; ?></span>:</th>
				<td><input type="password" name="password1" /><?php
					 if ($strErr = $objEditItem->e('pass')) {
						echo '<span class="tznError">'.$strErr.'</span>';
					}
				?></td>
			</tr>
			<tr>
				<th><span class="compulsory"><?php echo $langUser['password_confirm']; ?></span>:</th>
				<td><input type="password" name="password2" /></td>
			</tr>
		</table>
		<?php
			if ($pRegisterMessage) {
				echo $pRegisterMessage;
			}
			
			if ($objUser->checkLevel(2) && ($objUser->id != $objEditItem->id)) {
				// --- user is admin and is not editing himself -> edit user rights ---
		?>
		<p>
            <span><?php $objEditItem->qCheckBox('enabled',$objEditItem->enabled,'','onClick="tE(gE(\'cust1\'))"'); ?> <label><?php echo $langUser['enabled_label']; ?></label></span>
            <span id="cust1" style="display:<?php echo ($objEditItem->enabled)?'inline':'none'; ?>"><?php $objPositionList->qSelect('level',$objEditItem->level); ?></span>
        </p>
		<?php
			}
		?>
	</fieldset>
