<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'uio_lons'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List uio_lon', 'url'=>array('index')),
	array('label'=>'Create uio_lon', 'url'=>array('create')),
	array('label'=>'Update uio_lon', 'url'=>array('update', 'Usuario_id'=>$model->Usuario_id, 'Area_id'=>$model->Area_id)),
	array('label'=>'Delete uio_lon', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'Usuario_id'=>$model->Usuario_id, 'Area_id'=>$model->Area_id),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage uio_lon', 'url'=>array('admin')),
);
?>

<h1>View uio_lon</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Usuario_id',
		'Area_id',
		'fecha',
	),
)); ?>
