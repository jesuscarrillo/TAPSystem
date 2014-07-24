<?php
/* @var $this PasantiaController */
/* @var $model Pasantia */

$this->breadcrumbs=array(
	'Pasantias'=>array('index'),
	$model->TAP_id=>array('view','id'=>$model->TAP_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pasantia', 'url'=>array('index')),
	array('label'=>'Create Pasantia', 'url'=>array('create')),
	array('label'=>'View Pasantia', 'url'=>array('view', 'id'=>$model->TAP_id)),
	array('label'=>'Manage Pasantia', 'url'=>array('admin')),
);
?>

<h1>Update Pasantia <?php echo $model->TAP_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>