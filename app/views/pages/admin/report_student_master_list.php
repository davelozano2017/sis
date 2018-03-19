<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Student Master List</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li>Dashboard</li>
                <li>Reports</li>
                <li>Student Master List</li>
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
                        <table class="table datatable-button-print-basic">
							<thead>
								<tr>
                                    <th style="width:1px">#</th>
                                    <th>LRN</th>
                                    <th>Name</th>
                                    <th style="width:1%">Sections</th>
                                    <th style="width:1%">Grade</th>
                                    <th>Address</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach($data['all_assign_in_students'] as $row) { ?> 
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td><?=$row['LRN']?></td>
                                        <td><?=$row['firstname']. ' '.$row['middlename']. ' '.$row['surname']?></td>
                                        <td><?=$row['section_name']?></td>
                                        <td><?=$row['level']?></td>
                                        <td style="width:50%"><?=$row['address']?></td>
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
