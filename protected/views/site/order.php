<?php
/* @var $this OrdersController */
/* @var $model Orders */
$userID= Yii::app()->user->getId();
$user=Users::model()->find('UserID',array($userID));


 $userFullAddress= $user->UserAddress.', '.$user->UserCity.', '.$user->UserState.', '.$user->UsertZip;

$this->breadcrumbs=array(
	// 'Orders'=>array('index'),
	'Make Order',
);

$model = new Orders;

// $this->menu=array(
// 	array('label'=>'List Orders', 'url'=>array('index')),
// 	array('label'=>'Manage Orders', 'url'=>array('admin')),
// );
?>

<h1>Place an Order</h1>
<div class="well text-center">
	<img src="../../images/cards/front_BTG_logo.png" height="300px" width ="300px" >
	<img src="../../images/cards/back_8.png" height="300px" width ="300px" >

</div>
<!-- This is the information that will appear on your personalized Trivia that Gives business cards:
<br>
<br> -->
<div class="well ">

<?php 
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>array('id'=>1, 'firstName'=>$user->UserFname, 'lastName'=>$user->UserLname, 'phone'=>$user->UserPhone, 'address'=>$userFullAddress, 'fax'=>$user->UserFax, 'email'=>$user->UserEmail, 'username'=>$user->UserAffiliateUsername),
    'attributes'=>array(
	    array('name'=>'firstName', 'label'=>'First name'),
	    array('name'=>'lastName', 'label'=>'Last name'),
	    array('name'=>'phone', 'label'=>'Phone number'),
	    array('name'=>'fax', 'label'=>'Fax number'),
	    array('name'=>'address', 'label'=>'Address'),
	    array('name'=>'email', 'label'=>'Email'),
	    array('name'=>'username','label'=>'Affiliate Username'),

    ),
));
echo "Is this information incorrect? If so, please click ";
echo CHtml::link('here',array('/users/update/'.$userID)); echo ' to update your information.';
echo '<br><br>';

?>

<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'order_form',
	'type'=>'horizontal',
	)); ?>

<fieldset>
	<legend>Payment Option</legend>
	
<!-- 	<?php echo $form->textFieldRow($model, 'OrderCountry'); ?>
	<?php echo $form->textFieldRow($model, 'OrderAddress'); ?>
	<?php echo $form->textFieldRow($model, 'OrderCity'); ?>
	<?php echo $form->textFieldRow($model, 'OrderState'); ?>
	<?php echo $form->textFieldRow($model, 'OrdertZip'); ?>
	<?php echo $form->textFieldRow($model, 'OrderCompletionDate'); ?> -->


	<?php echo $form->radioButtonListRow($model, 'OrderAmmount', array(
			'50',
			'100',
			'250',
			'100,000,000',
		)); ?>
	<?php echo $form->textFieldRow($model, 'OrderCoupon'); ?>
	<?php echo $form->dropDownListRow($model, 'OrderPaymentType', array('Cash', 'Credit','Human Souls','.')); ?>
	


</fieldset>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Place Order')); ?>
</div>

</div>


<?php $this->endWidget();

// echo $this->renderPartial('_form', array('model'=>$model)); 
?>
