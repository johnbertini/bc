<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserEmail'); ?>
		<?php echo $form->textField($model,'UserEmail',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserFname'); ?>
		<?php echo $form->textField($model,'UserFname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserLname'); ?>
		<?php echo $form->textField($model,'UserLname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserAffiliateUsername'); ?>
		<?php echo $form->textField($model,'UserAffiliateUsername',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserPassword'); ?>
		<?php echo $form->textField($model,'UserPassword',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserSponsorId'); ?>
		<?php echo $form->textField($model,'UserSponsorId',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserCountry'); ?>
		<?php echo $form->textField($model,'UserCountry',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserAddress'); ?>
		<?php echo $form->textField($model,'UserAddress',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserCity'); ?>
		<?php echo $form->textField($model,'UserCity',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserState'); ?>
		<?php echo $form->textField($model,'UserState',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UsertZip'); ?>
		<?php echo $form->textField($model,'UsertZip',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserPhone'); ?>
		<?php echo $form->textField($model,'UserPhone',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserEIN'); ?>
		<?php echo $form->textField($model,'UserEIN',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserCreated'); ?>
		<?php echo $form->textField($model,'UserCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserLastvisit'); ?>
		<?php echo $form->textField($model,'UserLastvisit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserStatus'); ?>
		<?php echo $form->textField($model,'UserStatus',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->