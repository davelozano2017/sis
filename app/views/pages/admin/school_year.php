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
<div id="modal-school-year" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">School Year</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formSchoolYear" id="formSchoolYear" method="POST">
                    <input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" class="form-control" id="school_year_id" name="school_year_id">
                    <div class="form-group">
                        <select id="school_year" name="school_year" class="form-control">
                            <option value="2015 - 2016">2015 - 2016</option> 
                            <option value="2016 - 2017">2016 - 2017</option> 
                            <option value="2017 - 2018">2017 - 2018</option> 
                            <option value="2018 - 2019">2018 - 2019</option> 
                            <option value="2019 - 2020">2019 - 2020</option> 
                            <option value="2020 - 2021">2020 - 2021</option> 
                            <option value="2021 - 2022">2021 - 2022</option> 
                            <option value="2022 - 2023">2022 - 2023</option> 
                            <option value="2023 - 2024">2023 - 2024</option> 
                            <option value="2024 - 2025">2024 - 2025</option> 
                            <option value="2025 - 2026">2025 - 2026</option> 
                            <option value="2026 - 2027">2026 - 2027</option> 
                            <option value="2027 - 2028">2027 - 2028</option> 
                            <option value="2028 - 2029">2028 - 2029</option> 
                        </select>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-school-year" onclick="school_year()" ng-disabled="formSchoolYear.$invalid"></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->