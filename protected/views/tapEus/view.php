<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'tap_euss'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List tap_eus', 'url'=>array('index')),
	array('label'=>'Create tap_eus', 'url'=>array('create')),
	array('label'=>'Update tap_eus', 'url'=>array('update', 'TAP_id'=>$model->TAP_id, 'Estatus_id'=>$model->Estatus_id)),
	array('label'=>'Delete tap_eus', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'TAP_id'=>$model->TAP_id, 'Estatus_id'=>$model->Estatus_id),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage tap_eus', 'url'=>array('admin')),
);
?>

<h1>View tap_eus</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TAP_id',
		'Estatus_id',
		'detalle',
		'fecha',
	),
)); ?>
