<?php
/* @var $this ControlDeEstudioController */
/* @var $data ControlDeEstudio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Usuario_id), array('view', 'id'=>$data->Usuario_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->tipoUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoAcceso')); ?>:</b>
	<?php echo CHtml::encode($data->tipoAcceso); ?>
	<br />


</div>