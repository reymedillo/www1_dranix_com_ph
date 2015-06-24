    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="<?php echo Router::url(array('controller'=>'home', 'action'=>'index')); ?>"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li class="active"><a href="<?php echo Router::url(array('controller'=>'home', 'action'=>'index')); ?>">Home</a></li>
                        <li><a href="<?php echo Router::url(array('controller'=>'home', 'action'=>'about')); ?>">About Us</a></li>
                        <?php if($logged_in): ?>
                        <li><a href="privacy.html">Policy</a></li>
                        <li class="dropdown">
                            <a href="<?php echo Router::url(array('controller'=>'news', 'action'=>'index')); ?>" class="dropdown-toggle" data-toggle="dropdown">Events<i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo Router::url(array('controller'=>'news', 'action'=>'index')); ?>">News</a></li>
                                <li><a href="">Announcements</a></li>
                                <li class="divider"></li>
                                <li><a href="terms.html">Terms of Use</a></li>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <?php if($logged_in): ?>
                       <li class="dropdown">
                            <a href="" data-toggle="dropdown"><i class="icon-lock"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo Router::url(array('controller'=>'users', 'action'=>'logout')); ?>">Log Out</a></li>
                            </ul>
                        </li>
                        <?php else: ?>
                        <li class="login">
                            <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                        </li>
                        <li class="login">
                        v.1.0 beta 9
                        </li>
                        <?php endif; ?>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->