<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'uio_lons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List uio_lons', 'url'=>array('index')),
    array('label'=>'Manage uio_lon', 'url'=>array('admin')),
);
?>

<h1>Create uio_lon</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
