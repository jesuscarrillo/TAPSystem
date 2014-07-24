<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'tap_ica_id'=>$data->tap_ica_id, 'Evaluador_Usuario_id'=>$data->Evaluador_Usuario_id, 'Evaluador_TAP_id'=>$data->Evaluador_TAP_id)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('tap_ica_id')); ?>:</b>
	<?php echo CHtml::encode($data->tap_ica_id); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Evaluador_Usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->Evaluador_Usuario_id); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('detalle')); ?>:</b>
	<?php echo CHtml::encode($data->detalle); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('EstadoRevision_id')); ?>:</b>
	<?php echo CHtml::encode($data->EstadoRevision_id); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Evaluador_TAP_id')); ?>:</b>
	<?php echo CHtml::encode($data->Evaluador_TAP_id); ?><br />

</div>
