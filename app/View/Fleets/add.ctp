<?php echo $this->Form->create('Fleet',array('action' => 'add', 'name' => 'frm1')); ?>
    <div class="col-lg-3">
        <div class="form-group">
        <?php
        echo $this->Form->input('Hfleet.unit', array('div' => false,'label' => 'Unit','placeholder' => 'Unit', 'class' => 'form-control'));
        ?>
        </div>
        <div class="form-group">
        <?php
        echo $this->Form->input('Hfleet.plateno', array('div' => false,'label' => 'Plate No.','placeholder' => 'Plate No.', 'class' => 'form-control'));
        ?>
        </div>
        <div class="form-group">
        <?php
        echo $this->Form->input('Hfleet.sectcode', array('options' => array($section), 'div' => false, 'label' => 'Section', 'class' => 'form-control'));
        ?>
        </div>
        <br />
        <div class="form-group">
       <?php
        echo $this->AutoComplete->input(
            'Dfleet.itemdesc',
            array(
                'autoCompleteUrl'=>$this->Html->url( 
                    array(
                        'controller'=>'fleets',
                        'action'=>'auto_complete'
                    )
                ),
                'autoCompleteRequestItem'=>'autoCompleteText',
                'id' => 'itemdesc',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'label' => 'Item Description'
            )
        ); 
        ?>
        </div>
        <br />
        <br />
        Material Costs:
        <div class="form-group">
        <div class="table-responsive">
    	<table id='table1' class="table table-bordered table-hover table-striped"></table>
        <input type="submit" value="Save Document" id="submit" name="submit" class="btn btni-nfo float_l" />
        </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
         <?php
        echo $this->Form->input('Hfleet.divcode', array('options' => array($division), 'div' => false, 'label' => 'Division', 'class' => 'form-control'));
        ?>
        </div>
        <div class="form-group">
        <?php
        echo $this->Form->input('Hfleet.optcode', array('options' => array($operation), 'div' => false, 'label' => 'Operation', 'class' => 'form-control'));
        ?>
        </div>
        <div class="form-group">
		<?php
        echo $this->Form->input('Hfleet.areacode', array('options' => array($area), 'div' => false, 'label' => 'Area', 'class' => 'form-control'));
        ?>
        </div>
        <br />
        <div class="form-group">
        <label>Quantity</label>
	    <input name="itemqty" type="text" id="itemqty" maxlength="20" placeholder="Quantity" class="form-control" autcomplete="off" />
        </div>
        <div class="form-group">
        <button type="button" onclick="addRow();" class="btn float_l"><span class="glyphicon glyphicon-ok-circle"></span></button>
    	<button type="button" class="btn float_l" onclick="deleterow();"><span class="glyphicon glyphicon-remove-circle"></button>

        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
        <?php
        echo $this->Form->input('Hfleet.maintain_type', array('options' => array($m_type), 'div' => false, 'label' => false, 'class' => 'form-control','label' => 'Type of Maintenance'));
        ?>
        </div>
        <div class="form-group">
        <?php
        echo $this->Form->input('Hfleet.maintain_desc', array('div' => false,'label' => 'Description of Maintenance:', 'resize'=> 'none','class' => 'form-control'));
        ?>
        </div>
        <div class="form-group">
        <input name="itemcost" type="text" id="itemcost" maxlength="20" placeholder="Cost" class="form-control" autocomplete="off" />
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
        <?php
        echo $this->Form->input('Hfleet.docdate', array('autocomplete' => 'off','id' =>'txtddate','div' => false,'label' => 'Date','class' => 'form-control'));
        ?>
        </div>
    </div>
<?php echo $this->Form->end(); ?>

