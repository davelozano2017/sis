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
                        <h3 class="no-margin"><?=$data['my_students']->num_rows?></h3>
                        <span class="text-uppercase text-size-mini">My Students</span>
                    </div>

                    <div class="media-right media-middle">
                        <i class="icon-users icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- /widget with rounded icon -->
    </div>
    <!-- /main charts -->


<div class="panel-group panel-group-control content-group-lg">
    <?php foreach($data['events'] as $row_events) { ?> 
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title">
                    <a data-toggle="collapse" href="#events-<?=$row_events['events_id']?>"><?=$row_events['title']?> | <?= date(DATE_FORMAT,strtotime($row_events['start']))?> - <?= date(DATE_FORMAT,strtotime($row_events['end']))?></a>
                </h6>
            </div>
            <div id="events-<?=$row_events['events_id']?>" class="panel-collapse in">
                <div class="panel-body">
                    <label style="text-align:justify"><?=$row_events['description']?></label>
                </div>
            </div>
        </div>
    <?php } ?>
</div>