<?php

/**
 * This is the model class for table "adm_parcerias".
 *
 * The followings are the available columns in table 'adm_parcerias':
 * @property integer $id_adm_parcerias
 * @property string $titulo
 * @property string $texto
 * @property integer $tipo
 */
class Parcerias extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Parcerias the static model class
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
		return 'adm_parcerias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>200),
			array('texto', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_adm_parcerias, titulo, texto, tipo', 'safe', 'on'=>'search'),
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
			'id_adm_parcerias' => 'Id Adm Parcerias',
			'titulo' => 'Titulo',
			'texto' => 'Texto',
			'tipo' => 'Tipo',
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

		$criteria->compare('id_adm_parcerias',$this->id_adm_parcerias);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('texto',$this->texto,true);
		$criteria->compare('tipo',$this->tipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}