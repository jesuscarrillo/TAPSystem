<?php
/* @var $this ControlDeEstudioController */
/* @var $model ControlDeEstudio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'control-de-estudio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario_id'); ?>
		<?php echo $form->textField($model,'Usuario_id'); ?>
		<?php echo $form->error($model,'Usuario_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoUsuario'); ?>
		<?php echo $form->textField($model,'tipoUsuario',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tipoUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoAcceso'); ?>
		<?php echo $form->textField($model,'tipoAcceso',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tipoAcceso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->