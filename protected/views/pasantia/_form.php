<?php
/* @var $this PasantiaController */
/* @var $model Pasantia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasantia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'notaExterna'); ?>
		<?php echo $form->textField($model,'notaExterna'); ?>
		<?php echo $form->error($model,'notaExterna'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TAP_id'); ?>
		<?php echo $form->textField($model,'TAP_id'); ?>
		<?php echo $form->error($model,'TAP_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TutorExterno_Id'); ?>
		<?php echo $form->textField($model,'TutorExterno_Id'); ?>
		<?php echo $form->error($model,'TutorExterno_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion_id'); ?>
		<?php echo $form->textField($model,'Direccion_id'); ?>
		<?php echo $form->error($model,'Direccion_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->