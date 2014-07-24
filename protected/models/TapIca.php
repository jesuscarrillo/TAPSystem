<?php

/**
 * This is the model class for table "tap_ica".
 *
 * The followings are the available columns in table 'tap_ica':
 * @property integer $id
 * @property string $detalle
 * @property integer $Caracteristica_id
 * @property integer $TAP_id
 * @property integer $tapIcaCita
 * @property integer $versionPrevia
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property Archivo $archivo
 * @property Revision[] $revisions
 * @property Caracteristica $caracteristica
 * @property TAP $tAP
 * @property TapIca $versionPrevia0
 * @property TapIca[] $tapIcas
 * @property TapIca $tapIcaCita0
 * @property TapIca[] $tapIcas1
 */
class TapIca extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tap_ica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('detalle, Caracteristica_id, TAP_id', 'required'),
			array('Caracteristica_id, TAP_id, tapIcaCita, versionPrevia', 'numerical', 'integerOnly'=>true),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, detalle, Caracteristica_id, TAP_id, tapIcaCita, versionPrevia, fecha', 'safe', 'on'=>'search'),
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
			'archivo' => array(self::HAS_ONE, 'Archivo', 'tap_ica_id'),
			'revisions' => array(self::HAS_MANY, 'Revision', 'tap_ica_id'),
			'caracteristica' => array(self::BELONGS_TO, 'Caracteristica', 'Caracteristica_id'),
			'tAP' => array(self::BELONGS_TO, 'TAP', 'TAP_id'),
			'versionPrevia0' => array(self::BELONGS_TO, 'TapIca', 'versionPrevia'),
			'tapIcas' => array(self::HAS_MANY, 'TapIca', 'versionPrevia'),
			'tapIcaCita0' => array(self::BELONGS_TO, 'TapIca', 'tapIcaCita'),
			'tapIcas1' => array(self::HAS_MANY, 'TapIca', 'tapIcaCita'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'detalle' => 'Detalle',
			'Caracteristica_id' => 'Caracteristica',
			'TAP_id' => 'Tap',
			'tapIcaCita' => 'Tap Ica Cita',
			'versionPrevia' => 'Version Previa',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('detalle',$this->detalle,true);
		$criteria->compare('Caracteristica_id',$this->Caracteristica_id);
		$criteria->compare('TAP_id',$this->TAP_id);
		$criteria->compare('tapIcaCita',$this->tapIcaCita);
		$criteria->compare('versionPrevia',$this->versionPrevia);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TapIca the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
