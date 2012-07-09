<?php
/**
 * This is the template for generating a form script file.
 * The following variables are available in this template:
 * - $this: the FormCode object
 */
?>
<div>

<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'".$this->class2id($this->modelClass).'-'.basename($this->viewName)."-form',
	'enableAjaxValidation'=>false,

        'htmlOptions' => array (
            'class' => 'well form'
        )


)); ?>\n"; ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>


<?php $ERRORBLOCK = <<< EOL
    <?php if (count(\$model->getErrors())>0) { \n
         echo "<div class='alert alert-error'>".\$form->errorSummary(\$model)."</div>";        \n 
    }
    ?> 
EOL;
echo $ERRORBLOCK;
?>

<?php foreach($this->getModelAttributes() as $attribute): ?>

	<div class="control-group <?php echo "<?php if(\$model->getError('$attribute')!=''){echo ' error';}; ?>"?>">
		<?php echo "<?php echo \$form->labelEx(\$model,'$attribute', array ('class' => 'control-label')); ?>\n"; ?>
                <div class="controls">  
		<?php echo "<?php echo \$form->textField(\$model,'$attribute'); ?>\n"; ?>
        	<?php echo "<?php echo \$form->error(\$model,'$attribute',array ('class' => 'help-inline')); ?>\n"; ?>
                </div>  
	</div>

<?php endforeach; ?>

	<div class="row buttons">
		<?php echo "<?php echo CHtml::submitButton('Submit', array ('class' => 'btn btn-primary')); ?>\n"; ?>
	</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- form -->