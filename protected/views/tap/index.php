<?php
/* @var $this TapController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Taps',
);

$this->menu=array(
	array('label'=>'Create TAP', 'url'=>array('create')),
	array('label'=>'Manage TAP', 'url'=>array('admin')),
);
?>

<h1>Taps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
