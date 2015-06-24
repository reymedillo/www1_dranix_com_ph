<div class="page_container">
<div class="post_info">
    <div class="wrap">
        <div class="container">
<section>
    <div class="row">

        <div class="span8">
            <h4 class="title">News Form</h4>
            <div class="status alert alert-success" style="display: none"></div>
            <?php echo $this->Form->create('New', array('url' => array('action' => 'add'), 'type' => 'file')); ?>
            <div class="row-fluid">
                <div class="span5">
                    <?php
			        echo $this->Form->input('Hnew.topic', array('autocomplete' => 'off','div' => false,'label' => 'Topic','placeholder' => 'Topic', 'class' => 'input-block-level'));
			        ?>
                    <?php
                    echo $this->Form->input('Hnew.categoryid', array('options' => array($category), 'empty' => ' ','div' => false, 'label' => 'Category', 'class' => 'input-block-level'));
                    ?>
                    <?php echo $this->Form->input('Hnew.deptid', array('options' => array($dept), 'empty' => ' ','div' => false, 'label' => 'Department', 'class' => 'input-block-level')); ?>  
                </div>
                <div class="span5">
                    <?php
			        echo $this->Form->input('Hnew.detail', array('div' => false,'label' => 'Message','placeholder' => 'Message here..', 'class' => 'input-block-level'));
			        ?>
                    <?php
                    echo $this->Form->input('Hnew.docdate', array('autocomplete' => 'off','id' =>'txtddate','div' => false,'label' => 'Date', 'class' => 'input-block-level'));
                    ?>
<!--                     <?php echo $this->Form->input('upload', array('type' => 'file')); ?> -->
                    <button type="submit" class="btn btn-primary pull-right">Post News</button>
                    <p> </p>
                </div>
            <?php echo $this->Form->end(); ?>
            </div>
        </div>
	</div>
</section>
</div>
</div>
</div>
</div>