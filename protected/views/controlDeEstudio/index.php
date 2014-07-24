<?php
/* @var $this ControlDeEstudioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Control De Estudios',
);

$this->menu=array(
	array('label'=>'Create ControlDeEstudio', 'url'=>array('create')),
	array('label'=>'Manage ControlDeEstudio', 'url'=>array('admin')),
);
?>

<h1>Control De Estudios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
