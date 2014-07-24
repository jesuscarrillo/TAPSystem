<?php
/* @var $this TapController */
/* @var $data TAP */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LineaInvestigacion_id')); ?>:</b>
	<?php echo CHtml::encode($data->LineaInvestigacion_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Area_id')); ?>:</b>
	<?php echo CHtml::encode($data->Area_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publica')); ?>:</b>
	<?php echo CHtml::encode($data->publica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lapsoInicio')); ?>:</b>
	<?php echo CHtml::encode($data->lapsoInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->fechaInicio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaFin')); ?>:</b>
	<?php echo CHtml::encode($data->fechaFin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lapsoFin')); ?>:</b>
	<?php echo CHtml::encode($data->lapsoFin); ?>
	<br />

	*/ ?>

</div>