<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
<meta charset="utf-8">    
<title><?php echo $title_for_layout; ?> | Philippine Golden Kaizen Holdings Corp</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="/css/jwfonts.css" rel='stylesheet' type='text/css'>
<link href="/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" id="camera-css"  href="/css/camera.css" type="text/css" media="all">
<link href="/css/jwbootstrap.css" rel="stylesheet">
<link href="/css/theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/skins/tango/skin.css" />
<link href="/css/jwbootstrap-responsive.css" rel="stylesheet">
<link href="/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
<link href="/css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 

<!-- ANGULAR -->
<script src="/js/node_modules/angular/angular.min.js"></script>
<script src="/js/app.js"></script>
<script src="/js/controllers/controller.js"></script>
<script src="/js/services/service.js"></script>

<?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('jquery-ui-1.8.2.custom');
    echo $this->Html->css('errors');
    echo $this->Html->script('jquery-ui');
    echo $this->Html->script('jquery-2.1.2');
    echo $this->Html->script('jquery-ui.min');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
?>
</head>
<body>
<?php echo $this->element('jwmenu'); ?>
<div class="page_container">
    <div class="wrap">
        <div class="container">
        <?php echo $this->Session->flash('flash', array('element' => 'jwflash')); ?>
        <?php echo $this->Session->flash('auth', array('element' => 'jwflash')); ?>
        </div>
    </div>
    <div class="wrap">
        <div class="container">
            <?php echo $content_for_layout; ?>
        </div>
    </div>
</div>      
</div>
<?php //echo $this->element('sql_dump'); ?> 
<?php echo $this->element('jwfooter'); ?> 
<?php echo $scripts_for_layout; ?>



<script src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" src="/js/camera.js"></script>
<script src="/js/jwbootstrap.js"></script>
<script src="/js/superfish.js"></script>
<script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="/js/jquery.tweet.js"></script>
<script type="text/javascript" src="/js/myscript.js"></script>
<script src="/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="/js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){   
        //Slider
        $('#camera_wrap_1').camera();
        
        //Featured works & latest posts
        $('#mycarousel, #mycarousel2, #newscarousel').jcarousel();                                                
    });     
</script>
<script>
    $(function() {
        $( "#txtddate" ).datepicker();
        $( "#meeting_date" ).datepicker({
            format: 'yyyy/mm/dd'
        });
        $('#timepicker1').timepicker();
    });
</script>
</body>
</html>

