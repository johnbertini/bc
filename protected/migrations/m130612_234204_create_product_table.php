<?php

class m130612_234204_create_product_table extends CDbMigration
{
	public function up()
	{
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