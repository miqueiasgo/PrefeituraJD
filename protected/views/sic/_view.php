<?php
/* @var $this SicController */
/* @var $data Sic */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sic')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sic), array('view', 'id'=>$data->id_sic)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::encode($data->cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->doc_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_valor')); ?>:</b>
	<?php echo CHtml::encode($data->doc_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_nascimento')); ?>:</b>
	<?php echo CHtml::encode($data->data_nascimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('escolaridade')); ?>:</b>
	<?php echo CHtml::encode($data->escolaridade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profissao')); ?>:</b>
	<?php echo CHtml::encode($data->profissao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cep')); ?>:</b>
	<?php echo CHtml::encode($data->cep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endereco')); ?>:</b>
	<?php echo CHtml::encode($data->endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complemento')); ?>:</b>
	<?php echo CHtml::encode($data->complemento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bairro')); ?>:</b>
	<?php echo CHtml::encode($data->bairro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cidade')); ?>:</b>
	<?php echo CHtml::encode($data->cidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uf')); ?>:</b>
	<?php echo CHtml::encode($data->uf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pais')); ?>:</b>
	<?php echo CHtml::encode($data->pais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone1')); ?>:</b>
	<?php echo CHtml::encode($data->telefone1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone2')); ?>:</b>
	<?php echo CHtml::encode($data->telefone2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone3')); ?>:</b>
	<?php echo CHtml::encode($data->telefone3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo')); ?>:</b>
	<?php echo CHtml::encode($data->motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orgao')); ?>:</b>
	<?php echo CHtml::encode($data->orgao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assunto')); ?>:</b>
	<?php echo CHtml::encode($data->assunto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anexo')); ?>:</b>
	<?php echo CHtml::encode($data->anexo); ?>
	<br />

	*/ ?>

</div>