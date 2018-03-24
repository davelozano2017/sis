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
                <li class="active">Assign Students</li>
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
                                    <th style="width:1px">Code</th>
                                    <th>Section Name</th>
                                    <th>Level</th>
                                    <th>Students</th>
                                    <th style="width:1px"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['section'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td style="width:1px">SEC#<?=str_pad($row['section_id'],5,0,STR_PAD_LEFT)?></td>
                                        <td><?=$row['section_name']?></td>
                                        <td><?=$row['level']?></td>
                                        <td style="width:1px"><?=count_sections($row['section_id'])?></td>
                                        <td style="width:200px"><a class="btn btn-success" onclick="assign_students(<?=$row['section_id']?>)">Assign</a> <a class="btn btn-success" href="<?=URL?>admin/view_assign_in_students/<?=$row['section_id']?>">View</a></td>
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
<div id="modal-assign-students" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Assign Student's teacher and section</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formAssign" id="formAssign" method="POST">
                    <input type="hidden" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" id="sec_id" name="section_id">
                    <div class="form-group">
                        <select class="form-control select2" multiple name="students_id[]" ng-model="students_id" id="students_id" required>
                            <?php foreach($data['students'] as $students_row) { ?>
                                <option value="<?=$students_row['students_id']?>"><?=$students_row['LRN'].' - '.$students_row['firstname']. ' '.$students_row['middlename']. ' '.$students_row['surname']?></option>
                            <?php } ?>
                        </select>
                        <span ng-messages="formAssign.students_id.$error" ng-if="formAssign.students_id.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-assign-students" onclick="assign_to_students()" ng-disabled="formAssign.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->