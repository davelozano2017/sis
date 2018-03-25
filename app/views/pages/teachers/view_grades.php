<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Student Grade Book</h4>
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
                                    <th>Grade</th>
                                    <th>Section</th>
                                    <th>Subject</th>
                                    <th>First</th>
                                    <th>Second</th>
                                    <th>Third</th>
                                    <th>Fourth</th>
                                    <th>Average</th>
                                    <th>School Year</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['get_all_grades'] as $row) { ?> 
                                    <?php 
                                        $set = $row['first'] + $row['second'] + $row['third'] + $row['fourth']; 
                                        $average = $set / 4;
                                    ?>
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td><?=$row['level']?></td>
                                        <td><?=$row['section_name']?></td>
                                        <td><?=$row['subjects_name']?></td>
                                        <td><?=$row['first']?></td>
                                        <td><?=$row['second']?></td>
                                        <td><?=$row['third']?></td>
                                        <td><?=$row['fourth']?></td>
                                        <td><?=$average?>%</td>
                                        <td><?=$row['school_year']?></td>
                                        <td><button onclick="update_grades(<?=$row['assign_grades_id']?>)" class="btn btn-success">Update</button></td>
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
                    <input type="hidden" id="assign_grades_id" name="assign_grades_id">

                    <div class="form-group">
                        <input placeholder="First Grading" type="number" min=0 class="form-control" id="first" name="first" ng-model="first" required>
                        <span ng-messages="formAssign.first.$error" ng-if="formAssign.first.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input placeholder="Second Grading" type="number" min=0 class="form-control" id="second" name="second" ng-model="second" required>
                        <span ng-messages="formAssign.second.$error" ng-if="formAssign.second.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input placeholder="Third Grading" type="number" min=0 class="form-control" id="third" name="third" ng-model="third" required>
                        <span ng-messages="formAssign.third.$error" ng-if="formAssign.third.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input placeholder="Fourth Grading" type="number" min=0 class="form-control" id="fourth" name="fourth" ng-model="fourth" required>
                        <span ng-messages="formAssign.fourth.$error" ng-if="formAssign.fourth.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-assign-student-grades" onclick="update_student_grades()" ng-disabled="formAssign.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->