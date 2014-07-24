<?php
/* @var $this CapituloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Capitulos',
);

$this->menu=array(
	array('label'=>'Create Capitulo', 'url'=>array('create')),
	array('label'=>'Manage Capitulo', 'url'=>array('admin')),
);
?>

<h1>Capitulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
