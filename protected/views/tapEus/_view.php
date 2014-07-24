<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'TAP_id'=>$data->TAP_id, 'Estatus_id'=>$data->Estatus_id)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('TAP_id')); ?>:</b>
	<?php echo CHtml::encode($data->TAP_id); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Estatus_id')); ?>:</b>
	<?php echo CHtml::encode($data->Estatus_id); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('detalle')); ?>:</b>
	<?php echo CHtml::encode($data->detalle); ?><br />
	
 
</div>
