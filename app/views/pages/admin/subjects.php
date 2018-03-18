<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Subjects</h4>
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
                                    <th style="width:1px">Code</th>
                                    <th>Subject Name</th>
                                    <th colspan=3 style="width:1px"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['subjects'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td style="width:1px">SEC#<?=str_pad($row['subjects_id'],5,0,STR_PAD_LEFT)?></td>
                                        <td><?=$row['subjects_name']?></td>
                                        <td style="width:1px"></td>
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
                    <input type="hidden" class="form-control" id="subjects_id" name="subjects_id">

                    <div class="form-group">
                        <input type="text" ng-model="name" id="name" name="name"  class="form-control" placeholder="Subject Name" required>
                        <span ng-messages="formSubjects.name.$error" ng-if="formSubjects.name.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <textarea Placeholder="Description" name="description" id="description" ng-model="description" class="form-control" style="resize:none" required></textarea>
                        <span ng-messages="formSubjects.description.$error" ng-if="formSubjects.description.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
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