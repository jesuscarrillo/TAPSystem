<?php
/* @var $this InscripcionController */
/* @var $model Inscripcion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TAP_id'); ?>
		<?php echo $form->textField($model,'TAP_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estudiante_id'); ?>
		<?php echo $form->textField($model,'Estudiante_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estudiante_id2'); ?>
		<?php echo $form->textField($model,'Estudiante_id2'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->