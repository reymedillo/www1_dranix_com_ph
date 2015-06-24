<div class="post-info">
	<h1><?php echo $title_for_layout; ?></h1>
	<div class="row">
		<div class="span8">
			<div class="post_info">
				<?php foreach($new as $news){ ?>
        		<h2 class="title"><span><?php echo $news['Hnew']['topic']; ?></a></span></h2>
	        	<div class="post-info">
	            <div class="fleft">On <span><?php echo $news['Hnew']['docdate']; ?></span> / By <a href="#"><?php echo $news['Hnew']['emplid']; ?></a></div>                                  
	            <div class="clear"></div>
	          	</div>
	          	<p><?php echo $news['Hnew']['detail']; ?></p>
          		<?php }; ?>
			</div>
			<!-- pagination -->			
			<div class="pagination">
	          <ul>
	            <?php
	             echo $this->BeautyPaginator->prev(__('Prev'));
	             echo $this->BeautyPaginator->numbers();
	             echo $this->BeautyPaginator->next(__('Next'));
	            ?>
	          </ul>
			</div>
		</div>
		<div class="span4">
			<div class="sidebar">
			    <?php if($current_user['role']=='admin'): ?>
			   	<div class="widget tags">
				    <h2 class="title"><span>tags</span></h2>
				    <a href="<?php echo Router::url(array('controller'=>'news', 'action'=>'add')); ?>">Add News</a>                    
			    </div>
			    <?php endif; ?>
			    <div class="widget">
			        <h2 class="title"><span>President's Corner</span></h2>
			        <p>After fifteen fruitful years, Dranix Distributors has finally converged with technology to better share to you our cherished old times that built the formidable foundation of our business, our corporate values that propelled us to greater heights, our shared vision that steered us to achieve our common goal, and our people and partners who made us a sterling company that we are now.</p>
			        <p>Today, we boast of our continuing commitment to deliver our business objectives with enthusiasm, integrity, price, hardwork, reliability, and fairness to our stakeholders.</p>
			        <p>The recognitions we have reaped are for you. We will continue to be inspired by your support as we continue to provide quality products and excellent service, thereby, not only satisfying but also delighting you.</p>
		      	</div>
<!-- 		      	<div class="widget">
			        <h2 class="title"><span>recent posts</span></h2>
			        <ul class="recent_post">
			            <li>
			                <a href="#"><img src="/img/img8.jpg" alt="" /></a>
			                  <div><a href="#">This function is not yet available.</a></div>
			                <div class="clear"></div>
			              </li>
			        </ul>
			    </div>
			    <div class="widget">
			        <h2 class="title"><span>links</span></h2>
			        <ul class="links">
			            <li><a href="#">This function is not yet available.</a></li> 
			        </ul>                                   
		      	</div> -->
			</div>
		</div>
	</div>
</div>