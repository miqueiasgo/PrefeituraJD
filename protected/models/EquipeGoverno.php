<?php

/**
 * This is the model class for table "adm_equipe".
 *
 * The followings are the available columns in table 'adm_equipe':
 * @property integer $id_adm_equipe
 * @property integer $cargo
 * @property string $titulo
 * @property string $texto
 * @property string $foto
 */
class EquipeGoverno extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EquipeGoverno the static model class
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
		return 'adm_equipe';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cargo', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>50),
			array('texto, foto', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_adm_equipe, cargo, titulo, texto, foto', 'safe', 'on'=>'search'),
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
			'id_adm_equipe' => 'Id Adm Equipe',
			'cargo' => 'Cargo',
			'titulo' => 'Título',
			'texto' => 'Texto',
			'foto' => 'Foto',
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

		$criteria->compare('id_adm_equipe',$this->id_adm_equipe);
		$criteria->compare('cargo',$this->cargo);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('texto',$this->texto,true);
		$criteria->compare('foto',$this->foto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}