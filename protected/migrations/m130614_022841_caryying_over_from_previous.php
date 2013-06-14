<?php

class m130614_022841_caryying_over_from_previous extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_users', array(
         'UserID'=>'pk',
         'UserEmail'=>'string NOT NULL',
         'UserFname'=>'string NOT NULL',
         'UserLname'=>'string NOT NULL',
         'UserAffiliateUsername'=>'string NOT NULL',
         'UserPassword'=>'string NOT NULL',
         'UserSponsorId'=>'string default NULL',
         'UserCountry'=>'string NOT NULL',
         'UserAddress'=>'string NOT NULL',
         'UserCity'=>'string NOT NULL',
         'UserState'=>'string NOT NULL',
         'UsertZip'=> 'string NOT NULL',
         'UserPhone'=>'string NOT NULL',
         'UserEIN'=>'string default NULL',
         'UserCreated'=>'DATETIME default NULL',
         'UserLastvisit'=>'DATETIME default NULL',
         'UserStatus'=>'string NOT NULL',
       ), 'ENGINE=InnoDB'); 

		$this->createTable('tbl_orders', array(
			'OrderID'=>'pk',
			'OrderUserID'=>'int(11) NOT NULL',
			'OrderSponsorID'=>'int(11) NOT NULL',
			'OrderCountry'=>'string NOT NULL',
         	'OrderAddress'=>'string NOT NULL',
	        'OrderCity'=>'string NOT NULL',
	        'OrderState'=>'string NOT NULL',
	        'OrdertZip'=> 'string NOT NULL',
			'OrderMadeDate'=>'datetime NOT NULL',
			'OrderCompletionDate'=>'DATETIME default NULL',
			'OrderStatus'=>'string NOT NULL',
			'OrderTrackingNum'=>'string default NULL',
			'OrderAmmount'=>'float NOT NULL',
			'OrderTax'=>'float NOT NULL',
			'OrderShipping'=>'float NOT NULL',
			), 'ENGINE=InnoDB' );

		$this->createTable('tbl_orders_details', array(
			'DetailID'=>'pk',
			'DetailOrderID'=>'int(11) NOT NULL',
			'DetailProductID'=>'int(11) NOT NULL',
			'DetailPrice'=>'float NOT NULL',
			'DetailQuantity'=>'int(11) NOT NULL',
			'DetailName'=>'string DEFAULT NULL',
			), 'Engine=InnoDB' );

		$this->createTable('tbl_products', array(
			'ProductID'=>'pk',
			'ProductName'=>'string NOT NULL',
			'ProductDescrpition'=>'string NOT NULL',
			'ProductPrice'=>'float NOT NULL',
			'ProductWeight'=>'float NOT NULL',
			'ProductStock'=>'int(11) DEFAULT NULL',
			'ProductLive'=>'int(11) DEFAULT NULL',
			'ProductUnlimited'=>'int(11) DEFAULT NULL',
			'ProductUpdated'=>'datetime DEFAULT NULL',
			), 'ENGINE=InnoDB');

	}

	public function down()
	{
		$this->dropTable('tbl_users');
		$this->dropTable('tbl_orders');
		$this->dropTable('tbl_orders_details');
		$this->dropTable('tbl_product');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}