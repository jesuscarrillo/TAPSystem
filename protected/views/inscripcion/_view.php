<?php
/* @var $this InscripcionController */
/* @var $data Inscripcion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAP_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TAP_id), array('view', 'id'=>$data->TAP_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estudiante_id')); ?>:</b>
	<?php echo CHtml::encode($data->Estudiante_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estudiante_id2')); ?>:</b>
	<?php echo CHtml::encode($data->Estudiante_id2); ?>
	<br />



</div>