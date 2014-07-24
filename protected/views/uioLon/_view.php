<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'Usuario_id'=>$data->Usuario_id, 'Area_id'=>$data->Area_id)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_id); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Area_id')); ?>:</b>
	<?php echo CHtml::encode($data->Area_id); ?><br />

</div>
