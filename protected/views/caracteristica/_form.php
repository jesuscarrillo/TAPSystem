<?php
/* @var $this CaracteristicaController */
/* @var $model Caracteristica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'caracteristica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Capitulo_id'); ?>
		<?php echo $form->textField($model,'Capitulo_id'); ?>
		<?php echo $form->error($model,'Capitulo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imprimible'); ?>
		<?php echo $form->textField($model,'imprimible'); ?>
		<?php echo $form->error($model,'imprimible'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'citable'); ?>
		<?php echo $form->textField($model,'citable'); ?>
		<?php echo $form->error($model,'citable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adjuntable'); ?>
		<?php echo $form->textField($model,'adjuntable'); ?>
		<?php echo $form->error($model,'adjuntable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'multiplicidad'); ?>
		<?php echo $form->textField($model,'multiplicidad'); ?>
		<?php echo $form->error($model,'multiplicidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pertenencia'); ?>
		<?php echo $form->textField($model,'pertenencia'); ?>
		<?php echo $form->error($model,'pertenencia'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->