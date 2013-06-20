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
<div class="well text-center">

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
$this->widget('bootstrap.widgets.TbButton',array(
	'label' => 'Submit Order',
	'size' => 'small'
));
?>
</div>


<?php

// echo $this->renderPartial('_form', array('model'=>$model)); 
?>
