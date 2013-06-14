<?php

class m130612_073231_create_user_table extends CDbMigration
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
    
 }
   public function down()
   {
     $this->dropTable('tbl_users');
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