<section ng-controller="mainController">
    <div class="row">
        <div class="span8">
            <h4 class="title">Meetings History</h4>
            <div class="status alert alert-success" style="display: none"></div>
            <div class="row-fluid">
                <div class="span5">
                    <table class="table table-striped table-bordered table-condensed">
                    <tr>
                        <th>Id No</th>
                        <th>Description</th>
                        <th><center><a href="/meetings/add">Add</a></center></th>
                    </tr>
                    <tr ng-repeat="meeting in meetings">
                        <td>{{meeting.id}}</td>
                        <td>{{meeting.topic}}</td>
                        <td>
                        <center>
                        <button class="btn btn-primary btn-mini" data-toggle="modal" data-target="#viewMeeting{{meeting.id}}">View</button> 

                        <a href="/files/{{meeting.upload}}" class="btn btn-success btn-mini">Download</a>
                        </center>
                        <?php if('{{meeting.upload}}' == "1e0ef_Petty Cash Liquidation.docx") {
                            echo 'true';
                        }
                        else {
                            echo 'false';
                        } 

                        ?>
                        <!-- Modal -->
                        <div class="modal fade" id="viewMeeting{{meeting.id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">{{meeting.topic}}</h4>
                              </div>
                              <div class="modal-body">
                                {{meeting.detail}}
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end Modal -->
                        </td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
	</div> 
</section>