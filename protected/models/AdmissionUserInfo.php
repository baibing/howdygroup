<?php

/**
 * This is the model class for table "admission_user_info".
 *
 * The followings are the available columns in table 'admission_user_info':
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $university
 * @property string $major
 * @property string $gpa
 * @property integer $appl_term
 * @property integer $toefl
 * @property integer $gre
 * @property string $appl_major
 * @property string $appl_degree
 * @property string $appl_country
 */
class AdmissionUserInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AdmissionUserInfo the static model class
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
		return 'admission_user_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, phone, email, university, major, gpa, appl_term, appl_major, appl_degree, appl_country', 'required'),
			array('appl_term, toefl, gre', 'numerical', 'integerOnly'=>true, 'min'=>0),
			array('toefl', 'numerical', 'integerOnly'=>true, 'max'=>120),
			array('gre', 'numerical', 'integerOnly'=>true, 'max'=>1600),
			array('name, university, major, appl_major', 'length', 'max'=>100),
			array('phone', 'length', 'max'=>15),
                        array('email', 'email'),
			array('email', 'length', 'max'=>80),
			array('gpa, appl_term', 'length', 'max'=>5),
                        array('appl_degree, appl_country', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, phone, email, university, major, gpa, appl_term, toefl, gre, appl_major, appl_degree, appl_country', 'safe', 'on'=>'search'),
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
			'gpa' => 'GPA',
			'appl_term' => 'Expected Term of Enrollment',
			'toefl' => 'TOEFL iBT Score',
			'gre' => 'GRE Score',
			'appl_major' => 'Target Major',
			'appl_degree' => 'Target Degree',	
                        'appl_country' => 'Target Country',
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
		$criteria->compare('gpa',$this->gpa,true);
		$criteria->compare('appl_term',$this->appl_term);
		$criteria->compare('toefl',$this->toefl);
		$criteria->compare('gre',$this->gre);
		$criteria->compare('appl_major',$this->appl_major,true);
		$criteria->compare('appl_degree',$this->appl_degree,true);
		$criteria->compare('appl_country',$this->appl_country,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        /**
	 * Retrieves a list of terms to select in the dropdown element
	 */
	public function getTermOptions() {
		return array(
			"20141" => "Spring 2014",
                        "20142" => "Summer 2014",
                        "20143" => "Fall 2014",
			"20151" => "Spring 2015",
                        "20152" => "Summer 2015",
                        "20153" => "Fall 2015",
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
        
        /**
	 * Retrieves a list of degrees to select in the dropdown element
	 */
	public function getDegreeOptions() {
		return array(
                        "master" => "Master's",
                        "phd" => "Ph.D.",
                );
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
}