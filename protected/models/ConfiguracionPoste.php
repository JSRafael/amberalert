<?php

/**
 * This is the model class for table "alrt_configuracion_poste".
 *
 * The followings are the available columns in table 'alrt_configuracion_poste':
 * @property integer $id
 * @property integer $id_poste_direccion
 * @property integer $id_configuracion
 * @property string $estatus
 * @property integer $registrado_por
 * @property string $fecha_registro
 * @property integer $modificado_por
 * @property string $fecha_modificado
 * @property integer $eliminado
 *
 * The followings are the available model relations:
 * @property Configuracion $idConfiguracion
 * @property DataPosteDireccion $idPosteDireccion
 */
class ConfiguracionPoste extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConfiguracionPoste the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alrt_configuracion_poste';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_poste_direccion, id_configuracion, registrado_por, fecha_registro, modificado_por, fecha_modificado', 'required'),
			array('id_poste_direccion, id_configuracion, registrado_por, modificado_por, eliminado', 'numerical', 'integerOnly'=>true),
			array('estatus', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_poste_direccion, id_configuracion, estatus, registrado_por, fecha_registro, modificado_por, fecha_modificado, eliminado', 'safe', 'on'=>'search'),
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
			'idConfiguracion' => array(self::BELONGS_TO, 'Configuracion', 'id_configuracion'),
			'idPosteDireccion' => array(self::BELONGS_TO, 'DataPosteDireccion', 'id_poste_direccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_poste_direccion' => 'Id Poste Direccion',
			'id_configuracion' => 'Id Configuracion',
			'estatus' => 'Estatus',
			'registrado_por' => 'Registrado Por',
			'fecha_registro' => 'Fecha Registro',
			'modificado_por' => 'Modificado Por',
			'fecha_modificado' => 'Fecha Modificado',
			'eliminado' => 'Eliminado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_poste_direccion',$this->id_poste_direccion);
		$criteria->compare('id_configuracion',$this->id_configuracion);
		$criteria->compare('estatus',$this->estatus,true);
		$criteria->compare('registrado_por',$this->registrado_por);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('modificado_por',$this->modificado_por);
		$criteria->compare('fecha_modificado',$this->fecha_modificado,true);
		$criteria->compare('eliminado',$this->eliminado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}