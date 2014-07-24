<?php

/**
 * This is the model class for table "Revision".
 *
 * The followings are the available columns in table 'Revision':
 * @property integer $tap_ica_id
 * @property integer $Evaluador_Usuario_id
 * @property string $detalle
 * @property integer $EstadoRevision_id
 * @property integer $Evaluador_TAP_id
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property EstadoRevision $estadoRevision
 * @property TapIca $tapIca
 * @property Evaluador $evaluadorTAP
 * @property Evaluador $evaluadorUsuario
 */
class Revision extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Revision';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tap_ica_id, Evaluador_Usuario_id, detalle, EstadoRevision_id, Evaluador_TAP_id', 'required'),
			array('tap_ica_id, Evaluador_Usuario_id, EstadoRevision_id, Evaluador_TAP_id', 'numerical', 'integerOnly'=>true),
			array('detalle', 'length', 'max'=>1024),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tap_ica_id, Evaluador_Usuario_id, detalle, EstadoRevision_id, Evaluador_TAP_id, fecha', 'safe', 'on'=>'search'),
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
			'estadoRevision' => array(self::BELONGS_TO, 'EstadoRevision', 'EstadoRevision_id'),
			'tapIca' => array(self::BELONGS_TO, 'TapIca', 'tap_ica_id'),
			'evaluadorTAP' => array(self::BELONGS_TO, 'Evaluador', 'Evaluador_TAP_id'),
			'evaluadorUsuario' => array(self::BELONGS_TO, 'Evaluador', 'Evaluador_Usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tap_ica_id' => 'Tap Ica',
			'Evaluador_Usuario_id' => 'Evaluador Usuario',
			'detalle' => 'Detalle',
			'EstadoRevision_id' => 'Estado Revision',
			'Evaluador_TAP_id' => 'Evaluador Tap',
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

		$criteria->compare('tap_ica_id',$this->tap_ica_id);
		$criteria->compare('Evaluador_Usuario_id',$this->Evaluador_Usuario_id);
		$criteria->compare('detalle',$this->detalle,true);
		$criteria->compare('EstadoRevision_id',$this->EstadoRevision_id);
		$criteria->compare('Evaluador_TAP_id',$this->Evaluador_TAP_id);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Revision the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
