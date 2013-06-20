<?php

class m130620_215539_modify_orders_table extends CDbMigration
{
	public function up()
	{
		$this->addColumn('tbl_orders','OrderPaymentType','string NOT NULL');
		$this->addColumn('tbl_orders','OrderCoupon','string NOT NULL');
	}

	public function down()
	{
		
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