<?php
/* @var $this CaracteristicaController */
/* @var $model Caracteristica */

$this->breadcrumbs=array(
	'Caracteristicas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Caracteristica', 'url'=>array('index')),
	array('label'=>'Create Caracteristica', 'url'=>array('create')),
	array('label'=>'View Caracteristica', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Caracteristica', 'url'=>array('admin')),
);
?>

<h1>Update Caracteristica <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>