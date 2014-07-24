<?php

/**
 * This is the model class for table "Caracteristica".
 *
 * The followings are the available columns in table 'Caracteristica':
 * @property integer $id
 * @property integer $Capitulo_id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $imprimible
 * @property integer $citable
 * @property integer $adjuntable
 * @property integer $multiplicidad
 * @property integer $pertenencia
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property Capitulo $capitulo
 * @property TapIca[] $tapIcas
 */
class Caracteristica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Caracteristica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Capitulo_id, nombre, descripcion', 'required'),
			array('Capitulo_id, imprimible, citable, adjuntable, multiplicidad, pertenencia', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>100),
			array('descripcion', 'length', 'max'=>200),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Capitulo_id, nombre, descripcion, imprimible, citable, adjuntable, multiplicidad, pertenencia, fecha', 'safe', 'on'=>'search'),
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
			'capitulo' => array(self::BELONGS_TO, 'Capitulo', 'Capitulo_id'),
			'tapIcas' => array(self::HAS_MANY, 'TapIca', 'Caracteristica_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Capitulo_id' => 'Capitulo',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'imprimible' => 'Imprimible',
			'citable' => 'Citable',
			'adjuntable' => 'Adjuntable',
			'multiplicidad' => 'Multiplicidad',
			'pertenencia' => 'Pertenencia',
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
		$criteria->compare('Capitulo_id',$this->Capitulo_id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('imprimible',$this->imprimible);
		$criteria->compare('citable',$this->citable);
		$criteria->compare('adjuntable',$this->adjuntable);
		$criteria->compare('multiplicidad',$this->multiplicidad);
		$criteria->compare('pertenencia',$this->pertenencia);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Caracteristica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
