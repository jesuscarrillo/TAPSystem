<?php
/* @var $this TesisController */
/* @var $data Tesis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAP_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TAP_id), array('view', 'id'=>$data->TAP_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_id); ?>
	<br />


</div>