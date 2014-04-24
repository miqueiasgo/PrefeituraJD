<?php

/**
 * This is the model class for table "sic".
 *
 * The followings are the available columns in table 'sic':
 * @property integer $id_sic
 * @property integer $cpf
 * @property string $doc_tipo
 * @property string $doc_valor
 * @property string $nome
 * @property string $data_nascimento
 * @property integer $sexo
 * @property string $escolaridade
 * @property string $profissao
 * @property string $email
 * @property integer $cep
 * @property string $endereco
 * @property string $complemento
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 * @property string $pais
 * @property integer $telefone1
 * @property integer $telefone2
 * @property integer $telefone3
 * @property string $motivo
 * @property string $orgao
 * @property string $assunto
 * @property string $descricao
 * @property string $anexo
 */
class Sic extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sic the static model class
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
		return 'sic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_sic, cpf, doc_tipo, doc_valor, nome, data_nascimento, sexo, cep, endereco, bairro, cidade, uf, pais, telefone1, motivo, orgao, assunto, descricao', 'required'),
			array('id_sic, cpf, sexo, cep, telefone1, telefone2, telefone3', 'numerical', 'integerOnly'=>true),
			array('doc_tipo, doc_valor, nome, escolaridade, profissao, email, complemento, bairro, motivo, orgao, assunto, anexo', 'length', 'max'=>100),
			array('endereco', 'length', 'max'=>200),
			array('cidade, uf, pais', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_sic, cpf, doc_tipo, doc_valor, nome, data_nascimento, sexo, escolaridade, profissao, email, cep, endereco, complemento, bairro, cidade, uf, pais, telefone1, telefone2, telefone3, motivo, orgao, assunto, descricao, anexo', 'safe', 'on'=>'search'),
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
			'id_sic' => 'Id Sic',
			'cpf' => 'Cpf',
			'doc_tipo' => 'Doc Tipo',
			'doc_valor' => 'Doc Valor',
			'nome' => 'Nome',
			'data_nascimento' => 'Data Nascimento',
			'sexo' => 'Sexo',
			'escolaridade' => 'Escolaridade',
			'profissao' => 'Profissao',
			'email' => 'Email',
			'cep' => 'Cep',
			'endereco' => 'Endereco',
			'complemento' => 'Complemento',
			'bairro' => 'Bairro',
			'cidade' => 'Cidade',
			'uf' => 'Uf',
			'pais' => 'Pais',
			'telefone1' => 'Telefone1',
			'telefone2' => 'Telefone2',
			'telefone3' => 'Telefone3',
			'motivo' => 'Motivo',
			'orgao' => 'Orgao',
			'assunto' => 'Assunto',
			'descricao' => 'Descricao',
			'anexo' => 'Anexo',
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

		$criteria->compare('id_sic',$this->id_sic);
		$criteria->compare('cpf',$this->cpf);
		$criteria->compare('doc_tipo',$this->doc_tipo,true);
		$criteria->compare('doc_valor',$this->doc_valor,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('data_nascimento',$this->data_nascimento,true);
		$criteria->compare('sexo',$this->sexo);
		$criteria->compare('escolaridade',$this->escolaridade,true);
		$criteria->compare('profissao',$this->profissao,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('cep',$this->cep);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('complemento',$this->complemento,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('uf',$this->uf,true);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('telefone1',$this->telefone1);
		$criteria->compare('telefone2',$this->telefone2);
		$criteria->compare('telefone3',$this->telefone3);
		$criteria->compare('motivo',$this->motivo,true);
		$criteria->compare('orgao',$this->orgao,true);
		$criteria->compare('assunto',$this->assunto,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('anexo',$this->anexo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}