<?php
/* @var $this TapController */
/* @var $model TAP */

$this->breadcrumbs=array(
	'Taps'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TAP', 'url'=>array('index')),
	array('label'=>'Create TAP', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tap-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Taps</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tap-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'LineaInvestigacion_id',
		'Area_id',
		'publica',
		'fechaCreacion',
		'lapsoInicio',
		/*
		'fechaInicio',
		'fechaFin',
		'lapsoFin',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
