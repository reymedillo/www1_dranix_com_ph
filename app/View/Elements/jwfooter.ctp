<div class="footer_bottom">
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="span5">
                    <div class="foot_logo"><a href="<?php echo Router::url(array('controller'=>'news', 'action'=>'index')); ?>"><img src="/img/foot_logo.png" alt="" /></a></div>    
                    <div class="copyright">&copy; 2015 Phil. Golden Kaizen Holdings Corp. All Rights Reserved.</div>                        
                </div>
                <div class="span7">
                    <div class="foot_right_block">
                        <div class="fright">
                            <form action="#" method="post">
                                <input class="inp_search" name="name" type="text" value="Search the Site" onfocus="if (this.value == 'Search the Site') this.value = '';" onblur="if (this.value == '') this.value = 'Search the Site';" />                                        
                            </form>
                        </div>
                        <div class="follow_us">
                            <ul>
                                <li><a rel="tooltip" href="#" title="Facebook" class="facebook">Facebook</a></li>
                                <li><a rel="tooltip" href="#" title="Twitter" class="twitter">Twitter</a></li>
                                <li><a rel="tooltip" href="#" title="Tumbrl" class="tumbrl">Tumbrl</a></li>
                                <li><a rel="tooltip" href="#" title="Vimeo" class="vimeo">Vimeo</a></li>
                                <li><a rel="tooltip" href="#" title="Delicious" class="delicious">Delicious</a></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    
                        <div class="clear"></div>
                        <div class="foot_menu">
                            <ul>
                                <li class="current"><a href="<?php echo Router::url(array('controller'=>'home', 'action'=>'index')); ?>">Home</a></li>
                              <li><a href="<?php echo Router::url(array('controller'=>'home', 'action'=>'about')); ?>">About</a></li>
                              <?php if($logged_in): ?>
                              <li><a href="#">Policy</a></li>
                              <li><a href="<?php echo Router::url(array('controller'=>'fleets', 'action'=>'index')); ?>">Fleets</a></li>
                              <li><a href="<?php echo Router::url(array('controller'=>'news', 'action'=>'index')); ?>">News</a></li>                                          
                              <?php endif; ?>
                            </ul>
                        </div>
                    </div>                            
                </div>
            </div>  
        </div>
    </div>
</div>
   