<?php
/* @var $this NoticiasController */
/* @var $model Noticias */

$this->breadcrumbs=array(
	'Noticiases'=>array('index'),
	$model->id_noticia=>array('view','id'=>$model->id_noticia),
	'Update',
);

$this->menu=array(
	array('label'=>'List Noticias', 'url'=>array('index')),
	array('label'=>'Create Noticias', 'url'=>array('create')),
	array('label'=>'View Noticias', 'url'=>array('view', 'id'=>$model->id_noticia)),
	array('label'=>'Manage Noticias', 'url'=>array('admin')),
);
?>

<h1>Atualizar - <?php echo $model->titulo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>