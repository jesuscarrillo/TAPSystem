<?php
/* @var $this TutorExternoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tutor Externos',
);

$this->menu=array(
	array('label'=>'Create TutorExterno', 'url'=>array('create')),
	array('label'=>'Manage TutorExterno', 'url'=>array('admin')),
);
?>

<h1>Tutor Externos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
