<?php
/* @var $this InscripcionController */
/* @var $model Inscripcion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inscripcion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TAP_id'); ?>
		<?php echo $form->textField($model,'TAP_id'); ?>
		<?php echo $form->error($model,'TAP_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estudiante_id'); ?>
		<?php echo $form->textField($model,'Estudiante_id'); ?>
		<?php echo $form->error($model,'Estudiante_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estudiante_id2'); ?>
		<?php echo $form->textField($model,'Estudiante_id2'); ?>
		<?php echo $form->error($model,'Estudiante_id2'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->