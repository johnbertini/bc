<?php
/* @var $this OrdersController */
/* @var $model Orders */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'OrderID'); ?>
		<?php echo $form->textField($model,'OrderID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderUserID'); ?>
		<?php echo $form->textField($model,'OrderUserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderSponsorID'); ?>
		<?php echo $form->textField($model,'OrderSponsorID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderCountry'); ?>
		<?php echo $form->textField($model,'OrderCountry',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderAddress'); ?>
		<?php echo $form->textField($model,'OrderAddress',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderCity'); ?>
		<?php echo $form->textField($model,'OrderCity',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderState'); ?>
		<?php echo $form->textField($model,'OrderState',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrdertZip'); ?>
		<?php echo $form->textField($model,'OrdertZip',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderMadeDate'); ?>
		<?php echo $form->textField($model,'OrderMadeDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderCompletionDate'); ?>
		<?php echo $form->textField($model,'OrderCompletionDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderStatus'); ?>
		<?php echo $form->textField($model,'OrderStatus',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderTrackingNum'); ?>
		<?php echo $form->textField($model,'OrderTrackingNum',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderAmmount'); ?>
		<?php echo $form->textField($model,'OrderAmmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderTax'); ?>
		<?php echo $form->textField($model,'OrderTax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderShipping'); ?>
		<?php echo $form->textField($model,'OrderShipping'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->