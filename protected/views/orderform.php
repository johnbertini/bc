<?php
/* @var $this OrdersController */
/* @var $model Orders */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orders-orderform-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderUserID'); ?>
		<?php echo $form->textField($model,'OrderUserID'); ?>
		<?php echo $form->error($model,'OrderUserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderSponsorID'); ?>
		<?php echo $form->textField($model,'OrderSponsorID'); ?>
		<?php echo $form->error($model,'OrderSponsorID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderCountry'); ?>
		<?php echo $form->textField($model,'OrderCountry'); ?>
		<?php echo $form->error($model,'OrderCountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderAddress'); ?>
		<?php echo $form->textField($model,'OrderAddress'); ?>
		<?php echo $form->error($model,'OrderAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderCity'); ?>
		<?php echo $form->textField($model,'OrderCity'); ?>
		<?php echo $form->error($model,'OrderCity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderState'); ?>
		<?php echo $form->textField($model,'OrderState'); ?>
		<?php echo $form->error($model,'OrderState'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrdertZip'); ?>
		<?php echo $form->textField($model,'OrdertZip'); ?>
		<?php echo $form->error($model,'OrdertZip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderAmmount'); ?>
		<?php echo $form->textField($model,'OrderAmmount'); ?>
		<?php echo $form->error($model,'OrderAmmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderTax'); ?>
		<?php echo $form->textField($model,'OrderTax'); ?>
		<?php echo $form->error($model,'OrderTax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderShipping'); ?>
		<?php echo $form->textField($model,'OrderShipping'); ?>
		<?php echo $form->error($model,'OrderShipping'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderStatus'); ?>
		<?php echo $form->textField($model,'OrderStatus'); ?>
		<?php echo $form->error($model,'OrderStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderTrackingNum'); ?>
		<?php echo $form->textField($model,'OrderTrackingNum'); ?>
		<?php echo $form->error($model,'OrderTrackingNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderCompletionDate'); ?>
		<?php echo $form->textField($model,'OrderCompletionDate'); ?>
		<?php echo $form->error($model,'OrderCompletionDate'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->