<?php
/* @var $this SicController */
/* @var $model Sic */

$this->breadcrumbs=array(
	'Sics'=>array('index'),
	$model->id_sic,
);

$this->menu=array(
	array('label'=>'List Sic', 'url'=>array('index')),
	array('label'=>'Create Sic', 'url'=>array('create')),
	array('label'=>'Update Sic', 'url'=>array('update', 'id'=>$model->id_sic)),
	array('label'=>'Delete Sic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sic),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sic', 'url'=>array('admin')),
);
?>

<h1>View Sic #<?php echo $model->id_sic; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sic',
		'cpf',
		'doc_tipo',
		'doc_valor',
		'nome',
		'data_nascimento',
		'sexo',
		'escolaridade',
		'profissao',
		'email',
		'cep',
		'endereco',
		'complemento',
		'bairro',
		'cidade',
		'uf',
		'pais',
		'telefone1',
		'telefone2',
		'telefone3',
		'motivo',
		'orgao',
		'assunto',
		'descricao',
		'anexo',
	),
)); ?>
