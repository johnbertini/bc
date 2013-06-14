<?php
/* @var $this OrdersController */
/* @var $data Orders */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->OrderID), array('view', 'id'=>$data->OrderID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderUserID')); ?>:</b>
	<?php echo CHtml::encode($data->OrderUserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderSponsorID')); ?>:</b>
	<?php echo CHtml::encode($data->OrderSponsorID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderCountry')); ?>:</b>
	<?php echo CHtml::encode($data->OrderCountry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderAddress')); ?>:</b>
	<?php echo CHtml::encode($data->OrderAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderCity')); ?>:</b>
	<?php echo CHtml::encode($data->OrderCity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderState')); ?>:</b>
	<?php echo CHtml::encode($data->OrderState); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('OrdertZip')); ?>:</b>
	<?php echo CHtml::encode($data->OrdertZip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderMadeDate')); ?>:</b>
	<?php echo CHtml::encode($data->OrderMadeDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderCompletionDate')); ?>:</b>
	<?php echo CHtml::encode($data->OrderCompletionDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderStatus')); ?>:</b>
	<?php echo CHtml::encode($data->OrderStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderTrackingNum')); ?>:</b>
	<?php echo CHtml::encode($data->OrderTrackingNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderAmmount')); ?>:</b>
	<?php echo CHtml::encode($data->OrderAmmount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderTax')); ?>:</b>
	<?php echo CHtml::encode($data->OrderTax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderShipping')); ?>:</b>
	<?php echo CHtml::encode($data->OrderShipping); ?>
	<br />

	*/ ?>

</div>