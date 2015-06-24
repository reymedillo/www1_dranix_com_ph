<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
            <h3>What We Offer</h3>
            <p class="lead">Look at some of the services we offer</p>
        </div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Distribution</h4>
                        <p>We offer distribution of food, soaps, detergents, canned goods, hardwares, and etc. to leading
                        grocery stores and mini stores.
                        </p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-leaf icon-medium icon-rounded"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Restaurants</h4>
                        <p>We merchandise popular restaurants in the country like Mang Inasal.</p>
                    </div>
                </div>
            </div>

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Public Service</h4>
                        <p>We donate goods for public schools, and for those affected by natural calamities.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--/Services-->

<section id="recent-works">
    <div class="container">
        <div class="center">
            <h3>Our Recent Works</h3>
            <p class="lead">Look at some of the recent projects we have completed for our valuble clients</p>
        </div>  
        <div class="gap"></div>
        <ul class="gallery col-4">
            <!--Item 1-->
            <li>
                <div class="preview">
                    <img alt=" " src="/images/portfolio/thumb/pic1.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a>                        
                    </div>
                </div>
                <div class="desc">
                    <h5></h5>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="/images/portfolio/thumb/pic1.jpg" alt=" " width="100%" style="max-height:800px">
                    </div>
                </div>                 
            </li>
            <!--/Item 1--> 

            <!--Item 2-->
            <li>
                <div class="preview">
                    <img alt=" " src="/images/portfolio/thumb/pic2.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-2"><i class="icon-eye-open"></i></a>                            
                    </div>
                </div>
                <div class="desc">
                    <h5></h5>
                </div>
                <div id="modal-2" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="/images/portfolio/thumb/pic2.jpg" alt=" " width="100%" style="max-height:800px">
                    </div>
                </div>                 
            </li>
            <!--/Item 2-->
            <!--Item 3-->
            <li>
                <div class="preview">
                    <img alt=" " src="/images/portfolio/thumb/pic3.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-3"><i class="icon-eye-open"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5></h5>
                </div>
                <div id="modal-3" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="/images/portfolio/thumb/pic3.jpg" alt=" " width="100%" style="max-height:800px">
                    </div>
                </div>                 
            </li>
            <!--/Item 3--> 

            <!--Item 4-->
            <li>
                <div class="preview">
                    <img alt=" " src="/images/portfolio/thumb/pic4.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5></h5>
                </div>
                <div id="modal-4" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="/images/portfolio/thumb/pic4.jpg" alt=" " width="100%" style="max-height:800px">
                    </div>
                </div>                 
            </li>
            <!--/Item 4-->               

        </ul>
    </div>

</section>

<section id="clients" class="main">
    <div class="container">
        <div class="row-fluid">
            <div class="span2">
                <div class="clearfix">
                    <h4 class="pull-left">Our Partners</h4>
                    <div class="pull-right">
                        <a class="prev" href="#myCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                    </div>
                </div>
                <p></p>
            </div>
            <?php echo $this->element('partners'); ?>
        </div>
    </div>
    <br />
    <div class="container">
        <div class="row-fluid">
            <div class="span2">
                <div class="clearfix">
                    <h4 class="pull-left">Our Affiliates</h4>
                    <div class="pull-right">
                        <a class="prev" href="#affiliates" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> <a class="next" href="#affiliates" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                    </div>
                </div>
                <p></p>
            </div>
            <?php echo $this->element('affiliates'); ?>
        </div>
    </div>
</div>
</section>