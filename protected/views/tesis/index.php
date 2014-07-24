<?php
/* @var $this TesisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tesises',
);

$this->menu=array(
	array('label'=>'Create Tesis', 'url'=>array('create')),
	array('label'=>'Manage Tesis', 'url'=>array('admin')),
);
?>

<h1>Tesises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
