<?php
/* @var $this PasantiaController */
/* @var $data Pasantia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAP_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TAP_id), array('view', 'id'=>$data->TAP_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notaExterna')); ?>:</b>
	<?php echo CHtml::encode($data->notaExterna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TutorExterno_Id')); ?>:</b>
	<?php echo CHtml::encode($data->TutorExterno_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion_id')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion_id); ?>
	<br />


</div>