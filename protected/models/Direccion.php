<?php

/**
 * This is the model class for table "Direccion".
 *
 * The followings are the available columns in table 'Direccion':
 * @property integer $id
 * @property string $detalle
 * @property string $telefono
 * @property string $otroContacto
 * @property integer $Ciudad_id
 * @property integer $Empresa_id
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property Empresa $empresa
 * @property Ciudad $ciudad
 * @property TutorExterno[] $tutorExternos
 */
class Direccion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Direccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('detalle, telefono, otroContacto, Ciudad_id, Empresa_id', 'required'),
			array('Ciudad_id, Empresa_id', 'numerical', 'integerOnly'=>true),
			array('detalle', 'length', 'max'=>200),
			array('telefono, otroContacto', 'length', 'max'=>50),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, detalle, telefono, otroContacto, Ciudad_id, Empresa_id, fecha', 'safe', 'on'=>'search'),
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
			'empresa' => array(self::BELONGS_TO, 'Empresa', 'Empresa_id'),
			'ciudad' => array(self::BELONGS_TO, 'Ciudad', 'Ciudad_id'),
			'tutorExternos' => array(self::MANY_MANY, 'TutorExterno', 'don_tno(Direccion_id, TutorExterno_id)'),
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
			'telefono' => 'Telefono',
			'otroContacto' => 'Otro Contacto',
			'Ciudad_id' => 'Ciudad',
			'Empresa_id' => 'Empresa',
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
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('otroContacto',$this->otroContacto,true);
		$criteria->compare('Ciudad_id',$this->Ciudad_id);
		$criteria->compare('Empresa_id',$this->Empresa_id);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Direccion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
