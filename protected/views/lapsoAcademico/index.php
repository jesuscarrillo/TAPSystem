<?php
/* @var $this LapsoAcademicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lapso Academicos',
);

$this->menu=array(
	array('label'=>'Create LapsoAcademico', 'url'=>array('create')),
	array('label'=>'Manage LapsoAcademico', 'url'=>array('admin')),
);
?>

<h1>Lapso Academicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
