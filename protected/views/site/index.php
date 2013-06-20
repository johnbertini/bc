<?php
/* @var $this SiteController */
$userID= Yii::app()->user->getId();
$user=Users::model()->find('UserID',array($userID));
$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to the <?php echo CHtml::encode(Yii::app()->name); ?></h1>
<?php
if (Yii::app()->user->isGuest){
echo '<p>To begin purchasing items, please select "Register" above. If you have an account, you can login.</p>';
}
else{
	echo'<p>Welcome to the ';
	echo CHtml::encode(Yii::app()->name);
	echo ', '.$user->UserFname;
	echo '.';
}

?>