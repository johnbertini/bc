<?php
/* @var $this OrdersController */
/* @var $model Orders */
// $this->_id=$user->UserID;
// $this->username=$user->UserAffiliateUsername;
// $this->setState('fname', $user->UserFname);
// $this->setState('lname', $user->UserLname);
// $this->setState('address', $user->UserAddress);
// $this->setState('city', $user->UserCity);
// $this->setState('zip',$user->UsertZip);
// $this->setState('phone',$user->UserPhone);
$fname = Yii::app()->user->fname;
$lname = Yii::app()->user->lname;
$phone = Yii::app()->user->phone;
$address = Yii::app()->user->address;
$city = Yii::app()->user->city;
$zip = Yii::app()->user->zip;
$state = Yii::app()->user->state;
$userFullAddress= $address.', '.$city.', '.$state.', '.$zip;

$this->breadcrumbs=array(
	// 'Orders'=>array('index'),
	'Make Order',
);

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
<?php 

$this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>array('id'=>1, 'firstName'=>$fname, 'lastName'=>$lname, 'phone'=>$phone, 'address'=>$userFullAddress),
    'attributes'=>array(
	    array('name'=>'firstName', 'label'=>'First name'),
	    array('name'=>'lastName', 'label'=>'Last name'),
	    array('name'=>'phone', 'label'=>'Phone number'),
	    array('name'=>'address', 'label'=>'Address'),

    ),
));



echo $this->renderPartial('_form', array('model'=>$model)); ?>