<?php

class m130612_224117_create_orders_table_with_user_relations extends CDbMigration
{
	public function up()
	{
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
	}

	public function down()
	{
		$this->dropTable('tbl_orders');
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