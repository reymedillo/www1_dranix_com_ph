

<!-- Right side column. Contains the navbar and content of the page -->
    <div class="pad margin no-print">
        <div class="alert alert-info" style="margin-bottom: 0!important;">
            <i class="fa fa-info"></i>
            <b>Note:</b> This page has been enhanced for printing. Click the print button at the bottom of the invoice to print.
        </div>
    </div>

    <!-- Main content -->
    <section class="content invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> Phil. Golden Kaizen Holdings Corporation
                    <small class="pull-right"><?php echo $fleet['Hfleet']['docdate']; ?></small>
                </h2>
            </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                Unit
                <address>
                <strong><?php echo $fleet['Hfleet']['unit']; ?></strong>
                </address>
                Plate No
                <address>
                <strong><?php echo $fleet['Hfleet']['plateno']; ?></strong>
                </address>
                Section
                <address>
                <strong><?php echo $fleet['Section']['sectname']; ?></strong>
                </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
                Division
                <address>
                <strong><?php echo $fleet['Division']['divname']; ?></strong>
                </address>
                Operation
                <address>
                <strong><?php echo $fleet['Operation']['optname']; ?></strong>
                </address>
                Area
                <address>
                <strong><?php echo $fleet['Area']['areaname']; ?></strong>
                </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Invoice # <?php echo $fleet['Hfleet']['id']; ?></b><br/>
                Maintenance Type
                <address>
                <strong><?php echo $fleet['Maintain_type']['maintain_name']; ?></strong>
                </address>
                Maintenance Description
                <address>
                <strong><?php echo $fleet['Hfleet']['maintain_desc']; ?></strong>
                </address>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Qty</th>
                            <th>Job / Item Description</th>
                            <th>Price</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($item as $items){ 
                    ?>
                        <tr>
                            <td><?php echo $items['Dfleet']['qty']; ?></td>
                            <td><?php echo $items['Product']['productname']; ?></td>
                            <td><?php echo $items['Dfleet']['price']; ?></td>
                            <td><?php echo $items['Dfleet']['amount']; ?></td>
                        </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
            </div><!-- /.col -->
            <div class="col-xs-6">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <?php foreach($total as $totals){ ?>
                            <th>Total:</th>
                            <td><?php echo $totals['Dfleet']['total']; ?></td>
                            <?php } ?>
                        </tr>
                    </table>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
            </div>
        </div>
    </section><!-- /.content -->



 

