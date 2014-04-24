<?php

/**
 * This is the model class for table "acontece_fotos".
 *
 * The followings are the available columns in table 'acontece_fotos':
 * @property integer $id_acontece_fotos
 * @property string $titulo
 * @property string $data
 * @property string $texto_album
 *
 * The followings are the available model relations:
 * @property ImagensAlbum[] $imagensAlbums
 */
class Fotos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Fotos the static model class
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
		return 'acontece_fotos';
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
			array('data, texto_album', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_acontece_fotos, titulo, data, texto_album', 'safe', 'on'=>'search'),
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
			'imagensAlbums' => array(self::HAS_MANY, 'ImagensAlbum', 'id_acontece_fotos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_acontece_fotos' => 'Id Acontece Fotos',
			'titulo' => 'Titulo',
			'data' => 'Data',
			'texto_album' => 'Texto Album',
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

		$criteria->compare('id_acontece_fotos',$this->id_acontece_fotos);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('texto_album',$this->texto_album,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}