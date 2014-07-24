<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Revisions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Revisions', 'url'=>array('index')),
	array('label'=>'Create Revision', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('revisiongrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Revisions</h1>

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
    'id'=>'revisiongrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'tap_ica_id',
        'Evaluador_Usuario_id',
        'detalle',
        'EstadoRevision_id',
        'Evaluador_TAP_id',
        'fecha',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("revision/view/", 
                                            array("tap_ica_id"=>$data->tap_ica_id, "Evaluador_Usuario_id"=>$data->Evaluador_Usuario_id, "Evaluador_TAP_id"=>$data->Evaluador_TAP_id
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("revision/update/", 
                                            array("tap_ica_id"=>$data->tap_ica_id, "Evaluador_Usuario_id"=>$data->Evaluador_Usuario_id, "Evaluador_TAP_id"=>$data->Evaluador_TAP_id
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("revision/delete/", 
                                            array("tap_ica_id"=>$data->tap_ica_id, "Evaluador_Usuario_id"=>$data->Evaluador_Usuario_id, "Evaluador_TAP_id"=>$data->Evaluador_TAP_id
											))',
                ),
            ),
        ),
    ),
)); ?>
