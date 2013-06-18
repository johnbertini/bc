<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>

<?php
Yii::app()->user->isGuest 
?>
<p>This is the Bids that Give online shop, designed to let you purchase products like business cards and subscriptions.</p>
