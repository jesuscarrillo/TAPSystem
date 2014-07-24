<?php
/* @var $this CaracteristicaController */
/* @var $data Caracteristica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Capitulo_id')); ?>:</b>
	<?php echo CHtml::encode($data->Capitulo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imprimible')); ?>:</b>
	<?php echo CHtml::encode($data->imprimible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('citable')); ?>:</b>
	<?php echo CHtml::encode($data->citable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adjuntable')); ?>:</b>
	<?php echo CHtml::encode($data->adjuntable); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('multiplicidad')); ?>:</b>
	<?php echo CHtml::encode($data->multiplicidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pertenencia')); ?>:</b>
	<?php echo CHtml::encode($data->pertenencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	*/ ?>

</div>