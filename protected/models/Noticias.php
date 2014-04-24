<?php

class Noticias extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Noticias the static model class
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
		return 'noticias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('titulo, subtitulo', 'length', 'max'=>200),
			array('data, texto_noticia', 'safe'),
			array('id_noticia, titulo, subtitulo, data, texto_noticia,foto_slideshow', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_noticia' => 'Id Noticia',
			'titulo' => 'Título',
			'subtitulo' => 'Subtítulo',
			'data' => 'Data',
			'texto_noticia' => 'Texto',
			'foto_slideshow' => 'Foto para slideshow',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('id_noticia',$this->id_noticia);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('subtitulo',$this->subtitulo,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('texto_noticia',$this->texto_noticia,true);
		$criteria->compare('foto_slideshow',$this->foto_slideshow,true);

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