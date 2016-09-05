	<fieldset>
		<legend>
			Project information
		</legend>
		<p>Fields written in <span class="compulsory">bold</span> represents compulsory information.</p>
		<table cellpadding="2" cellspacing="1" border="0" class="form">
			<tr>
				<th width="100"><span class="compulsory">Name</span>:</th>
				<td><?php $objEditItem->qText('name','','width:250px'); ?></td>
			</tr>
			<tr>
				<th>Description:</th>
				<td><?php $objEditItem->qTextArea('description','','width:250px;height:60px'); ?></td>
			</tr>
			<?php
				if ($pUserIsAdmin) {
			?>
			<tr>
				<th>Status:</th>
				<td><?php
					$objStatusList->qSelect('status',$objEditItem->status,'','width:150px'); 
				?>
				</td>
			</tr>
			<?php
				}
			?>
		</table>	
	</fieldset>
