<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Extra Curricular</h4>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><span>School Year : <?=$data['school_year']->school_year?></span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li>Dashboard</li>
                <li>Control Panel</li>
                <li class="active">Extra Curricular</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">

    <!-- Main charts -->
    <div class="row">

        <div class="col-lg-12">

            <!-- Sales stats -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <button onclick="add_new_activity()" class="btn btn-success">Add New</button>
                </div>
                
                <!-- start -->
                    <div class="container-fluid">
                        <table class="table datatable-responsive">
                            <thead>
                                <tr>
                                    <th style="width:1px">#</th>
                                    <th>Code</th>
                                    <th>Student</th>
                                    <th>Activity</th>
                                    <th colspan=3 class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; foreach($data['activity'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td style="width:1px">ACT#<?=str_pad($row['activity_id'],5,0,STR_PAD_LEFT)?></td>
                                        <td><?=$row['subject']?></td>
                                        <td style="width:1px"></td>
                                        <td style="width:1px"><a onclick="modify_activity(<?=$row['activity_id']?>)">Edit</a></td>
                                        <td style="width:1px"><a onclick="delete_activity(<?=$row['activity_id']?>)">Delete</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <!-- end -->

            </div>
        </div>
    </div>
    <!-- /main charts -->

<!-- Success modal -->
<div id="modal-activity" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Activity</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formActivity" id="formActivity" method="POST">
                    <input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" class="form-control" id="activity_id" name="activity_id">
                    
                    <div class="form-group">
                        <input type="text" ng-model="subject" id="subject" name="subject"  class="form-control" placeholder="Subject" required>
                        <span ng-messages="formActivity.subject.$error" ng-if="formActivity.subject.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <textarea Placeholder="Description" name="description" id="description" ng-model="description" class="form-control" style="resize:none" required></textarea>
                        <span ng-messages="formActivity.description.$error" ng-if="formActivity.description.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>


                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-activity" onclick="activity()" ng-disabled="formActivity.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->