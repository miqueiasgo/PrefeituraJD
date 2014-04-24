<h1>Gerenciar Equipe de Governo</h1>

<?php 
echo CHtml::imageButton(Yii::app()->request->baseUrl.'/images/icons/add.png', array('submit' => array('//equipeGoverno/create')));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'equipe-governo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cargo',
		'texto',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
