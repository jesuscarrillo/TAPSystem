<?php
/* @var $this TapIcaController */
/* @var $model TapIca */

$this->breadcrumbs=array(
	'Tap Icas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TapIca', 'url'=>array('index')),
	array('label'=>'Create TapIca', 'url'=>array('create')),
	array('label'=>'View TapIca', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TapIca', 'url'=>array('admin')),
);
?>

<h1>Update TapIca <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>