<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Parents / Guardians</h4>
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
                <li class="active">Parents / Guardians</li>
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
                    <button onclick="add_new_parents()" class="btn btn-success">Add New</button>
                </div>
                
                <!-- start -->
                    <div class="container-fluid">
                        <table class="table datatable-responsive">
							<thead>
								<tr>
                                    <th style="width:1px">#</th>
                                    <th>Name</th>
                                    <th style="width:1px">contact</th>
                                    <th style="width:100px">Status</th>
                                    <th colspan=2 style="width:1px"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['parents'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td><?=$row['name']?></td>
                                        <td><?=$row['contact']?></td>
                                        <td><?=$row['status'] == 0 ? 'Active' : 'Not Active';?></td>
                                        <td style="width:1px"><a onclick="modify_parents(<?=$row['user_id']?>)">Edit</a></td>
                                        <td style="width:1px"><a onclick="delete_parents(<?=$row['user_id']?>)">Delete</a></td>
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
<div id="modal-parents" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Parents / Guardians</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formParents" id="formParents" method="POST">
                    <input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" class="form-control" id="user_id" name="user_id">
                    
                    <div class="form-group">
                        <input type="text" ng-model="name" id="name" name="name"  class="form-control" placeholder="Name" required>
                        <span ng-messages="formParents.name.$error" ng-if="formParents.name.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-model="contact" id="contact" name="contact"  class="form-control" placeholder="Contact Number" required>
                        <span ng-messages="formParents.contact.$error" ng-if="formParents.contact.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" ng-model="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
                        <span ng-messages="formParents.email.$error" ng-if="formParents.email.$dirty">
                            <strong ng-message="pattern" class="text-danger">Please type valid email address.</strong>
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-model="username" id="username" name="username"  class="form-control" placeholder="Username" required>
                        <span ng-messages="formParents.username.$error" ng-if="formParents.username.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <select name="status" class="form-control" id="status" ng-model="status" required>
                            <option value="">Select Status</option>
                            <option value="0">Active</option>
                            <option value="1">Not Active</option>
                        </select>
                        <span ng-messages="formParents.status.$error" ng-if="formParents.status.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-parents" onclick="parents()" ng-disabled="formParents.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->