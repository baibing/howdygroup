<?php

/**
 * This is the model class for table "admission_vip".
 *
 * The followings are the available columns in table 'admission_vip':
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $university
 * @property string $major
 * @property string $appl_country
 * @property string $appl_major
 */
class AdmissionVip extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AdmissionVip the static model class
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
		return 'admission_vip';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, phone, email, university, major, appl_country, appl_major', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('name, university, major, appl_major', 'length', 'max'=>100),
			array('phone', 'length', 'max'=>15),
			array('email', 'length', 'max'=>80),
			array('appl_country', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, phone, email, university, major, appl_country, appl_major', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'phone' => 'Phone',
			'email' => 'Email',
			'university' => 'Current University',
			'major' => 'Current Major',
                        'appl_country' => 'Target Country',
			'appl_major' => 'Target Major',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('university',$this->university,true);
		$criteria->compare('major',$this->major,true);
		$criteria->compare('appl_country',$this->appl_country,true);
		$criteria->compare('appl_major',$this->appl_major,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        /**
	 * Retrieves a list of countries to select in the dropdown element
	 */
	public function getCountryOptions() {
		return array(
                        "us" => "United States",
                        "uk" => "United Kingdom",
                        "ca" => "Canada",
                );
        }
       
        
        /**
	 * Retrieves a list of majors to select in the dropdown element
	 */
	public function getMajorOptions() {
		return array(
			"Urban Planing" => "Urban Planing",
			"Urban Design" => "Urban Design",
                        "Architecture" => "Architecture",
                        "Landscape Architecture" => "Landscape Architecture",
                );
        }
}