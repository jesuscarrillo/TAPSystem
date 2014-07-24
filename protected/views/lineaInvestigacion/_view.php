<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id'=>$data->id, 'Area_id'=>$data->Area_id)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Area_id')); ?>:</b>
	<?php echo CHtml::encode($data->Area_id); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?><br />
	
   
</div>
