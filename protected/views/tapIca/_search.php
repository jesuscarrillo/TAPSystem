<?php
/* @var $this TapIcaController */
/* @var $model TapIca */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detalle'); ?>
		<?php echo $form->textArea($model,'detalle',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Caracteristica_id'); ?>
		<?php echo $form->textField($model,'Caracteristica_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TAP_id'); ?>
		<?php echo $form->textField($model,'TAP_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tapIcaCita'); ?>
		<?php echo $form->textField($model,'tapIcaCita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'versionPrevia'); ?>
		<?php echo $form->textField($model,'versionPrevia'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->