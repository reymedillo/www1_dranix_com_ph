<div class="page_container">
<div class="post_info">
    <div class="wrap">
        <div class="container">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend>Add User</legend>
		<?php
			echo $this->Form->input('name');
			echo $this->Form->input('username');
			echo $this->Form->input('email', array('autocomplete' => 'off'));
			echo $this->Form->input('password', array('autocomplete' => 'off'));
			echo $this->Form->input('repassword', array('type' => 'password'));
		?>
	</fieldset>

<?php echo $this->Form->end('Submit'); ?>
</div>
</div>
</div>
</div>