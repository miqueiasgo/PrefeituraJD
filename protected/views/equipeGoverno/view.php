<?php
/* @var $this EquipeGovernoController */
/* @var $model EquipeGoverno */

$this->breadcrumbs=array(
	'Equipe Governos'=>array('index'),
	$model->id_adm_equipe,
);

$this->menu=array(
	array('label'=>'List EquipeGoverno', 'url'=>array('index')),
	array('label'=>'Create EquipeGoverno', 'url'=>array('create')),
	array('label'=>'Update EquipeGoverno', 'url'=>array('update', 'id'=>$model->id_adm_equipe)),
	array('label'=>'Delete EquipeGoverno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_adm_equipe),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EquipeGoverno', 'url'=>array('admin')),
);
?>

<h1>View EquipeGoverno #<?php echo $model->id_adm_equipe; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_adm_equipe',
		'cargo',
		'titulo',
		'texto',
		'foto',
	),
)); ?>
