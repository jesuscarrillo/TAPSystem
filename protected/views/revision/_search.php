<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'tap_ica_id'); ?>
		<?php echo $form->textField($model,'tap_ica_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Evaluador_Usuario_id'); ?>
		<?php echo $form->textField($model,'Evaluador_Usuario_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'detalle'); ?>
		<?php echo $form->textField($model,'detalle'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'EstadoRevision_id'); ?>
		<?php echo $form->textField($model,'EstadoRevision_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Evaluador_TAP_id'); ?>
		<?php echo $form->textField($model,'Evaluador_TAP_id'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
