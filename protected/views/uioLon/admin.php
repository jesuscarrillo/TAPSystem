<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'uio_lons'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List uio_lons', 'url'=>array('index')),
	array('label'=>'Create uio_lon', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('uioLongrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage uio_lons</h1>

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

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'uioLongrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'Usuario_id',
        'Area_id',
        'fecha',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("uioLon/view/", 
                                            array("Usuario_id"=>$data->Usuario_id, "Area_id"=>$data->Area_id
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("uioLon/update/", 
                                            array("Usuario_id"=>$data->Usuario_id, "Area_id"=>$data->Area_id
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("uioLon/delete/", 
                                            array("Usuario_id"=>$data->Usuario_id, "Area_id"=>$data->Area_id
											))',
                ),
            ),
        ),
    ),
)); ?>
