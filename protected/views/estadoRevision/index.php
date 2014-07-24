<?php
/* @var $this EstadoRevisionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estado Revisions',
);

$this->menu=array(
	array('label'=>'Create EstadoRevision', 'url'=>array('create')),
	array('label'=>'Manage EstadoRevision', 'url'=>array('admin')),
);
?>

<h1>Estado Revisions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
