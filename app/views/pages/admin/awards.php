<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Awards</h4>
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
                <li class="active">Awards</li>
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
                
                <!-- start -->
                    <div class="container-fluid">
                        <table class="table datatable-responsive">
							<thead>
								<tr>
                                    <th style="width:1px">#</th>
                                    <th>Name</th>
                                    <th>First</th>
                                    <th>Second</th>
                                    <th>Third</th>
                                    <th>Fourth</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['parents_students'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td><?=$row['surname']?>, <?=$row['firstname']?> <?=$row['middlename']?></td>
                                        <td><?=$row['first']?></td>
                                        <td><?=$row['second']?></td>
                                        <td><?=$row['third']?></td>
                                        <td><?=$row['fourth']?></td>
                                        <td><a onclick="assign_award(<?=$row['students_id']?>)">View</a></td>
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
<div id="modal-awards" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Awards</h6>
            </div>

            <div class="modal-body">
                <form name="forms" id="forms" method="POST">
                    <input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
                    <input type="hidden" class="form-control" id="guardian_id" name="guardian_id" value="<?=$data['guardian_id']?>">
                    <input type="hidden" class="form-control" id="awards_id" name="awards_id">
                    <input type="hidden" class="form-control" id="stud_id" name="stud_id">
                    
                    <div class="form-group">
                        <input type="text" id="first" name="first"  class="form-control" placeholder="First Quarter">
                    </div>

                    <div class="form-group">
                        <input type="text" id="second" name="second"  class="form-control" placeholder="Second Quarter" >
                    </div>

                    <div class="form-group">
                        <input type="text" id="third" name="third"  class="form-control" placeholder="Third Quarter" >
                    </div>

                    <div class="form-group">
                        <input type="text" id="fourth" name="fourth"  class="form-control" placeholder="Fourth Quarter" >
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-awards" onclick="add_awards()" ></button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->