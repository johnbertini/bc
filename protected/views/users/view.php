<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	// 'Users'=>array('index'),
	// $model->UserID,
	'View Profile',
);

// $this->menu=array(
// 	array('label'=>'List Users', 'url'=>array('index')),
// 	array('label'=>'Create Users', 'url'=>array('create')),
// 	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->UserID)),
// 	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->UserID),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Users', 'url'=>array('admin')),
// );
?>

<!-- <h1>View Users #<?php echo $model->UserID; ?></h1>
 -->
 <h1> Your Profile </h1>
 <div class="well text-left">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'UserID',
		'UserEmail',
		'UserFname',
		'UserLname',
		'UserAffiliateUsername',
		// 'UserPassword',
		'UserSponsorId',
		'UserCountry',
		'UserAddress',
		'UserCity',
		'UserState',
		'UsertZip',
		'UserPhone',
		'UserEIN',
		'UserCreated',
		'UserLastvisit',
		'UserStatus',
	),
)); ?>
</div>
