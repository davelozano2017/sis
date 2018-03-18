<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Students</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li>Dashboard</li>
                <li>Control Panel</li>
                <li class="active">Students</li>
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
                    <button onclick="add_new_students()" class="btn btn-success">Add New</button>
                </div>
                
                <!-- start -->
                    <div class="container-fluid">
                        <table class="table datatable-responsive">
							<thead>
								<tr>
									<th style="width:1px">#</th>
									<th style="width:1px">LRN</th>
									<th>Name</th>
									<th style="width:1px">Contact</th>
									<th style="width:1px" colspan=2></th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['students'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td><?=$row['LRN']?></td>
                                        <td><?=$row['firstname']. ' '.$row['middlename']. ' '.$row['surname']?></td>
                                        <td><?=$row['contact']?></td>
                                        <td style="width:1px"><a onclick="modify_students(<?=$row['students_id']?>)">Edit</a></td>
                                        <td style="width:1px"><a onclick="delete_students(<?=$row['students_id']?>)">Delete</a></td>
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
<div id="modal-students" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Students</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formStudents" id="formStudents" method="POST">
                    <input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" class="form-control" id="students_id" name="students_id">
                    
                    <div class="form-group">
                        <input type="text" ng-model="LRN" id="LRN" name="LRN"  ng-minlength=12 ng-maxlength=12 class="form-control" placeholder="Learner Reference Number" required>
                        <span ng-messages="formStudents.LRN.$error" ng-if="formStudents.LRN.$dirty">
                            <strong ng-message="minlength" class="text-danger">Learner Reference Number should be 12 characters only.</strong>
                            <strong ng-message="maxlength" class="text-danger">Learner Reference Number should be 12 characters only.</strong>
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="guardian_id" id="guardian_id">
                            <option value="">Select Guardian</option>
                            <?php foreach($data['parents'] as $prow) { ?>
                                <option value="<?=$prow['user_id']?>"><?=$prow['name']?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-model="surname" id="surname" name="surname" class="form-control" placeholder="Surname" required>
                        <span ng-messages="formStudents.surname.$error" ng-if="formStudents.surname.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-model="firstname" id="firstname" name="firstname" class="form-control" placeholder="First Name" required>
                        <span ng-messages="formStudents.firstname.$error" ng-if="formStudents.firstname.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-model="middlename" id="middlename" name="middlename" class="form-control" placeholder="Middle Name" required>
                        <span ng-messages="formStudents.middlename.$error" ng-if="formStudents.middlename.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="gender" id="gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-model="contact" id="contact" name="contact" class="form-control" placeholder="Contact Number" required>
                        <span ng-messages="formStudents.contact.$error" ng-if="formStudents.contact.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" ng-model="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
                        <span ng-messages="formStudents.email.$error" ng-if="formStudents.email.$dirty">
                            <strong ng-message="pattern" class="text-danger">Please type valid email address.</strong>
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <textarea Placeholder="Address" name="address" id="address" ng-model="address" class="form-control" style="resize:none" required></textarea>
                        <span ng-messages="formStudents.address.$error" ng-if="formStudents.address.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>


                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-students" onclick="students()" ng-disabled="formStudents.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->