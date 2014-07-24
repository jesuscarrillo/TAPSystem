<?php

/**
 * This is the model class for table "TutorExterno".
 *
 * The followings are the available columns in table 'TutorExterno':
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $cedulaIdentidad
 * @property string $telefono
 * @property string $correoElectronico
 * @property string $curriculum
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property Pasantia[] $pasantias
 * @property Direccion[] $direccions
 */
class TutorExterno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'TutorExterno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, cedulaIdentidad, telefono, correoElectronico, curriculum', 'required'),
			array('nombre, apellido, telefono, correoElectronico', 'length', 'max'=>100),
			array('cedulaIdentidad', 'length', 'max'=>20),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, apellido, cedulaIdentidad, telefono, correoElectronico, curriculum, fecha', 'safe', 'on'=>'search'),
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
			'pasantias' => array(self::HAS_MANY, 'Pasantia', 'TutorExterno_Id'),
			'direccions' => array(self::MANY_MANY, 'Direccion', 'don_tno(TutorExterno_id, Direccion_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'cedulaIdentidad' => 'Cedula Identidad',
			'telefono' => 'Telefono',
			'correoElectronico' => 'Correo Electronico',
			'curriculum' => 'Curriculum',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('cedulaIdentidad',$this->cedulaIdentidad,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('correoElectronico',$this->correoElectronico,true);
		$criteria->compare('curriculum',$this->curriculum,true);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TutorExterno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
