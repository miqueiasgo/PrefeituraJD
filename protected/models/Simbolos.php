<?php

/**
 * This is the model class for table "acontece_simbolos".
 *
 * The followings are the available columns in table 'acontece_simbolos':
 * @property integer $id_acontece
 * @property string $titulo
 * @property string $texto
 */
class Simbolos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Simbolos the static model class
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
		return 'acontece_simbolos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo', 'length', 'max'=>200),
			array('texto', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_acontece, titulo, texto', 'safe', 'on'=>'search'),
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
			'id_acontece' => 'Id Acontece',
			'titulo' => 'Titulo',
			'texto' => 'Texto',
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

		$criteria->compare('id_acontece',$this->id_acontece);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('texto',$this->texto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}