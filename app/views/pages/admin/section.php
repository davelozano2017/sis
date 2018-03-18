<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Section</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li>Dashboard</li>
                <li>Control Panel</li>
                <li class="active">Section</li>
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
                    <button onclick="add_new_section()" class="btn btn-success">Add New</button>
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
                                    <th colspan=2 style="width:1px"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['section'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td style="width:1px">SEC#<?=str_pad($row['section_id'],5,0,STR_PAD_LEFT)?></td>
                                        <td><?=$row['section_name']?></td>
                                        <td><?=$row['level']?></td>
                                        <td style="width:1px"><a onclick="modify_section(<?=$row['section_id']?>)">Edit</a></td>
                                        <td style="width:1px"><a onclick="delete_section(<?=$row['section_id']?>)">Delete</a></td>
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
<div id="modal-section" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Section</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formSection" id="formSection" method="POST">
                    <input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" class="form-control" id="section_id" name="section_id">
                    
                    <div class="form-group">
                        <input type="text" ng-model="name" id="name" name="name"  class="form-control" placeholder="Section Name" required>
                        <span ng-messages="formSection.name.$error" ng-if="formSection.name.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="level" ng-model="level" id="level" required>
                            <option value="">Select Level</option>
                            <option value="Nursery">Nursery</option>
                            <option value="Kinder">Kinder</option>
                            <option value="Preparatory">Preparatory</option>
                            <option value="Grade 1">Grade 1</option>
                            <option value="Grade 2">Grade 2</option>
                            <option value="Grade 3">Grade 3</option>
                            <option value="Grade 4">Grade 4</option>
                            <option value="Grade 5">Grade 5</option>
                            <option value="Grade 6">Grade 6</option>
                            <option value="Grade 7">Grade 7</option>
                            <option value="Grade 8">Grade 8</option>
                            <option value="Grade 9">Grade 9</option>
                            <option value="Grade 10">Grade 10</option>
                            <option value="Grade 11">Grade 11</option>
                            <option value="Grade 12">Grade 12</option>
                        </select>
                        <span ng-messages="formSection.level.$error" ng-if="formSection.level.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <textarea Placeholder="Description" name="description" id="description" ng-model="description" class="form-control" style="resize:none" required></textarea>
                        <span ng-messages="formSection.description.$error" ng-if="formSection.description.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-section" onclick="section()" ng-disabled="formSection.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->