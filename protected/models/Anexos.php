<?php

class Anexos extends CActiveRecord
{
	public $anexo;
   
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'anexos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
         array('anexo', 'file','types'=>'pdf,doc,docx,odt'),
         array('id_publicacao, path, name, principal', 'required'),
			array('id_publicacao, principal', 'numerical', 'integerOnly'=>true),
			array('path, name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_publicacao, path, name, principal', 'safe', 'on'=>'search'),
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
			'idPublicacao' => array(self::BELONGS_TO, 'Publicacoes', 'id_publicacao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_publicacao' => 'Id Publicacao',
			'path' => 'Path',
			'name' => 'Nome do Arquivo',
			'principal' => 'Tipo do Arquivo',
         'anexo'=>'Anexo'
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
		$criteria->compare('id_publicacao',$this->id_publicacao);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('principal',$this->principal);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
   
   public function findAnexos($id_publicacao){

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('principal',$this->principal);
      
      if($criteria->condition == NULL){
         $criteria->condition = ' id_publicacao='.$id_publicacao;
      }else{
         $criteria->condition = ' AND id_publicacao='.$id_publicacao;
      }
      
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
   
   public function deleteAllAnexos($id){
		$sql = "DELETE FROM anexos WHERE id_publicacao=".$id;
      $command = Yii::app()->db->createCommand($sql);
      return $command->execute();
	}
}