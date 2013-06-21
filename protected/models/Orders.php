<?php

/**
 * This is the model class for table "tbl_orders".
 *
 * The followings are the available columns in table 'tbl_orders':
 * @property integer $OrderID
 * @property integer $OrderUserID
 * @property integer $OrderSponsorID
 * @property string $OrderCountry
 * @property string $OrderAddress
 * @property string $OrderCity
 * @property string $OrderState
 * @property string $OrdertZip
 * @property string $OrderMadeDate
 * @property string $OrderCompletionDate
 * @property string $OrderStatus
 * @property string $OrderTrackingNum
 * @property double $OrderAmmount
 * @property double $OrderTax
 * @property double $OrderShipping
 */
class Orders extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Orders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_orders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('OrderUserID, OrderSponsorID, OrderCountry, OrderAddress, OrderCity, OrderState, OrdertZip', 'required'),
			array('OrderUserID, OrderSponsorID', 'numerical', 'integerOnly'=>true),
			array('OrderAmmount, OrderTax, OrderShipping', 'numerical'),
			array('OrderCountry, OrderAddress, OrderCity, OrderState, OrdertZip, OrderStatus, OrderTrackingNum', 'length', 'max'=>255),
			array('OrderCompletionDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('OrderID, OrderUserID, OrderSponsorID, OrderCountry, OrderAddress, OrderCity, OrderState, OrdertZip, OrderMadeDate, OrderCompletionDate, OrderStatus, OrderTrackingNum, OrderAmmount, OrderTax, OrderShipping, OrderPaymentType, OrderCoupon', 'safe', 'on'=>'search'),
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
			'OrderID' => 'Order',
			'OrderUserID' => 'UserID',
			'OrderSponsorID' => 'Sponsor',
			'OrderCountry' => 'Country',
			'OrderAddress' => 'Address',
			'OrderCity' => 'City',
			'OrderState' => 'State',
			'OrdertZip' => 'Zip',
			'OrderMadeDate' => 'Date',
			'OrderCompletionDate' => 'Completion Date',
			'OrderStatus' => 'Status',
			'OrderTrackingNum' => ' Tracking Num',
			'OrderAmmount' => 'Amount',
			'OrderTax' => 'Tax',
			'OrderShipping' => 'Shipping',
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

		$criteria->compare('OrderID',$this->OrderID);
		$criteria->compare('OrderUserID',$this->OrderUserID);
		$criteria->compare('OrderSponsorID',$this->OrderSponsorID);
		$criteria->compare('OrderCountry',$this->OrderCountry,true);
		$criteria->compare('OrderAddress',$this->OrderAddress,true);
		$criteria->compare('OrderCity',$this->OrderCity,true);
		$criteria->compare('OrderState',$this->OrderState,true);
		$criteria->compare('OrdertZip',$this->OrdertZip,true);
		$criteria->compare('OrderMadeDate',$this->OrderMadeDate,true);
		$criteria->compare('OrderCompletionDate',$this->OrderCompletionDate,true);
		$criteria->compare('OrderStatus',$this->OrderStatus,true);
		$criteria->compare('OrderTrackingNum',$this->OrderTrackingNum,true);
		$criteria->compare('OrderAmmount',$this->OrderAmmount);
		$criteria->compare('OrderTax',$this->OrderTax);
		$criteria->compare('OrderShipping',$this->OrderShipping);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function beforeSave()
	{
			echo $this->OrderID;
	}
}