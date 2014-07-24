<?php

/**
 * This is the model class for table "ControlDeEstudio".
 *
 * The followings are the available columns in table 'ControlDeEstudio':
 * @property integer $Usuario_id
 * @property string $nombre
 * @property string $apellido
 * @property string $tipoUsuario
 * @property string $tipoAcceso
 *
 * The followings are the available model relations:
 * @property Usuario $usuario
 */
class ControlDeEstudio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ControlDeEstudio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Usuario_id, nombre, apellido', 'required'),
			array('Usuario_id', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido', 'length', 'max'=>45),
			array('tipoUsuario, tipoAcceso', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Usuario_id, nombre, apellido, tipoUsuario, tipoAcceso', 'safe', 'on'=>'search'),
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
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'Usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Usuario_id' => 'Usuario',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'tipoUsuario' => 'Tipo Usuario',
			'tipoAcceso' => 'Tipo Acceso',
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

		$criteria->compare('Usuario_id',$this->Usuario_id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('tipoUsuario',$this->tipoUsuario,true);
		$criteria->compare('tipoAcceso',$this->tipoAcceso,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ControlDeEstudio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
