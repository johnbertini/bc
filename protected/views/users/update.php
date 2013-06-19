<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	// 'Users'=>array('index'),
	// $model->UserID=>array('view','id'=>$model->UserID),
	'Update',
);

// $this->menu=array(
// 	array('label'=>'List Users', 'url'=>array('index')),
// 	array('label'=>'Create Users', 'url'=>array('create')),
// 	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->UserID)),
// 	array('label'=>'Manage Users', 'url'=>array('admin')),
// );
?>

<!-- <h1>Update Users <?php echo $model->UserID; ?></h1>
 -->
 <h1>Update Your Profile, <?php echo Yii::app()->user->fname; ?>  </h1>
 <!-- changed this to _form2 so users dont have to renter their password every time. It didn't work though!! -->
<?php echo $this->renderPartial('_form2', array('model'=>$model)); ?>