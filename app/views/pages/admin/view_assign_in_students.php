<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Assign Students</h4>
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
                <li>management</li>
                <li>Assign Students</li>
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
                </div>
                
                <!-- start -->
                    <div class="container-fluid">
                        <table class="table datatable-responsive">
							<thead>
								<tr>
                                    <th style="width:1px">#</th>
                                    <th>Name</th>
                                    <th>Sections</th>
                                    <th>Grade</th>
                                    <th>School Year</th>
                                    <th style="width:1px"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['assign_in_students'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td><?=$row['firstname']. ' '.$row['middlename']. ' '.$row['surname']?></td>
                                        <td><?=$row['section_name']?></td>
                                        <td><?=$row['level']?></td>
                                        <td><?=$row['school_years']?></td>
                                        <td style="width:1px"><a onclick="delete_assign_in_students(<?=$row['section_id']?>,<?=$row['students_id']?>)">Delete</a></td>
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
<div id="modal-assign-teachers" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Assign teacher's section and subjects</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formAssign" id="formAssign" method="POST">
                    <input type="hidden" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" id="user_id" name="user_id">
                    <div class="form-group">
                        <select class="form-control " name="section_id" ng-model="section_id" id="section_id" required>
                            <option value="">Select Section</option>
                            <?php foreach($data['section'] as $section_row) { ?>
                                <option value="<?=$section_row['section_id']?>"><?=$section_row['level'].' - '.$section_row['name']?></option>
                            <?php } ?>
                        </select>
                        <span ng-messages="formAssign.section_id.$error" ng-if="formAssign.section_id.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <select class="form-control select2" multiple name="subjects_id[]" ng-model="subjects_id" id="subjects_id" required>
                            <option value="">Select Subject</option>
                            <?php foreach($data['subjects'] as $subjects_row) { ?>
                                <option value="<?=$subjects_row['subjects_id']?>"><?=$subjects_row['name']?></option>
                            <?php } ?>
                        </select>
                        <span ng-messages="formAssign.subjects_id.$error" ng-if="formAssign.subjects_id.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>


                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-assign-teacher" onclick="assign_to_teachers()" ng-disabled="formAssign.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->