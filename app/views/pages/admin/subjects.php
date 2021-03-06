<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Subjects</h4>
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
                <li class="active">Subjects</li>
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
                    <button onclick="add_new_subjects()" class="btn btn-success">Add New</button>
                </div>
                
                <!-- start -->
                    <div class="container-fluid">
                       <table class="table datatable-responsive">
							<thead>
								<tr>
                                    <th style="width:1px">#</th>
                                    <th style="width:150px">Subject Code</th>
                                    <th >Title</th>
                                    <th style="width:150px">Subject Level</th>
                                    <th colspan=2 style="width:1px"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['subjects'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td style="width:1px">SUB#<?=str_pad($row['subjects_id'],5,0,STR_PAD_LEFT)?></td>
                                        <td><?=$row['subjects_name']?></td>
                                        <td style="width:1px"><?=$row['subject_level']?></td>
                                        <td style="width:1px"><a onclick="modify_subjects(<?=$row['subjects_id']?>)">Edit</a></td>
                                        <td style="width:1px"><a onclick="delete_subjects(<?=$row['subjects_id']?>)">Delete</a></td>
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
<div id="modal-subjects" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Subjects</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formSubjects" id="formSubjects" method="POST">
                    <input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" class="form-control" id="subj_id" name="subjects_id">

                    <div class="form-group">
                        <input type="text" ng-model="name" id="name" name="name"  class="form-control" placeholder="Subject Name" required>
                        <span ng-messages="formSubjects.name.$error" ng-if="formSubjects.name.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>



                    <div class="form-group">
                        <select name="subject_level" class="form-control" id="subject_level">
                            <option value="Elementary">Elementary</option>
                            <option value="Junior High">Junior High</option>
                            <option value="Senior High School - 1st Semenster">Senior High School - 1st Semenster</option>
                            <option value="Senior High School - 2nd Semenster">Senior High School - 2nd Semenster</option>
                        </select>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-subjects" onclick="subjects()" ng-disabled="formSubjects.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->