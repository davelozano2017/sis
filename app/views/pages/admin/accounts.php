<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Accounts</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li>Dashboard</li>
                <li>Control Panel</li>
                <li class="active">Accounts</li>
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
                    <button onclick="add_new_accounts()" class="btn btn-success">Add New</button>
                </div>
                
                <!-- start -->
                    <div class="container-fluid">
                        <table class="table datatable-responsive">
							<thead>
								<tr>
                                    <th style="width:1px">#</th>
                                    <th>Name</th>
                                    <th style="width:100px">Status</th>
                                    <th style="width:1px">Role</th>
                                    <th colspan="2" style="width:1px"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['accounts'] as $row) { ?> 
                                    <?php switch($row['role']) { case 0 : $role = 'Administrator'; break; case 1 : $role = 'Teacher'; break; case 2 : $role = 'Parent'; break; case 3 : $role = 'Student'; break; }
                                    ?>
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td><?=$row['name']?></td>
                                        <td><?=$row['status'] == 0 ? 'Active' : 'Not Active';?></td>
                                        <td><?=$role?></td>
                                        <td style="width:1px"><a onclick="modify_accounts(<?=$row['user_id']?>)">Edit</a></td>
                                        <td style="width:1px"><a onclick="delete_accounts(<?=$row['user_id']?>)">Delete</a></td>
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
<div id="modal-accounts" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Accounts</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formAccounts" id="formAccounts" method="POST">
                    <input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" class="form-control" id="user_id" name="user_id">
                    
                    <div class="form-group">
                        <input type="text" ng-model="name" id="name" name="name"  class="form-control" placeholder="Name" required>
                        <span ng-messages="formAccounts.name.$error" ng-if="formAccounts.name.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-model="contact" id="contact" name="contact"  class="form-control" placeholder="Contact Number" required>
                        <span ng-messages="formAccounts.contact.$error" ng-if="formAccounts.contact.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" ng-model="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
                        <span ng-messages="formAccounts.email.$error" ng-if="formAccounts.email.$dirty">
                            <strong ng-message="pattern" class="text-danger">Please type valid email address.</strong>
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-model="username" id="username" name="username"  class="form-control" placeholder="Username" required>
                        <span ng-messages="formAccounts.username.$error" ng-if="formAccounts.username.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <select name="role" class="form-control" id="role" ng-model="role" required>
                            <option value="">Select Role</option>
                            <option value="0">Administrator</option>
                            <option value="3">Student</option>
                        </select>
                        <span ng-messages="formAccounts.role.$error" ng-if="formAccounts.role.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <select name="status" class="form-control" id="status" ng-model="status" required>
                            <option value="">Select Status</option>
                            <option value="0">Active</option>
                            <option value="1">Not Active</option>
                        </select>
                        <span ng-messages="formAccounts.status.$error" ng-if="formAccounts.status.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-accounts" onclick="accounts()" ng-disabled="formAccounts.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->