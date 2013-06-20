<?php
/* @var $this UsersController */
/* @var $model Users */
$userID= Yii::app()->user->getId();
$user=Users::model()->find('UserID',array($userID));
$this->breadcrumbs=array(
	// 'Users'=>array('index'),
	// $model->UserID=>array('view','id'=>$model->UserID),
	'Update Profile',
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
 <h1>Update Your Profile, <?php echo $user->UserFname; ?>  </h1>
 <!-- changed this to _form2 so users dont have to renter their password every time. It didn't work though!! -->
 <div class="well text-left">
<!--  <p> This is your user info! If you update it, you need to enter and reenter your password. To change it, enter and reenter a new password.</p>
 -->
<?php echo $this->renderPartial('_form2', array('model'=>$model)); ?>
</div>