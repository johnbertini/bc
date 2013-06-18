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
<div class="well">
	<img src="../../images/cards/back_8.png" alt="Back of Card" height="300" width="171">

	</div>
<?php 

// $this->widget('bootstrap.widgets.TbBox', array(
//     'title' => 'Business Card Example',
//     'headerIcon' => 'icon-home',
//     'content' => ' TEST ' // $this->renderPartial('_view')
// ));



echo $this->renderPartial('_form', array('model'=>$model)); ?>