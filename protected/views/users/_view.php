<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->UserID), array('view', 'id'=>$data->UserID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserEmail')); ?>:</b>
	<?php echo CHtml::encode($data->UserEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserFname')); ?>:</b>
	<?php echo CHtml::encode($data->UserFname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserLname')); ?>:</b>
	<?php echo CHtml::encode($data->UserLname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserAffiliateUsername')); ?>:</b>
	<?php echo CHtml::encode($data->UserAffiliateUsername); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserPassword')); ?>:</b>
	<?php echo CHtml::encode($data->UserPassword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserSponsorId')); ?>:</b>
	<?php echo CHtml::encode($data->UserSponsorId); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('UserCountry')); ?>:</b>
	<?php echo CHtml::encode($data->UserCountry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserAddress')); ?>:</b>
	<?php echo CHtml::encode($data->UserAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserCity')); ?>:</b>
	<?php echo CHtml::encode($data->UserCity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserState')); ?>:</b>
	<?php echo CHtml::encode($data->UserState); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UsertZip')); ?>:</b>
	<?php echo CHtml::encode($data->UsertZip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserPhone')); ?>:</b>
	<?php echo CHtml::encode($data->UserPhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserEIN')); ?>:</b>
	<?php echo CHtml::encode($data->UserEIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserCreated')); ?>:</b>
	<?php echo CHtml::encode($data->UserCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserLastvisit')); ?>:</b>
	<?php echo CHtml::encode($data->UserLastvisit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserStatus')); ?>:</b>
	<?php echo CHtml::encode($data->UserStatus); ?>
	<br />

	*/ ?>

</div>