<?php

/**
 * This is the model class for table "TAP".
 *
 * The followings are the available columns in table 'TAP':
 * @property integer $id
 * @property integer $LineaInvestigacion_id
 * @property integer $Area_id
 * @property integer $publica
 * @property string $fechaCreacion
 * @property integer $lapsoInicio
 * @property string $fechaInicio
 * @property string $fechaFin
 * @property integer $lapsoFin
 *
 * The followings are the available model relations:
 * @property CrugeAuthassignment[] $crugeAuthassignments
 * @property Inscripcion $inscripcion
 * @property Pasantia $pasantia
 * @property LapsoAcademico $lapsoInicio0
 * @property LapsoAcademico $lapsoFin0
 * @property LineaInvestigacion $lineaInvestigacion
 * @property LineaInvestigacion $area
 * @property Tesis $tesis
 * @property Estatus[] $estatuses
 * @property TapIca[] $tapIcas
 */
class TAP extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'TAP';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('LineaInvestigacion_id, Area_id', 'required'),
			array('LineaInvestigacion_id, Area_id, publica, lapsoInicio, lapsoFin', 'numerical', 'integerOnly'=>true),
			array('fechaCreacion, fechaInicio, fechaFin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, LineaInvestigacion_id, Area_id, publica, fechaCreacion, lapsoInicio, fechaInicio, fechaFin, lapsoFin', 'safe', 'on'=>'search'),
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
			'crugeAuthassignments' => array(self::MANY_MANY, 'CrugeAuthassignment', 'Evaluador(TAP_id, Usuario_id)'),
			'inscripcion' => array(self::HAS_ONE, 'Inscripcion', 'TAP_id'),
			'pasantia' => array(self::HAS_ONE, 'Pasantia', 'TAP_id'),
			'lapsoInicio0' => array(self::BELONGS_TO, 'LapsoAcademico', 'lapsoInicio'),
			'lapsoFin0' => array(self::BELONGS_TO, 'LapsoAcademico', 'lapsoFin'),
			'lineaInvestigacion' => array(self::BELONGS_TO, 'LineaInvestigacion', 'LineaInvestigacion_id'),
			'area' => array(self::BELONGS_TO, 'LineaInvestigacion', 'Area_id'),
			'tesis' => array(self::HAS_ONE, 'Tesis', 'TAP_id'),
			'estatuses' => array(self::MANY_MANY, 'Estatus', 'tap_eus(TAP_id, Estatus_id)'),
			'tapIcas' => array(self::HAS_MANY, 'TapIca', 'TAP_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'LineaInvestigacion_id' => 'Linea Investigacion',
			'Area_id' => 'Area',
			'publica' => 'Publica',
			'fechaCreacion' => 'Fecha Creacion',
			'lapsoInicio' => 'Lapso Inicio',
			'fechaInicio' => 'Fecha Inicio',
			'fechaFin' => 'Fecha Fin',
			'lapsoFin' => 'Lapso Fin',
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
		$criteria->compare('LineaInvestigacion_id',$this->LineaInvestigacion_id);
		$criteria->compare('Area_id',$this->Area_id);
		$criteria->compare('publica',$this->publica);
		$criteria->compare('fechaCreacion',$this->fechaCreacion,true);
		$criteria->compare('lapsoInicio',$this->lapsoInicio);
		$criteria->compare('fechaInicio',$this->fechaInicio,true);
		$criteria->compare('fechaFin',$this->fechaFin,true);
		$criteria->compare('lapsoFin',$this->lapsoFin);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TAP the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
