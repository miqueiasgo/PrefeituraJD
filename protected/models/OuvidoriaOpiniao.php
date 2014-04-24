<?php

/**
 * This is the model class for table "ouvidoria_opiniao".
 *
 * The followings are the available columns in table 'ouvidoria_opiniao':
 * @property integer $id_ouvidoria
 * @property string $nome
 * @property string $email
 * @property string $texto
 */
class OuvidoriaOpiniao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OuvidoriaOpiniao the static model class
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
		return 'ouvidoria_opiniao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, email', 'length', 'max'=>200),
			array('texto', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_ouvidoria, nome, email, texto', 'safe', 'on'=>'search'),
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
			'id_ouvidoria' => 'Id Ouvidoria',
			'nome' => 'Nome',
			'email' => 'Email',
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

		$criteria->compare('id_ouvidoria',$this->id_ouvidoria);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('texto',$this->texto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}