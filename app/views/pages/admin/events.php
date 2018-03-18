<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Events</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li>Dashboard</li>
                <li>Control Panel</li>
                <li class="active">Events</li>
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
                    <button onclick="add_new_events()" class="btn btn-success">Add New</button>
                </div>
                
                <!-- start -->
                    <div class="container-fluid">
                        <table class="table datatable-responsive">
                            <thead>
                                <tr>
                                    <th style="width:1px">#</th>
                                    <th>Title</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th colspan=2 style="width:1px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; foreach($data['events'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td><?=$row['title']?></td>
                                        <td><?=date(DATE_FORMAT,strtotime($row['start']))?></td>
                                        <td><?=date(DATE_FORMAT,strtotime($row['end']))?></td>
                                        <td style="width:1px"><a onclick="modify_events(<?=$row['events_id']?>)">Edit</a></td>
                                        <td style="width:1px"><a onclick="delete_events(<?=$row['events_id']?>)">Delete</a></td>
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
<div id="modal-events" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Events</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formEvents" id="formEvents" method="POST">
                    <input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" class="form-control" id="events_id" name="events_id">

                    <div class="form-group">
                        <input type="text" ng-model="title" id="title" name="title"  class="form-control" placeholder="Title" required>
                        <span ng-messages="formEvents.title.$error" ng-if="formEvents.title.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="date" ng-model="start" min="<?=date('Y-m-d')?>" id="start" name="start"  class="form-control" required>
                        <span ng-messages="formEvents.start.$error" ng-if="formEvents.start.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="date" ng-model="end" min="<?=date('Y-m-d')?>" id="end" name="end"  class="form-control" required>
                        <span ng-messages="formEvents.end.$error" ng-if="formEvents.end.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <textarea Placeholder="Description" name="description" id="description" ng-model="description" class="form-control" style="resize:none" required></textarea>
                        <span ng-messages="formEvents.description.$error" ng-if="formEvents.description.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>


                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-events" onclick="events()" ng-disabled="formEvents.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->