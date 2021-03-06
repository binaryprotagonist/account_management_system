<!-- app/View/Users/add.ctp -->
<div class="users form">

<?php echo $this->Form->create('User',['class'=>'form_custom']);?>
    <fieldset>
        <legend class="form_legend_all"><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
		echo $this->Form->input('email');
        echo $this->Form->input('password');
		echo $this->Form->input('password_confirm', array('label' => 'Confirm Password *', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));
         echo $this->Form->input('role', array(
            'options' => array( 'admin' => 'Admin', 'user' => 'User'), array("class" => 'form_select_option')
            ));
		
		echo $this->Form->submit('Add User', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
