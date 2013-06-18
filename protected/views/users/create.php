<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	// 'Users'=>array('index'),
	'Register',
);

// $this->menu=array(
// 	array('label'=>'List Users', 'url'=>array('index')),
// 	array('label'=>'Manage Users', 'url'=>array('admin')),
// );
?>

<h1>Registration</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>