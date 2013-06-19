<?php

/**
 * This is the model class for table "tbl_users".
 *
 * The followings are the available columns in table 'tbl_users':
 * @property integer $UserID
 * @property string $UserEmail
 * @property string $UserFname
 * @property string $UserLname
 * @property string $UserAffiliateUsername
 * @property string $UserPassword
 * @property string $UserSponsorId
 * @property string $UserCountry
 * @property string $UserAddress
 * @property string $UserCity
 * @property string $UserState
 * @property string $UsertZip
 * @property string $UserPhone
 * @property string $UserEIN
 * @property string $UserCreated
 * @property string $UserLastvisit
 * @property string $UserStatus
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public $UserPassword_repeat;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('UserEmail, UserFname, UserLname, UserAffiliateUsername, UserPassword, UserCountry, UserAddress, UserCity, UserState, UsertZip, UserPhone, UserPassword_repeat', 'required'),
			array('UserEmail, UserFname, UserLname, UserAffiliateUsername, UserPassword, UserSponsorId, UserCountry, UserAddress, UserCity, UserState, UsertZip, UserPhone, UserEIN, UserFax', 'length', 'max'=>255),
			array('UserCreated, UserPassword_repeat, UserLastvisit', 'safe'),
			array('UserEmail, UserAffiliateUsername', 'unique'),
			array('UserEmail','email'),
			array('UserPassword','compare'),
			// array('UserPassword', 'password'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('UserID, UserEmail, UserFname, UserLname, UserAffiliateUsername, UserPassword, UserSponsorId, UserCountry, UserAddress, UserCity, UserState, UsertZip, UserPhone, UserEIN, UserCreated, UserLastvisit, UserStatus', 'safe', 'on'=>'search'),
		);
	}

	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'UserID' => 'User',
			'UserEmail' => 'Email',
			'UserFname' => 'First Name',
			'UserLname' => 'Last Name',
			'UserAffiliateUsername' => 'Username',
			'UserPassword' => 'Password',
			'UserSponsorId' => 'Sponsor',
			'UserCountry' => 'Country',
			'UserAddress' => 'Address',
			'UserCity' => 'City',
			'UserState' => 'State',
			'UsertZip' => 'Zip Code',
			'UserPhone' => 'Phone',
			'UserEIN' => 'EIN/ Tax',
			'UserCreated' => 'User Created',
			'UserLastvisit' => 'User Lastvisit',
			'UserStatus' => 'User Status',
			'UserPassword_repeat'=> 'Repeat Password',
			'UserFax'=> 'Fax Number',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('UserID',$this->UserID);
		$criteria->compare('UserEmail',$this->UserEmail,true);
		$criteria->compare('UserFname',$this->UserFname,true);
		$criteria->compare('UserLname',$this->UserLname,true);
		$criteria->compare('UserAffiliateUsername',$this->UserAffiliateUsername,true);
		$criteria->compare('UserPassword',$this->UserPassword,true);
		$criteria->compare('UserSponsorId',$this->UserSponsorId,true);
		$criteria->compare('UserCountry',$this->UserCountry,true);
		$criteria->compare('UserAddress',$this->UserAddress,true);
		$criteria->compare('UserCity',$this->UserCity,true);
		$criteria->compare('UserState',$this->UserState,true);
		$criteria->compare('UsertZip',$this->UsertZip,true);
		$criteria->compare('UserPhone',$this->UserPhone,true);
		$criteria->compare('UserEIN',$this->UserEIN,true);
		$criteria->compare('UserCreated',$this->UserCreated,true);
		$criteria->compare('UserLastvisit',$this->UserLastvisit,true);
		$criteria->compare('UserStatus',$this->UserStatus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function behaviors()
		{
			return array(
				'CTimestampBehavior' => array(
					'class'=> 'zii.behaviors.CTimestampBehavior',
					'createAttribute' => 'UserCreated',
					'updateAttribute' => 'UserLastvisit',
					'setUpdateOnCreate' => true,

	 				),
				);
		}
	protected function afterValidate()
     {
       parent::afterValidate();
	     if(!$this->hasErrors())
	         $this->UserPassword = $this->hashPassword($this->UserPassword);
     }
     /**
      * Generates the password hash.
      * @param string password
        * @return string hash
      */
       public function hashPassword($password)
     {
		return md5($password);
	}
	/**
      * Checks if the given password is correct.
      * @param string the password to be validated
      * @return boolean whether the password is valid
      */
     public function validatePassword($password)
     {
     	// if ($this->hashPassword($password===$this->UserPassword))
     	// 	echo 'Shit';
       return $this->hashPassword($password)===$this->UserPassword;

     }

}