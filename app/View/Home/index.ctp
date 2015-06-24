<!--page_container-->
<div class="page_container">
    <!--featured works-->
    <div class="wrap block carousel_block">
        <div class="container">
            <h2 class="upper">featured pictures</h2>
            <div class="row">
                <div class="span12">
                    <ul id="mycarousel" class="jcarousel-skin-tango">
                        <?php 
                        $dir = new DirectoryIterator($_SERVER['DOCUMENT_ROOT'].'/app/webroot/img/featured_works/');
                        foreach ($dir as $fileinfo) {
                            if (!$fileinfo->isDot()) {
                            
                        ?>
                        <li>
                            <div class="hover_img">
                                <a href="/img/featured_works/<?php echo $fileinfo->getFilename(); ?>" rel="prettyPhoto[portfolio1]"><img src="/img/featured_works/<?php echo $fileinfo->getFilename(); ?>" alt="" /><span class="portfolio_zoom1"></span></a>                                    
                            </div>
                            <?php } ?> 
                        </li> 
                        <?php } ?> 
                    </ul>                         
                </div>                
            </div>                
        </div>
    </div>        
    <!--Latest news-->
    <div class="wrap block">
        <div class="container">
            <div class="row news_block">
                <div class="span6">
                    <h2 class="title">Latest Employee Sales</h2>
                    <ul id="newscarousel" class="jcarousel-skin-tango">
                        <li>
                            <div class="alert alert-error">
                                <strong>Sorry!</strong> Sorry this function is not yet available.
                            </div>
                        </li>
                     </ul> 
                </div>
                <div class="span6">
                    <h2 class="title">Latest news</h2>
                    <ul id="newscarousel" class="jcarousel-skin-tango">
                        <li>
                            <?php foreach($new as $news){ ?>
                            <div class="news_t"><a href="#"><?php echo $news['Hnew']['topic']; ?></a></div>
                            <div class="news">Posted by <a href="#"><?php echo $news['Hnew']['emplid']; ?></a>  /  On <?php echo $news['Hnew']['docdate']; ?><br/></div>
                            <div class="news_info"><?php echo $news['Hnew']['detail']; ?></div>
                            <div class="clear"></div>
                            <?php }; ?>                        
                        </li>
                     </ul> 
                </div>              
            </div>
        </div>
    </div>
    <!--latest posts-->
    <div class="wrap block carousel_block">
        <div class="container">
            <h2 class="upper">latest announcements</h2>
            <div class="row">
                <div class="span12">
                    <ul id="mycarousel2" class="jcarousel-skin-tango">
                        <li>
                            <div class="post_carousel">
                                <div class="alert alert-error">
                                <strong>Sorry!</strong> Sorry this function is not yet available.
                                </div>
                            </div>  
                        </li>                                                                                   
                    </ul>                        
                </div>                
            </div>                
        </div>
    </div>        
    <!--//latest posts--> 
</div>