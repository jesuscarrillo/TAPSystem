<?php
/* @var $this TapIcaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tap Icas',
);

$this->menu=array(
	array('label'=>'Create TapIca', 'url'=>array('create')),
	array('label'=>'Manage TapIca', 'url'=>array('admin')),
);
?>

<h1>Tap Icas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
