<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Dashboard</h4>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><span>School Year : <?=$data['school_year']->school_year?></span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li class="active">Dashboard</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">

    <!-- Main charts -->
    <div class="row">

        <div class="col-sm-6 col-md-4">
            <div class="panel panel-body has-bg-image">
                <div class="media no-margin">
                    <div class="media-body">
                        <h3 class="no-margin"><?=$data['students']->num_rows?></h3>
                        <span class="text-uppercase text-size-mini">Students</span>
                    </div>

                    <div class="media-right media-middle">
                        <i class="icon-users icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="panel panel-body has-bg-image">
                <div class="media no-margin">
                    <div class="media-body">
                        <h3 class="no-margin"><?=$data['sections']->num_rows?></h3>
                        <span class="text-uppercase text-size-mini">Sections</span>
                    </div>

                    <div class="media-right media-middle">
                        <i class="icon-cog5 icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="panel panel-body has-bg-image">
                <div class="media no-margin">
                    <div class="media-body">
                        <h3 class="no-margin"><?=$data['subjects']->num_rows?></h3>
                        <span class="text-uppercase text-size-mini">Subjects</span>
                    </div>

                    <div class="media-right media-middle">
                        <i class="icon-books icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /main charts -->

