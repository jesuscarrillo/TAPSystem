<?php

/**
 * This is the model class for table "Inscripcion".
 *
 * The followings are the available columns in table 'Inscripcion':
 * @property integer $TAP_id
 * @property integer $Estudiante_id
 * @property integer $Estudiante_id2
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property TAP $tAP
 * @property CrugeUser $estudiante
 * @property CrugeUser $estudianteId2
 */
class Inscripcion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Inscripcion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TAP_id, Estudiante_id', 'required'),
			array('TAP_id, Estudiante_id, Estudiante_id2', 'numerical', 'integerOnly'=>true),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TAP_id, Estudiante_id, Estudiante_id2, fecha', 'safe', 'on'=>'search'),
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
			'estudiante' => array(self::BELONGS_TO, 'CrugeUser', 'Estudiante_id'),
			'estudianteId2' => array(self::BELONGS_TO, 'CrugeUser', 'Estudiante_id2'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TAP_id' => 'Tap',
			'Estudiante_id' => 'Estudiante',
			'Estudiante_id2' => 'Estudiante Id2',
			'fecha' => 'Fecha',
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

		$criteria->compare('TAP_id',$this->TAP_id);
		$criteria->compare('Estudiante_id',$this->Estudiante_id);
		$criteria->compare('Estudiante_id2',$this->Estudiante_id2);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inscripcion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
