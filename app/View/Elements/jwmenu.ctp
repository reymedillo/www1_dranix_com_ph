<?php 
$dir = Router::url('/');
$homectrl = Router::url('/home/');
$usersctrl = Router::url('/users/');
?>
<div class="header">
  <div class="wrap">
    <div class="navbar navbar_ clearfix">
      <div class="container">
        <div class="row">
          <div class="span4">
              <div class="logo"><a href="<?php echo Router::url(array('controller'=>'home', 'action'=>'index')); ?>"><img src="/img/logo.png" alt="" /></a></div>                        
          </div>
          <div class="span8">
            <div class="clear"></div>
              <nav id="main_menu">
              <div class="menu_wrap">
                <ul class="nav sf-menu">
                  <li class="<?php if($this->here == $dir){echo 'current';} ?>"><a href="<?php echo Router::url(array('controller'=>'home', 'action'=>'index')); ?>">Home</a></li>
                  <li class="<?php if($this->here == $homectrl.'about'){$current_page = 'About'; echo 'current';} ?>"><a href="<?php echo Router::url(array('controller'=>'home', 'action'=>'about')); ?>">About</a></li>
                  <?php if($logged_in): ?>
                  <li><a href="#">Policy</a></li>
                  <li><a href="<?php echo Router::url(array('controller'=>'fleets', 'action'=>'index')); ?>">Fleets</a></li>
                  <li class="sub-menu"><a href="javascript:{}">Events</a>
                    <ul>
                      <li class="<?php if($this->here == $dir.'news'){$current_page='News'; echo 'current';} ?>"><a href="<?php echo Router::url(array('controller'=>'news', 'action'=>'index')); ?>"><span>-</span>News</a></li> 
                      <li class="<?php if($this->here == $dir.'meetings'){$current_page='Meetings'; echo 'current';} ?>"><a href="<?php echo Router::url(array('controller'=>'meetings', 'action'=>'index')); ?>"><span>-</span>Meetings</a></li>                                         
                    </ul>                                          
                  </li>
                  <?php endif; ?>
                  <?php if($logged_in): ?>
                  <li class="sub-menu"><a href="javascript:{}">User</a>
                    <ul>
                        <!-- <li><a href="<?php echo Router::url(array('controller'=>'users', 'action'=>'view', $current_user['id'])); ?>"><span>-</span>Profile</a></li> --> 
                        <li class="<?php if($this->here == $usersctrl.'changepass'){$current_page = 'Change Password'; echo 'current';} ?>"><a href="<?php echo Router::url(array('controller'=>'users', 'action'=>'changepass')); ?>"><span>-</span>Change Password</a></li>
                        <hr>
                        <li><a href="<?php echo Router::url(array('controller'=>'users', 'action'=>'logout')); ?>"><span>-</span>Log Out</a></li>                                      
                    </ul>
                  </li> 
                  <?php else: ?>                            
                  <li><a href="<?php echo Router::url(array('controller'=>'users', 'action'=>'login')); ?>">Log In</a></li>
                  <?php endif; ?>    
                    </ul>
              </div>
              </nav>                            
          </div>
        </div>                
      </div>
    </div>
  </div>
	<?php if($logged_in): ?>
	<div class="breadcrumb">
       <div class="wrap">
            <div class="container">
            	<a href="/">Home</a><?php if($this->here != '/'): ?><span>/</span><a href="<?php echo $this->here; ?>"><?php echo $current_page; ?></a><?php endif; ?> 
            </div>
        </div> 
    </div>
    <?php endif; ?>
</div>
