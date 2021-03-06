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
                <div class="panel-heading">
                <a class="btn btn-success" onclick="assign_grades_in_students()">Assign Grades</a> 
                </div>
                
                <!-- start -->
                    <div class="container-fluid">
                        <table class="table datatable-responsive">
							<thead>
								<tr>
                                    <th style="width:1px">#</th>
                                    <th>Name</th>
                                    <th>Grade</th>
                                    <th>Sections</th>
                                    <th colspan=3 style="width:1px"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['all_assign_in_students_by_teacher'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td><?=$row['firstname']. ' '.$row['middlename']. ' '.$row['surname']?></td>
                                        <td><?=$row['level']?></td>
                                        <td><?=$row['section_name']?></td>
                                        <td style="width:1px"></td>
                                        <td style="width:1px"><a class="btn btn-success" href="<?=URL?>teachers/view_grades/<?=$row['students_id']?>">View</a></td>
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
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-4 col-sm-4" style="margin-top:10px">Students</div>
                            <div class="col-md-8 col-sm-8">
                                <select name="subjects_id" id="subjects_id" class="form-control">
                                    <option value="">Select Subject</option>
                                    <?php foreach($data['subjects'] as $subjects_row) { ?>
                                        <?php $subject_level = $subjects_row['level'] != 'Grade 12' ? '' : $subjects_row['subject_level'] ?>
                                        <option value="<?=$subjects_row['subjects_id']?>"><?=$subjects_row['level']?> <?=$subjects_row['section_name']?> - <?=$subjects_row['subjects_name']?> <?=$subject_level?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <?php foreach($data['all_assign_in_students_by_teacher'] as $row) { ?> 
                    <input type="hidden" name="students_id[]" value="<?=$row['students_id']?>">
                    <input type="hidden" name="section_id[]" value="<?=$row['section_id']?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-4 col-sm-4" style="margin-top:10px">
                                    <p><?=$row['firstname']. ' '.$row['middlename']. ' '.$row['surname']?></p>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <input type="number" min=0 value="100" name="first[]" placeholder="1st Grading" class="form-control">
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <input readonly type="number" min=0 value="0" name="second[]" placeholder="2nd Grading" class="form-control">
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <input readonly type="number" min=0 value="0" name="third[]" placeholder="3rd Grading" class="form-control">
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <input readonly type="number" min=0 value="0" name="fourth[]" placeholder="4th Grading" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-assign-student-grades" onclick="assign_student_grades()" ng-disabled="formAssign.$invalid"></button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /success modal -->

