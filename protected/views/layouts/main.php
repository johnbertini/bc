<?php /* @var $this Controller */
$userID =Yii::app()->user->getId(); 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	

	<div id="mainmenu">
		<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	    'type'=>null, // null or 'inverse'
	    'brand'=>'Orders',
	    'collapse'=>true, // requires bootstrap-responsive.css
	    'items'=>array(
	        array(
	            'class'=>'bootstrap.widgets.TbMenu',
	            'items'=>array(
	                array('label'=>'Home', 'url'=>array('/site/index')),
				// array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				// array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Order Business Cards', 'url'=>array('/orders/create'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'View Your Profile', 'url'=>array('/users/view/'.$userID), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Update Your Profile', 'url'=>array('/users/update/'.$userID), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Register', 'url'=>array('/users/create'), 'visible'=>Yii::app()->user->isGuest)

	                
	            ),
	        ),
	        
	    ),
)); ?>
<!-- 
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				// array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				// array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Order Business Cards', 'url'=>array('/orders/create'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'View Your Profile', 'url'=>array('/users/view/'.$userID), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Update Your Profile', 'url'=>array('/users/update/'.$userID), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Register', 'url'=>array('/users/create'), 'visible'=>Yii::app()->user->isGuest)

			),
		)); ?>
		 -->
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Bids that Give.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
