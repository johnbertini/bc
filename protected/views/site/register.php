<?php 

$this->pageTitle=Yii::app()->name . ' - Register';
$this->breadcrumbs=array(
	'Register',
);
?>

<h1>Register</h1>
<?php 
echo $this->renderPartial('_form', array('model'=>$model)); ?>
?>