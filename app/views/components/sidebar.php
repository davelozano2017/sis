
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
                    <span class="text-size-small"><?=$data['user_info']->role == 0 ? 'Administrator' : (($data['user_info']->role ==  1) ? 'Teacher' : 'Student')?> </span>
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
                            <li><a href="<?=URL?>admin/"> Student Master Lists </a></li>
                            <li><a href="<?=URL?>admin/"> Generate Form 137 </a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="icon-stack"></i> <span>Control Panel</span></a>
                        <ul>
                            <li class="<?= $data['title'] == 'Activity'   ? 'active' : '';?>"><a href="<?=URL?>admin/activity"> Activity </a></li>
                            <li class="<?= $data['title'] == 'Events'     ? 'active' : '';?>"><a href="<?=URL?>admin/events"> Events </a></li>
                            <li class="<?= $data['title'] == 'Students'   ? 'active' : '';?>"><a href="<?=URL?>admin/students"> Students </a></li>
                            <li class="<?= $data['title'] == 'Section'    ? 'active' : '';?>"><a href="<?=URL?>admin/section"> Section </a></li>
                            <li class="<?= $data['title'] == 'Subjects'   ? 'active' : '';?>"><a href="<?=URL?>admin/subjects"> Subjects </a></li>
                            <li class="<?= $data['title'] == 'Teachers'   ? 'active' : '';?>"><a href="<?=URL?>admin/teachers"> Teachers </a></li>
                            <li class="<?= $data['title'] == 'Parents'    ? 'active' : '';?>"><a href="<?=URL?>admin/parents"> Parents </a></li>
                            <li class="<?= $data['title'] == 'Accounts'   ? 'active' : '';?>"><a href="<?=URL?>admin/accounts"> Accounts </a></li>
                            <li class="<?= $data['title'] == 'Violations' ? 'active' : '';?>"><a href="<?=URL?>admin/violations"> Violations </a></li>
                        </ul>
                    </li>
                    <!-- /main -->

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->
