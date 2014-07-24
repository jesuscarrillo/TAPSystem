<?php
/* @var $this CaracteristicaController */
/* @var $model Caracteristica */
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
		<?php echo $form->label($model,'Capitulo_id'); ?>
		<?php echo $form->textField($model,'Capitulo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imprimible'); ?>
		<?php echo $form->textField($model,'imprimible'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'citable'); ?>
		<?php echo $form->textField($model,'citable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adjuntable'); ?>
		<?php echo $form->textField($model,'adjuntable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'multiplicidad'); ?>
		<?php echo $form->textField($model,'multiplicidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pertenencia'); ?>
		<?php echo $form->textField($model,'pertenencia'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->