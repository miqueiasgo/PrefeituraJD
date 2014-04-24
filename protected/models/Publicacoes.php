<?php

/**
 * This is the model class for table "publicacoes".
 *
 * The followings are the available columns in table 'publicacoes':
 * @property integer $id
 * @property string $titulo
 * @property string $subtitulo
 * @property string $data
 * @property string $situacao
 */
class Publicacoes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Publicacoes the static model class
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
		return 'publicacoes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo, subtitulo, data', 'required'),
			array('titulo, subtitulo', 'length', 'max'=>200),
			array('situacao', 'length', 'max'=>10),
			array('id, titulo, subtitulo, data, situacao,descricao', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'titulo' => 'Título',
			'subtitulo' => 'Órgão',
			'data' => 'Data',
         'descricao' => 'Descrição',
			'situacao' => 'Situação',
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
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('subtitulo',$this->subtitulo,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('situacao',$this->situacao,true);
      $criteria->compare('descricao',$this->descricao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
   
   public function convertData($data){
      $data = explode("-",$data);
      return $data[2]."/".$data[1]."/".$data[0];
   }
   
   public function convertDataSave($data){
      $data = explode("/",$data);
      return $data[2]."-".$data[1]."-".$data[0];
   }
}