<?php

/**
 * This is the model class for table "tap_eus".
 *
 * The followings are the available columns in table 'tap_eus':
 * @property integer $TAP_id
 * @property integer $Estatus_id
 * @property string $detalle
 * @property string $fecha
 */
class TapEus extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tap_eus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TAP_id, Estatus_id, detalle', 'required'),
			array('TAP_id, Estatus_id', 'numerical', 'integerOnly'=>true),
			array('detalle', 'length', 'max'=>1024),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TAP_id, Estatus_id, detalle, fecha', 'safe', 'on'=>'search'),
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
			'TAP_id' => 'Tap',
			'Estatus_id' => 'Estatus',
			'detalle' => 'Detalle',
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
		$criteria->compare('Estatus_id',$this->Estatus_id);
		$criteria->compare('detalle',$this->detalle,true);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TapEus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
