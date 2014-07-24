<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'uio_lons'=>array('index'),
	'View'=>array('view', 'Usuario_id'=>$model->Usuario_id, 'Area_id'=>$model->Area_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List uio_lon', 'url'=>array('index')),
	array('label'=>'Create uio_lon', 'url'=>array('create')),
	array('label'=>'View uio_lon', 'url'=>array('view', 'Usuario_id'=>$model->Usuario_id, 'Area_id'=>$model->Area_id)),
	array('label'=>'Manage uio_lon', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
