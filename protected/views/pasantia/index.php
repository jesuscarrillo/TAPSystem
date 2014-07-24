<?php
/* @var $this PasantiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pasantias',
);

$this->menu=array(
	array('label'=>'Create Pasantia', 'url'=>array('create')),
	array('label'=>'Manage Pasantia', 'url'=>array('admin')),
);
?>

<h1>Pasantias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
