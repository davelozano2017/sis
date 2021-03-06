<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Teachers</h4>
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
                <li class="active">Teachers</li>
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
                    <button onclick="add_new_teachers()" class="btn btn-success">Add New</button>
                </div>
                
                <!-- start -->
                    <div class="container-fluid">
                        <table class="table datatable-responsive">
							<thead>
								<tr>
                                    <th style="width:1px">#</th>
                                    <th>Name</th>
                                    <th style="width:1px">Status</th>
                                    <th style="width:1px">username</th>
                                    <th colspan=2 style="width:1px"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['teachers'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td><?=$row['name']?></td>
                                        <td><?=$row['status'] == 0 ? 'Active' : 'Not Active';?></td>
                                        <td><?=$row['username']?></td>
                                        <td style="width:1px"><a onclick="modify_teachers(<?=$row['user_id']?>)">Edit</a></td>
                                        <td style="width:1px"><a onclick="delete_teachers(<?=$row['user_id']?>)">Delete</a></td>
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
<div id="modal-teachers" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Teachers</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formTeachers" id="formTeachers" method="POST">
                    <input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" class="form-control" id="user_id" name="user_id">
                    
                    <div class="form-group">
                        <input type="text" ng-model="name" id="name" name="name"  class="form-control" placeholder="Name" required>
                        <span ng-messages="formTeachers.name.$error" ng-if="formTeachers.name.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-model="contact" id="contact" name="contact"  class="form-control" placeholder="Contact Number" required>
                        <span ng-messages="formTeachers.contact.$error" ng-if="formTeachers.contact.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" ng-model="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
                        <span ng-messages="formTeachers.email.$error" ng-if="formTeachers.email.$dirty">
                            <strong ng-message="pattern" class="text-danger">Please type valid email address.</strong>
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-model="username" id="username" name="username"  class="form-control" placeholder="Username" required>
                        <span ng-messages="formTeachers.username.$error" ng-if="formTeachers.username.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <select name="status" class="form-control" id="status" ng-model="status" required>
                            <option value="">Select Status</option>
                            <option value="0">Active</option>
                            <option value="1">Not Active</option>
                        </select>
                        <span ng-messages="formTeachers.status.$error" ng-if="formTeachers.status.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <textarea Placeholder="Educational Background" name="educational_background" id="educational_background" ng-model="educational_background" class="form-control" style="resize:none" required></textarea>
                        <span ng-messages="formTeachers.educational_background.$error" ng-if="formTeachers.educational_background.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-teachers" onclick="teachers()" ng-disabled="formTeachers.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->