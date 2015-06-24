<section class="content">
	<div class="row">
	    <div class="col-xs-12">
	        <div class="box">
	            <div class="box-header">
	                <h3 class="box-title">Fleet Requests</h3>
	            </div><!-- /.box-header -->
	            <div class="form-group">
				<button class="btn float_r" onclick="window.location.href='<?php echo Router::url(array('controller'=>'fleets', 'action'=>'add')); ?>'"><span class="glyphicon glyphicon-plus-sign"></span></button>
				</div>
	            <div class="box-body table-responsive">
	                <table id="example1" class="table table-bordered table-striped">
	                    <thead>
	                        <tr>
	                            <th>Document No.</th>
	                            <th>Division</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                   	<?php foreach($fleets as $fleet){ ?>
	                   		<tr>
								<td><?php echo $this->Html->link($fleet['Hfleet']['id'], array(
								'action' => 'view', $fleet['Hfleet']['id'])); ?></td>
								<td><?php echo $fleet['Division']['divname']; ?></td> 
							</tr>
	                    </tbody>
	                    <?php } ?>
	                </table>
	            </div><!-- /.box-body -->
	        </div><!-- /.box -->
	    </div>
	</div>
</section><!-- /.content -->

