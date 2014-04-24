<?php

class Obras extends CActiveRecord{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Obras the static model class
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
		return 'obras';
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
			array('data, texto_obra', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_obras, titulo, data, texto_obra', 'safe', 'on'=>'search'),
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
			'imagensObrases' => array(self::HAS_MANY, 'ImagensObras', 'id_obra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_obras' => 'Id Obras',
			'titulo' => 'Título',
			'data' => 'Data',
			'texto_obra' => 'Descrição da Obra',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('id_obras',$this->id_obras);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('texto_obra',$this->texto_obra,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
   
   public function convertData($data){
      $data = explode("-",$data);
      $dia = explode(" ",$data[2]);
      $data[2] = $dia[0];

      return $data[2]."/".$data[1]."/".$data[0];
   }
}