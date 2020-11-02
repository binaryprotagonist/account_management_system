<!-- app/View/Items/add.ctp -->
<div class="items form">
<?php echo $this->Form->create('Item',['class'=>'form_custom']) ?>
    <fieldset>
        <legend class="form_legend_all"><?php echo __('Edit Item'); ?></legend>
        <?php 
		echo $this->Form->hidden('id', array('value' => $this->data['Item']['id']));
		echo $this->Form->input('company_name', array( 'readonly' => 'readonly', 'label' => 'Company Name cannot be changed!'));
		echo $this->Form->input('postal_code', array( 'readonly' => 'readonly', 'label' => 'Postal Code cannot be changed!'));
		echo $this->Form->input('subscription_plan', array(
            'options' => array( 'Plan 1' => 'Plan 1', 'Plan 2' => 'Plan 2', 'Plan 3' => 'Plan 3', 'Plan 4' => 'Plan 4', 'Plan 5' => 'Plan 5')
        ));
		echo $this->Form->submit('Edit Item', array('class' => 'form-submit',  'title' => 'Click here to add the account') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<style>
input#ItemCompanyName, input#ItemPostalCode {
    cursor: not-allowed;
        background: #efefef;
    border: 1px solid rgba(0,0,0,0.3);
}
</style>
