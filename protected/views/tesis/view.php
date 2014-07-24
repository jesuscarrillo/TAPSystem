<?php
/* @var $this TesisController */
/* @var $model Tesis */

$this->breadcrumbs=array(
	'Tesises'=>array('index'),
	$model->TAP_id,
);

$this->menu=array(
	array('label'=>'List Tesis', 'url'=>array('index')),
	array('label'=>'Create Tesis', 'url'=>array('create')),
	array('label'=>'Update Tesis', 'url'=>array('update', 'id'=>$model->TAP_id)),
	array('label'=>'Delete Tesis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TAP_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tesis', 'url'=>array('admin')),
);
?>

<h1>View Tesis #<?php echo $model->TAP_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TAP_id',
		'Usuario_id',
	),
)); ?>
