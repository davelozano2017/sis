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
                                    <th>SY</th>
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
