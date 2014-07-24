<?php
/* @var $this TapController */
/* @var $model TAP */

$this->breadcrumbs=array(
	'Taps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TAP', 'url'=>array('index')),
	array('label'=>'Create TAP', 'url'=>array('create')),
	array('label'=>'View TAP', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TAP', 'url'=>array('admin')),
);
?>

<h1>Update TAP <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>