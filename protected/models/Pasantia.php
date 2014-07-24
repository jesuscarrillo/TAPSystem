<?php

/**
 * This is the model class for table "Pasantia".
 *
 * The followings are the available columns in table 'Pasantia':
 * @property integer $notaExterna
 * @property integer $TAP_id
 * @property integer $TutorExterno_Id
 * @property integer $Direccion_id
 *
 * The followings are the available model relations:
 * @property TAP $tAP
 * @property TutorExterno $tutorExterno
 */
class Pasantia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Pasantia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TAP_id, TutorExterno_Id, Direccion_id', 'required'),
			array('notaExterna, TAP_id, TutorExterno_Id, Direccion_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('notaExterna, TAP_id, TutorExterno_Id, Direccion_id', 'safe', 'on'=>'search'),
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
			'tAP' => array(self::BELONGS_TO, 'TAP', 'TAP_id'),
			'tutorExterno' => array(self::BELONGS_TO, 'TutorExterno', 'TutorExterno_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'notaExterna' => 'Nota Externa',
			'TAP_id' => 'Tap',
			'TutorExterno_Id' => 'Tutor Externo',
			'Direccion_id' => 'Direccion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('notaExterna',$this->notaExterna);
		$criteria->compare('TAP_id',$this->TAP_id);
		$criteria->compare('TutorExterno_Id',$this->TutorExterno_Id);
		$criteria->compare('Direccion_id',$this->Direccion_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pasantia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
