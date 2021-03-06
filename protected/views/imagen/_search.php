<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>500)); ?>

		<?php echo $form->textFieldRow($model,'nombre_corto',array('class'=>'span5','maxlength'=>25)); ?>

		<?php echo $form->textFieldRow($model,'codigo',array('class'=>'span5','maxlength'=>12)); ?>

		<?php echo $form->textAreaRow($model,'descripcion',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'archivo',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'ruta',array('class'=>'span5','maxlength'=>2500)); ?>

		<?php echo $form->textFieldRow($model,'extension',array('class'=>'span5','maxlength'=>5)); ?>

		<?php echo $form->textFieldRow($model,'publico',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'estatus',array('class'=>'span5','maxlength'=>15)); ?>

		<?php echo $form->textFieldRow($model,'registrado_por',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'fecha_registro',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'modificado_por',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'fecha_modificado',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'eliminado',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
