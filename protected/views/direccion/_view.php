<?php
/* @var $this DireccionController */
/* @var $data Direccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalle')); ?>:</b>
	<?php echo CHtml::encode($data->detalle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otroContacto')); ?>:</b>
	<?php echo CHtml::encode($data->otroContacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad_id')); ?>:</b>
	<?php echo CHtml::encode($data->Ciudad_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empresa_id')); ?>:</b>
	<?php echo CHtml::encode($data->Empresa_id); ?>
	<br />



</div>