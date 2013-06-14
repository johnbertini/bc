<?php

class m130612_233637_create_orders_details_table extends CDbMigration
{
	
	public function up()
	{
		$this->createTable('tbl_orders_details', array(
			'DetailID'=>'pk',
			'DetailOrderID'=>'int(11) NOT NULL',
			'DetailProductID'=>'int(11) NOT NULL',
			'DetailPrice'=>'float NOT NULL',
			'DetailQuantity'=>'int(11) NOT NULL',
			'DetailName'=>'string DEFAULT NULL',
			
			
			), 'Engine=InnoDB' );
	}

	public function down()
	{
		$this->dropTable('tbl_orders_details');
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