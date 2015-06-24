<div class="page_container">
<div class="post_info">
    <div class="wrap">
        <div class="container">
<section>
  <div class="row">
      <div class="span8">
          <h2 class="title"><span>Change Password Form</span></h2>
            <div class="contact_form">  
              <div id="note"></div>
                <div id="fields">
                <?php echo $this->Form->create('User', array('id' => 'ajax-contact-form')); ?>
                  <?php echo $this->Form->input('username', array('autocomplete' => 'off','class'=>'span3', 'placeholder' => 'Username','label' => false, 'value' => $current_user['username'], 'readonly' => true)); ?>
                  <div class="clear"></div>
                  <?php echo $this->Form->input('oldpassword', array('autocomplete' => 'off','type' => 'password','class'=>'span3', 'placeholder' => 'Current Password', 'label' => false)); ?>
                  <div class="clear"></div>
                  <?php echo $this->Form->input('password', array('autocomplete' => 'off','type' => 'password','class'=>'span3', 'placeholder' => 'New Password', 'label' => false)); ?>
                  <div class="clear"></div>
                  <?php echo $this->Form->input('repassword', array('autocomplete' => 'off','type' => 'password','class'=>'span3', 'placeholder' => 'Confirm Password', 'label' => false)); ?>
                  <input type="reset" class="btn dark_btn" value="Clear form" />
                  <input type="submit" value="Change" id="change" name="submit" class="btn send_btn" /> 
                  <div class="clear"></div>
                <?php echo $this->Form->end(); ?>
                </div>
            </div>                   
        </div>                  
  </div>
</section>
</div>
</div>
</div>
</div>