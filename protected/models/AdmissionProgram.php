<?php

/**
 * This is the model class for table "admission_program".
 *
 * The followings are the available columns in table 'admission_program':
 * @property integer $id
 * @property string $country
 * @property string $sel_major
 * @property string $degree
 * @property string $name
 * @property string $department
 * @property string $major
 * @property string $link
 */
class AdmissionProgram extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AdmissionProgram the static model class
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
		return 'admission_program';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('country, sel_major, degree', 'required'),
			array('country, sel_major, degree', 'length', 'max'=>45),
			array('name, department, major, link', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, country, sel_major, degree, name, department, major, link', 'safe', 'on'=>'search'),
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
			'country' => 'country',
			'sel_major' => 'Major',
			'degree' => 'Degree',
			'name' => 'Name',
			'department' => 'Department',
			'major' => 'Program',
			'link' => 'Link',
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
		$criteria->compare('country',$this->country,true);
		$criteria->compare('sel_major',$this->sel_major,true);
		$criteria->compare('degree',$this->degree,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('major',$this->major,true);
		$criteria->compare('link',$this->link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        /**
	 * Retrieves a list of majors to select in the dropdown element
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
			"Urban Planning" => "Urban Planning",
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
}