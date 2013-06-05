<?php

/**
 * This is the model class for table "training_user_info".
 *
 * The followings are the available columns in table 'training_user_info':
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property integer $arcgis
 * @property integer $dsmax
 * @property integer $revit
 * @property integer $adobe
 * @property integer $rhino_grass
 */
class TrainingUserInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TrainingUserInfo the static model class
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
		return 'training_user_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, phone, email', 'required'),
                        array('email', 'email'),
			array('arcgis, dsmax, revit, adobe, rhino_grass', 'numerical', 'integerOnly'=>true),
			array('name, email', 'length', 'max'=>100),
			array('phone', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, phone, email, arcgis, dsmax, revit, adobe, rhino_grass', 'safe', 'on'=>'search'),
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
			'arcgis' => 'ArcGIS',
			'dsmax' => 'Autodesk 3ds Max',
			'revit' => 'Autodesk Revit',
			'adobe' => 'Adobe Creative Suit (Illustrator + Photoshop + InDesign)',
			'rhino_grass' => 'Rhinoceros 3D + Grasshopper',
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
		$criteria->compare('arcgis',$this->arcgis);
		$criteria->compare('dsmax',$this->dsmax);
		$criteria->compare('revit',$this->revit);
		$criteria->compare('adobe',$this->adobe);
		$criteria->compare('rhino_grass',$this->rhino_grass);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}