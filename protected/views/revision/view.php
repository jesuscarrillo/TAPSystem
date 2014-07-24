<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Revisions'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List Revision', 'url'=>array('index')),
	array('label'=>'Create Revision', 'url'=>array('create')),
	array('label'=>'Update Revision', 'url'=>array('update', 'tap_ica_id'=>$model->tap_ica_id, 'Evaluador_Usuario_id'=>$model->Evaluador_Usuario_id, 'Evaluador_TAP_id'=>$model->Evaluador_TAP_id)),
	array('label'=>'Delete Revision', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'tap_ica_id'=>$model->tap_ica_id, 'Evaluador_Usuario_id'=>$model->Evaluador_Usuario_id, 'Evaluador_TAP_id'=>$model->Evaluador_TAP_id),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Revision', 'url'=>array('admin')),
);
?>

<h1>View Revision</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tap_ica_id',
		'Evaluador_Usuario_id',
		'detalle',
		'EstadoRevision_id',
		'Evaluador_TAP_id',
		'fecha',
	),
)); ?>
