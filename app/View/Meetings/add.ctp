<section ng-controller="mainController">
    <div class="row">
        <div class="span8">
            <h4 class="title">Meetings Form</h4>
            <div class="status alert alert-success" style="display: none"></div>
           <!--  <form action="/meetings" method="post" type="file"> -->
            <?php echo $this->Form->create('Meeting',array('type' => 'file', 'method' => 'post')); ?>
            <div class="row-fluid">
                <div class="span5">
                    <?php
			        echo $this->Form->input('Meeting.topic', array('autocomplete' => 'off','div' => false,'label' => 'Topic','placeholder' => 'Topic', 'class' => 'input-block-level'));
			        ?>
                    <label for="MeetingDeptid">Department</label>
                    <select name="data[Meeting][deptid]" class="input-block-level" required>
                        <option value=""></option>
                    <?php foreach($dept as $d) { ?>
                        <option value="<?php echo $d['Department']['id']; ?>"><?php echo $d['Department']['description']; ?></option>
                    <?php } ?>
                    </select> 
                </div>
                <div class="span5">
                    <?php
			        echo $this->Form->input('Meeting.detail', array('div' => false,'label' => 'Message','placeholder' => 'Message here..', 'class' => 'input-block-level'));
			        ?>
                    <div class="input-append bootstrap-timepicker">
                        <label for="MeetingDate">Date</label>
                        <input id="meeting_date" name="data[Meeting][date]" type="text" class="input-small">
                        <input id="timepicker1" readonly required name="data[Meeting][time]" type="text" class="input-small">
                        <span class="add-on"><i class="icon-time"></i></span>
                    </div>
                    
                </div>
                <div class="span5">
                    <br>
                    <?php 
                    echo $this->Form->input('Meeting.upload', array('type' => 'file', 'label' => 'Resume','required' => true, 'accept' => 'application/pdf,application/vnd.ms-excel,image/x-png, image/gif, image/jpeg'));
                    echo $this->Form->input('Meeting.upload_dir', array('type' => 'hidden', 'value' => 'Post','required' => true));
                    ?>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Post Meeting</button>
                </div>
            <!-- </form> -->
            <?php echo $this->Form->end(); ?>
            </div>
        </div>
	</div>
</section>
    