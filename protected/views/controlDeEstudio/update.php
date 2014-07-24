<?php
/* @var $this ControlDeEstudioController */
/* @var $model ControlDeEstudio */

$this->breadcrumbs=array(
	'Control De Estudios'=>array('index'),
	$model->Usuario_id=>array('view','id'=>$model->Usuario_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ControlDeEstudio', 'url'=>array('index')),
	array('label'=>'Create ControlDeEstudio', 'url'=>array('create')),
	array('label'=>'View ControlDeEstudio', 'url'=>array('view', 'id'=>$model->Usuario_id)),
	array('label'=>'Manage ControlDeEstudio', 'url'=>array('admin')),
);
?>

<h1>Update ControlDeEstudio <?php echo $model->Usuario_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>