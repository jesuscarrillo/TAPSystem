<?php
/* @var $this TapIcaController */
/* @var $data TapIca */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalle')); ?>:</b>
	<?php echo CHtml::encode($data->detalle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Caracteristica_id')); ?>:</b>
	<?php echo CHtml::encode($data->Caracteristica_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAP_id')); ?>:</b>
	<?php echo CHtml::encode($data->TAP_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tapIcaCita')); ?>:</b>
	<?php echo CHtml::encode($data->tapIcaCita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('versionPrevia')); ?>:</b>
	<?php echo CHtml::encode($data->versionPrevia); ?>
	<br />



</div>