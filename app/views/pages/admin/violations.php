<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Violations</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li>Dashboard</li>
                <li>Control Panel</li>
                <li class="active">Violations</li>
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
                    <button onclick="add_new_violations()" class="btn btn-primary">Add New</button>
                </div>
                
                <!-- start -->
                    <div class="container-fluid">
                        <table class="table datatable-responsive">
							<thead>
								<tr>
                                    <th style="width:1px">#</th>
                                    <th>Name</th>
                                    <th colspan=4 style="width:1px"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['violations'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td><?=$row['name']?></td>
                                        <td></td>
                                        <td></td>
                                        <td style="width:1px"><a onclick="modify_violations(<?=$row['violations_id']?>)">Edit</a></td>
                                        <td style="width:1px"><a onclick="delete_violations(<?=$row['violations_id']?>)">Delete</a></td>
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
<div id="modal-violations" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Violations</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formViolations" id="formViolations" method="POST">
                    <input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" class="form-control" id="violations_id" name="violations_id">
                    
                    <div class="form-group">
                        <input type="text" ng-model="name" id="name" name="name" class="form-control" placeholder="Name" required>
                        <span ng-messages="formViolations.name.$error" ng-if="formViolations.name.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <textarea Placeholder="Description" name="description" id="description" ng-model="description" class="form-control" style="resize:none" required></textarea>
                        <span ng-messages="formViolations.description.$error" ng-if="formViolations.description.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-violations" onclick="violations()" ng-disabled="formViolations.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->