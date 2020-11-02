<!-- app/View/Items/add.ctp -->
<div class="items form">

<?php echo $this->Form->create('Item',['class'=>'form_custom']);?>
    <fieldset>
        <legend class="form_legend_all"><?php echo __('Add Item'); ?></legend>
        <?php echo $this->Form->input('company_name',['class'=>'form_custom','minlength' => '2']);
		echo $this->Form->input('postal_code' ,['class'=>'form_custom', 'maxlength' => '6']);
        echo $this->Form->input('subscription_plan', array(
            'options' => array( 'Plan 1' => 'Plan 1', 'Plan 2' => 'Plan 2', 'Plan 3' => 'Plan 3', 'Plan 4' => 'Plan 4', 'Plan 5' => 'Plan 5'), array('class'=>'form_select_option')
        ));
		
		echo $this->Form->submit('Add Item', array('class' => 'form-submit',  'title' => 'Click here to add the item') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
     
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         