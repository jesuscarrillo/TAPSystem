<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'TutorExterno_id'=>$data->TutorExterno_id, 'Direccion_id'=>$data->Direccion_id)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('TutorExterno_id')); ?>:</b>
	<?php echo CHtml::encode($data->TutorExterno_id); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Direccion_id')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion_id); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('comentario')); ?>:</b>
	<?php echo CHtml::encode($data->comentario); ?><br />

</div>
