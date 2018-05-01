<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>School Year</h4>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><span>School Year : <?=$data['school_year']->fetch_object()->school_year?></span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li>Dashboard</li>
                <li>Control Panel</li>
                <li class="active">School Year</li>
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
                    <button class="btn btn-primary" onclick="add_new_sy()">Add New</button>
                </div>
                
                <!-- start -->
                    <div class="container-fluid">
                        <table class="table datatable-responsive">
							<thead>
								<tr>
                                    <th style="width:1px">#</th>
                                    <th>Name</th>
                                    <th colspan=4 style="width:1px"></th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['school_year'] as $row) { ?> 
                                    <tr>
                                        <td style="width:1px"><?=++$i?></td>
                                        <td style="width:1px"><?=$row['school_year']?></td>
                                        <td style="width:1px"></td>
                                        <td style="width:1px"></td>
                                        <td style="width:1px"></td>
                                        <td style="width:1px"><a onclick="modify_school_year(<?=$row['school_year_id']?>)">Edit</a></td>
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
  <div id="modal-add-school-year" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">School Year</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formAddSchoolYear" id="formAddSchoolYear" method="POST">
                    <input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" class="form-control" id="school_year_id" name="school_year_id">
                    <div class="form-group">
                        <input type="text" name="school_year"  class="form-control" required>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success"  onclick="addschool_year()" ng-disabled="formAddSchoolYear.$invalid">Add New <i class="icon-arrow-right14 position-right"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->


    <!-- Success modal -->
<div id="modal-school-year" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">School Year</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formEditSchoolYear" id="formEditSchoolYear" method="POST">
                    <input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" class="form-control" id="school_year_id" name="school_year_id">
                    <div class="form-group">
                        <select id="school_year" name="school_year" class="form-control">
                            <?php foreach($data['list'] as $list) { ?> 
                                <option value="<?=$list['school_year']?>"><?=$list['school_year']?></option> 
                            <?php } ?>
                        </select>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-school-year" onclick="editschool_year()" ng-disabled="formSchoolYear.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->