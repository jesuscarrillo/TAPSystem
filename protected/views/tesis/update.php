<?php
/* @var $this TesisController */
/* @var $model Tesis */

$this->breadcrumbs=array(
	'Tesises'=>array('index'),
	$model->TAP_id=>array('view','id'=>$model->TAP_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tesis', 'url'=>array('index')),
	array('label'=>'Create Tesis', 'url'=>array('create')),
	array('label'=>'View Tesis', 'url'=>array('view', 'id'=>$model->TAP_id)),
	array('label'=>'Manage Tesis', 'url'=>array('admin')),
);
?>

<h1>Update Tesis <?php echo $model->TAP_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>