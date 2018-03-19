<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Student Grade Book</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
            <li>Dashboard</li>
            <li class="active">Student Grade Book</li>
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
                <div class="panel-heading"></div>
                
                <!-- start -->
                    <div class="container-fluid">
                        <table class="table datatable-responsive">
							<thead>
								<tr>
                                    <th style="width:1px">#</th>
                                    <th>Name</th>
                                    <th>Grade</th>
                                    <th>Sections</th>
                                    <th colspan=3  style="width:1px"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['all_assign_in_students_by_teacher'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td><?=$row['firstname']. ' '.$row['middlename']. ' '.$row['surname']?></td>
                                        <td><?=$row['level']?></td>
                                        <td><?=$row['section_name']?></td>
                                        <td style="width:1px"><a class="btn btn-success" onclick="assign_grades_in_students(<?=$row['section_id']?>,<?=$row['students_id']?>)">Assign Grades</a> </td>
                                        <td style="width:1px"><a class="btn btn-success" href="<?=URL?>admin/view_assign_in_students/<?=$row['section_id']?>">View</a></td>
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
<div id="modal-assign-grades" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Assign grades</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formAssign" id="formAssign" method="POST">
                    <input type="hidden" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" id="sec_id" name="section_id">
                    <input type="hidden" id="stud_id" name="students_id">

                    <div class="form-group">
                        <select class="form-control" name="subjects_id" ng-model="subjects_id" id="subjects_id" required>
                            <option value="">Select Subject</option>
                            <?php foreach($data['subjects'] as $subjects_row) { ?>
                                <option value="<?=$subjects_row['subjects_id']?>"><?=$subjects_row['subjects_name']?></option>
                            <?php } ?>
                        </select>
                        <span ng-messages="formAssign.subjects_id.$error" ng-if="formAssign.subjects_id.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input placeholder="First Grading" type="text" class="form-control" id="first" name="first" ng-model="first" required>
                        <span ng-messages="formAssign.first.$error" ng-if="formAssign.first.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input placeholder="Second Grading" type="text" class="form-control" id="second" name="second" ng-model="second" required>
                        <span ng-messages="formAssign.second.$error" ng-if="formAssign.second.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input placeholder="Third Grading" type="text" class="form-control" id="third" name="third" ng-model="third" required>
                        <span ng-messages="formAssign.third.$error" ng-if="formAssign.third.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input placeholder="Fourth Grading" type="text" class="form-control" id="fourth" name="fourth" ng-model="fourth" required>
                        <span ng-messages="formAssign.fourth.$error" ng-if="formAssign.fourth.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-assign-student-grades" onclick="assign_student_grades()" ng-disabled="formAssign.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->