<?php
/* @var $this EspacoCulturalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Espaco Culturals',
);

$this->menu=array(
	array('label'=>'Create EspacoCultural', 'url'=>array('create')),
	array('label'=>'Manage EspacoCultural', 'url'=>array('admin')),
);
?>

<h1>Espaco Culturals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
