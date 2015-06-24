<header class="header">
    <a href="<?php echo Router::url(array('controller'=>'news', 'action'=>'index')); ?>" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        Phil. Golden Kaizen Holdings Corp.
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span><?php echo $current_user['username']; ?><i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="/img/avatar04.png" class="img-circle" alt="User Image" />
                            <p>
                                <?php echo $current_user['username']; ?> <!-- - Position  -->
                                <small><!-- date registered --></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            Philippine Golden Kaizen Holdings Corp.
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                        <?php if($logged_in): ?>
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo Router::url(array('controller'=>'users', 'action'=>'logout')); ?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        <?php else: ?>
                            <div class="pull-right">
                                <a href="<?php echo Router::url(array('controller'=>'users', 'action'=>'login')); ?>" class="btn btn-default btn-flat">Sign in</a>
                            </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

