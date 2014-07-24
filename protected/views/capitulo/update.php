<?php
/* @var $this CapituloController */
/* @var $model Capitulo */

$this->breadcrumbs=array(
	'Capitulos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Capitulo', 'url'=>array('index')),
	array('label'=>'Create Capitulo', 'url'=>array('create')),
	array('label'=>'View Capitulo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Capitulo', 'url'=>array('admin')),
);
?>

<h1>Update Capitulo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>