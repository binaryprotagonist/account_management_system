<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User',['class'=>'form_custom']); ?>
<div class="container">
    <fieldset>
        <legend class="form_legend_all"><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>

<?php echo $this->Form->end(__('Login')); ?>
</div>
</div>
