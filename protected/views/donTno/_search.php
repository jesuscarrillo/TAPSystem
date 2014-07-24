<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'TutorExterno_id'); ?>
		<?php echo $form->textField($model,'TutorExterno_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Direccion_id'); ?>
		<?php echo $form->textField($model,'Direccion_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'comentario'); ?>
		<?php echo $form->textField($model,'comentario'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
