<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'UserEmail'); ?>
		<?php echo $form->textField($model,'UserEmail',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UserEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserFname'); ?>
		<?php echo $form->textField($model,'UserFname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UserFname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserLname'); ?>
		<?php echo $form->textField($model,'UserLname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UserLname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserAffiliateUsername'); ?>
		<?php echo $form->textField($model,'UserAffiliateUsername',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UserAffiliateUsername'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserPassword'); ?>
		<?php echo $form->passwordField($model,'UserPassword',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UserPassword'); ?>
	</div>
	<div class="row">
       <?php echo $form->labelEx($model,'UserPassword_repeat'); ?>
       <?php echo $form->passwordField($model,'UserPassword_repeat',array('size'=>60,'maxlength'=>255)); ?>
       <?php echo $form->error($model,'UserPassword_repeat'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'UserSponsorId'); ?>
		<?php echo $form->textField($model,'UserSponsorId',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UserSponsorId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserCountry'); ?>
		<?php echo $form->textField($model,'UserCountry',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UserCountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserAddress'); ?>
		<?php echo $form->textField($model,'UserAddress',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UserAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserCity'); ?>
		<?php echo $form->textField($model,'UserCity',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UserCity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserState'); ?>
		<?php echo $form->textField($model,'UserState',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UserState'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UsertZip'); ?>
		<?php echo $form->textField($model,'UsertZip',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UsertZip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserPhone'); ?>
		<?php echo $form->textField($model,'UserPhone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UserPhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserEIN'); ?>
		<?php echo $form->textField($model,'UserEIN',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UserEIN'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'UserCreated'); ?>
		<?php echo $form->textField($model,'UserCreated'); ?>
		<?php echo $form->error($model,'UserCreated'); ?>
	</div> -->
	<!-- 
	<div class="row">
		<?php echo $form->labelEx($model,'UserLastvisit'); ?>
		<?php echo $form->textField($model,'UserLastvisit'); ?>
		<?php echo $form->error($model,'UserLastvisit'); ?>
	</div> -->

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'UserStatus'); ?>
		<?php echo $form->textField($model,'UserStatus',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UserStatus'); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->