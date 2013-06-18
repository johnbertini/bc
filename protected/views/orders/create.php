<?php
/* @var $this OrdersController */
/* @var $model Orders */
//$user = Yii::app()->user;
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

// $this->widget('bootstrap.widgets.TbBox', array(
//     'title' => 'Business Card Example',
//     'headerIcon' => 'icon-home',
//     'content' => ' TEST ' // $this->renderPartial('_view')
// ));



echo $this->renderPartial('_form', array('model'=>$model)); ?>