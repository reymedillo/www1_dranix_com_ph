<div class="page_container">
<div class="post_info">
    <div class="wrap">
        <div class="container">
<section>
  <div class="row">
      <div class="span3">
          <h2 class="title"><span>Login Form</span></h2>
            <div class="contact_form">  
              <div id="note"></div>
                <div id="fields">
                <?php echo $this->Form->create('User', array('id' => 'ajax-contact-form')); ?>
                  <?php echo $this->Form->input('username', array('class'=>'span3', 'placeholder' => 'Username','label' => false)); ?>
                  <div class="clear"></div>
                  <?php echo $this->Form->input('password', array('class'=>'span3', 'placeholder' => 'Password', 'label' => false)); ?>
                  <input type="reset" class="btn dark_btn" value="Clear form" />
                  <input type="submit" value="Login" id="login" name="submit" class="btn send_btn" /> 
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

