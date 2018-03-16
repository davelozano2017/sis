
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
                    <a href="#"><img src="https://www.schoolsinqatar.net/wp-content/plugins/wc-frontend-manager/assets/images/user.png" class="img-circle img-responsive" alt=""></a>
                    <h6><?=$data['user_info']->name?></h6>
                    <span class="text-size-small"><?=$data['user_info']->role == 0 ? 'Administrator' : (($data['user_info']->role ==  1) ? 'Teacher' : 'Student')?> </span>
                </div>
                <div class="sidebar-user-material-menu">
                    <a href="#user-nav" data-toggle="collapse"><span><?=$data['user_info']->name?></span> <i class="caret"></i></a>
                </div>
            </div>
            
            <div class="navigation-wrapper collapse" id="user-nav">
                <ul class="navigation">
                    <li><a href="#"><i class="icon-user"></i> <span>My profile</span></a></li>
                    <li><a href="#"><i class="icon-lock4"></i> <span>Change Password</span></a></li>
                    <li><a href="#"><i class="icon-switch2"></i> <span>Logout</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                <!-- "<?= $data['title'] == 'Dashboard' ? 'active':'';?>" -->
                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li><a href="index.html"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    
                    <li>
                        <a href="#"><i class="icon-list"></i> <span>Management</span></a>
                        <ul>
                            <li><a href="<?=URL?>admin/"> Student Master Lists </a></li>
                            <li><a href="<?=URL?>admin/"> Generate Form 137 </a></li>
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
                            <li><a href="<?=URL?>admin/"> Activity </a></li>
                            <li><a href="<?=URL?>admin/"> Events </a></li>
                            <li><a href="<?=URL?>admin/"> Students </a></li>
                            <li><a href="<?=URL?>admin/"> Section </a></li>
                            <li><a href="<?=URL?>admin/"> Subjects </a></li>
                            <li><a href="<?=URL?>admin/"> Teachers </a></li>
                            <li><a href="<?=URL?>admin/"> Parents </a></li>
                            <li><a href="<?=URL?>admin/"> Accounts </a></li>
                            <li><a href="<?=URL?>admin/"> Violations </a></li>
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
