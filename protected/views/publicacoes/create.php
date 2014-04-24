<?php
/* @var $this PublicacoesController */
/* @var $model Publicacoes */

$this->breadcrumbs=array(
	'Publicacoes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Publicacoes', 'url'=>array('index')),
	array('label'=>'Manage Publicacoes', 'url'=>array('admin')),
);
?>

<h3>Criar Publicação</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>