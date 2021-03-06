
<!-- Page container -->
<div class="page-container">

<!-- Page content -->
<div class="page-content">

<!-- Main sidebar -->
<div class="sidebar sidebar-main sidebar-default">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="category-content">
                <div class="sidebar-user-material-content">
                    <a href="#"><img src="<?=empty($data['user_info']->image) ? 'https://www.schoolsinqatar.net/wp-content/plugins/wc-frontend-manager/assets/images/user.png' : URL.UPLOADS.'profile/'.$data['user_info']->image?>" class="img-circle img-responsive" alt=""></a>
                    <h6><?=$data['user_info']->name?></h6>
                    <span class="text-size-small"><?=$data['user_info']->role == 0 ? 'Administrator' : (($data['user_info']->role ==  1) ? 'Teacher' : (($data['user_info']->role == 2)  ? 'Parent'  : 'Student'))?> </span>
                </div>
                <div class="sidebar-user-material-menu">
                    <a href="#user-nav" data-toggle="collapse"><span><?=$data['user_info']->name?></span> <i class="caret"></i></a>
                </div>
            </div>
            
            <div class="navigation-wrapper collapse" id="user-nav">
                <ul class="navigation">
                     <?php 
                        switch ($data['user_info']->role) {
                            case '0': $dir = 'admin/'; break;
                            case '1': $dir = 'teachers/'; break;
                            case '2': $dir = 'parents/'; break;
                            case '3': $dir = 'students/'; break;
                        }
                     ?>
                    <li><a href="<?=URL.$dir?>profile"><i class="icon-user"></i> <span>My profile</span></a></li>
                    <li><a href="<?=URL.$dir?>password"><i class="icon-lock4"></i> <span>Change Password</span></a></li>
                    <li><a href="<?=URL.$dir?>logout"><i class="icon-switch2"></i> <span>Logout</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <!-- Main -->

                    <?php 
                    switch($data['user_info']->role) { case 0: ?>
                        <li class="<?= $data['title'] == 'Dashboard' ? 'active':'';?>"><a href="<?=URL?>admin/dashboard"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                            <li>
                                <a href="#"><i class="icon-list"></i> <span>Management</span></a>
                                <ul>
                                    <li class="<?= $data['title'] == 'Assign Teachers'   ? 'active' : '';?>"><a href="<?=URL?>admin/assign_teachers"> Assign teachers </a></li>
                                    <li class="<?= $data['title'] == 'Assign Students'   ? 'active' : '';?>"><a href="<?=URL?>admin/assign_students"> Assign students </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-graph"></i> <span>Reports</span></a>
                                <ul>
                                    <li class="<?= $data['title'] == 'Student Master List' ? 'active' : '';?>"><a href="<?=URL?>admin/report_student_master_list"> Student Master Lists </a></li>
                                    <li><a href="#"> Generate Form 137 </a> 
                                        <ul>
                                            <li class="<?= $data['title'] == 'Elementary' ? 'active' : '';?>"><a onclick="form137_elementary()"> Elementary</a></li>
                                            <li class="<?= $data['title'] == 'Secondary'  ? 'active' : '';?>"><a onclick="form137_secondary()"> Secondary </a></li>
                                        </ul>
                                    </li>
                                    <li class="<?= $data['title'] == 'Pre School'  ? 'active' : '';?>"><a onclick="form_pre_elem()"> Pre School Elementary Card </a></li>
                                    <li class="<?= $data['title'] == 'Pre School'  ? 'active' : '';?>"><a onclick="form_junior_high()"> Junior High Card </a></li>
                                    <li class="<?= $data['title'] == 'Pre School'  ? 'active' : '';?>"><a onclick="form_shs()"> SHS Report Card </a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-stack"></i> <span>Control Panel</span></a>
                                <ul>
                                    <li class="<?= $data['title'] == 'Teachers'    ? 'active' : '';?>"><a href="<?=URL?>admin/teachers"> Teachers </a></li>
                                    <li class="<?= $data['title'] == 'Section'     ? 'active' : '';?>"><a href="<?=URL?>admin/section"> Section </a></li>
                                    <li class="<?= $data['title'] == 'Subjects'    ? 'active' : '';?>"><a href="<?=URL?>admin/subjects"> Subjects </a></li>
                                    <li class="<?= $data['title'] == 'Parents'     ? 'active' : '';?>"><a href="<?=URL?>admin/parents"> Parents </a></li>
                                    <li class="<?= $data['title'] == 'Students'    ? 'active' : '';?>"><a href="<?=URL?>admin/students"> Students </a></li>
                                    <li class="<?= $data['title'] == 'Violations'  ? 'active' : '';?>"><a href="<?=URL?>admin/violations"> Violations </a></li>
                                    <li class="<?= $data['title'] == 'Extra Curricular'    ? 'active' : '';?>"><a href="<?=URL?>admin/extra_curricular"> Extra Curricular </a></li>
                                    <li class="<?= $data['title'] == 'Events'      ? 'active' : '';?>"><a href="<?=URL?>admin/events"> Events </a></li>
                                    <li class="<?= $data['title'] == 'Accounts'    ? 'active' : '';?>"><a href="<?=URL?>admin/accounts"> Accounts </a></li>
                                    <li class="<?= $data['title'] == 'School Year' ? 'active' : '';?>"><a href="<?=URL?>admin/school_year"> School Year </a></li>
                                </ul>
                            </li>
                        <?php  break; case 1: ?>
                            <li class="<?= $data['title'] == 'Dashboard' ? 'active':'';?>"><a href="<?=URL?>teachers/dashboard"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                            <li class="<?= $data['title'] == 'Student Grade Book' ? 'active':'';?>"><a href="<?=URL?>teachers/student_grade_book"><i class="icon-books"></i> <span>Student Grade Book</span></a></li>
                            <li class="<?= $data['title'] == 'Extra Curricular'    ? 'active' : '';?>"><a href="<?=URL?>teachers/extra_curricular"><i class="icon-check"></i> Extra Curricular </a></li>
                            <li class="<?= $data['title'] == 'Violations'  ? 'active' : '';?>"><a href="<?=URL?>teachers/violations"><i class="icon-cross3"></i> Violations </a></li>
                        <?php break; case 2: ?>
                            <li class="<?= $data['title'] == 'Dashboard' ? 'active':'';?>"><a href="<?=URL?>parents/dashboard"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                            <li class="<?= $data['title'] == 'Student Grade Book' ? 'active':'';?>"><a href="<?=URL?>parents/student_grade_book"><i class="icon-books"></i> <span>Student Grade Book</span></a></li>
                            <li class="<?= $data['title'] == 'Awards' ? 'active':'';?>"><a href="<?=URL?>parents/awards"><i class="icon-trophy3"></i> <span>Awards</span></a></li>
                            <li class="<?= $data['title'] == 'Extra Curricular' ? 'active':'';?>"><a href="<?=URL?>parents/extra_curricular"><i class="icon-check"></i> <span>Extra Curricular</span></a></li>
                            <li class="<?= $data['title'] == 'Violations' ? 'active':'';?>"><a href="<?=URL?>parents/violations"><i class="icon-cross3"></i> <span>Violations</span></a></li>
                        <?php break; case 3: ?>
                        <li class="<?= $data['title'] == 'Dashboard' ? 'active':'';?>"><a href="<?=URL?>students/dashboard"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                            <li class="<?= $data['title'] == 'Student Grade Book' ? 'active':'';?>"><a href="<?=URL?>students/student_grade_book"><i class="icon-books"></i> <span>Student Grade Book</span></a></li>
                            <li class="<?= $data['title'] == 'Extra Curricular' ? 'active':'';?>"><a href="<?=URL?>students/extra_curricular"><i class="icon-check"></i> <span>Extra Curricular</span></a></li>
                            <li class="<?= $data['title'] == 'Violations' ? 'active':'';?>"><a href="<?=URL?>students/violations"><i class="icon-cross3"></i> <span>Violations</span></a></li>
                        <?php break; } ?>
                    
                    <!-- /main -->

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->



    <!-- Success modal -->
<div id="form137-elementary" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Elementary</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formAwards" id="formAwards" method="POST">

                    <div class="form-group">
                        <select class="form-control ss" onchange="go_filter('elementary')" id="elementary">
                            <option value="">Select Student</option>
                            <?php foreach($data['students'] as $students_row) { ?>
                                <option value="<?=$students_row['students_id']?>"><?=$students_row['LRN'].' - '.$students_row['firstname']. ' '.$students_row['middlename']. ' '.$students_row['surname']?></option>
                            <?php } ?>
                        </select>
                    </div>

                </form>

            </div>

            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->

<div id="form137-secondary" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Junior High</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formAwards" id="formAwards" method="POST">
                    
                    

                    <div class="form-group">
                        <select class="form-control ss" onchange="go_filter('secondary')" id="secondary">
                            <option value="">Select Student</option>
                            <?php foreach($data['students'] as $students_row) { ?>
                                <option value="<?=$students_row['students_id']?>"><?=$students_row['LRN'].' - '.$students_row['firstname']. ' '.$students_row['middlename']. ' '.$students_row['surname']?></option>
                            <?php } ?>
                        </select>
                    </div>


                </form>
            </div>

            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div id="form-pre-elem" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Elementary Report Card</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formAwards" id="formAwards" method="POST">
                    
                    <div class="form-group">
                        <select class="form-control schools" id="selector">
                            <option value="">Select School Year</option>
                            <?php foreach($data['selector'] as $selector) { ?>
                                <option value="<?=$selector['sy']?>"><?=$selector['level']?> - <?=$selector['sy']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <select class="form-control ss" onchange="go_filter('elementary report')" id="elementary_report">
                            <option value="">Select Student</option>
                            <?php foreach($data['students'] as $students_row) { ?>
                                <option value="<?=$students_row['students_id']?>"><?=$students_row['LRN'].' - '.$students_row['firstname']. ' '.$students_row['middlename']. ' '.$students_row['surname']?></option>
                            <?php } ?>
                        </select>
                    </div>


                </form>
            </div>

            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div id="form-junior-high" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Junior High Report Card</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formAwards" id="formAwards" method="POST">
                    
                    <div class="form-group">
                        <select class="form-control schools" id="selector1">
                            <option value="">Select School Year</option>
                            <?php foreach($data['selector1'] as $selector1) { ?>
                                <option value="<?=$selector1['sy']?>"><?=$selector1['level']?> - <?=$selector1['sy']?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control ss" onchange="go_filter('junior high report')" id="junior_high_report">
                            <option value="">Select Student</option>
                            <?php foreach($data['students'] as $students_row) { ?>
                                <option value="<?=$students_row['students_id']?>"><?=$students_row['LRN'].' - '.$students_row['firstname']. ' '.$students_row['middlename']. ' '.$students_row['surname']?></option>
                            <?php } ?>
                        </select>
                    </div>

                    


                </form>
            </div>

            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div id="form-shs" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Senior High Report Card</h6>
            </div>

            <div class="modal-body">
                <form novalidate name="formAwards" id="formAwards" method="POST">

                    <div class="form-group">
                        <select class="form-control schools" id="selector2">
                            <option value="">Select School Year</option>
                            <?php foreach($data['selector2'] as $selector2) { ?>
                                <option value="<?=$selector2['sy']?>"><?=$selector2['level']?> - <?=$selector2['sy']?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control ss" onchange="go_filter('senior high report')" id="shs_report">
                            <option value="">Select Student</option>
                            <?php foreach($data['students'] as $students_row) { ?>
                                <option value="<?=$students_row['students_id']?>"><?=$students_row['LRN'].' - '.$students_row['firstname']. ' '.$students_row['middlename']. ' '.$students_row['surname']?></option>
                            <?php } ?>
                        </select>
                    </div>


                </form>
            </div>

            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
