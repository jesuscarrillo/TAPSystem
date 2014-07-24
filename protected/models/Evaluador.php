<?php

/**
 * This is the model class for table "Evaluador".
 *
 * The followings are the available columns in table 'Evaluador':
 * @property integer $TAP_id
 * @property integer $Usuario_id
 * @property string $Rol_name
 * @property integer $nota
 * @property integer $retirado
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property Revision[] $revisions
 * @property Revision[] $revisions1
 */
class Evaluador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Evaluador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TAP_id, Usuario_id, Rol_name', 'required'),
			array('TAP_id, Usuario_id, nota, retirado', 'numerical', 'integerOnly'=>true),
			array('Rol_name', 'length', 'max'=>64),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TAP_id, Usuario_id, Rol_name, nota, retirado, fecha', 'safe', 'on'=>'search'),
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
			'revisions' => array(self::HAS_MANY, 'Revision', 'Evaluador_TAP_id'),
			'revisions1' => array(self::HAS_MANY, 'Revision', 'Evaluador_Usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TAP_id' => 'Tap',
			'Usuario_id' => 'Usuario',
			'Rol_name' => 'Rol Name',
			'nota' => 'Nota',
			'retirado' => 'Retirado',
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
		$criteria->compare('Usuario_id',$this->Usuario_id);
		$criteria->compare('Rol_name',$this->Rol_name,true);
		$criteria->compare('nota',$this->nota);
		$criteria->compare('retirado',$this->retirado);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Evaluador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
