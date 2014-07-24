<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	$model->tap_ica_id=>array('view','id'=>$model->tap_ica_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Archivo', 'url'=>array('index')),
	array('label'=>'Create Archivo', 'url'=>array('create')),
	array('label'=>'View Archivo', 'url'=>array('view', 'id'=>$model->tap_ica_id)),
	array('label'=>'Manage Archivo', 'url'=>array('admin')),
);
?>

<h1>Update Archivo <?php echo $model->tap_ica_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>