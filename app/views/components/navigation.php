<body class="navbar-top"  ng-app="app" ng-controller="mainController">
<!-- Main navbar -->
<div class="navbar navbar-inverse navbar-fixed-top bg-green-400">
    <div class="navbar-header">
<<<<<<< HEAD
        <a class="navbar-brand" href="#"><img style="" src="<?=ASSETS?>images/logo.png" alt=""></a>
=======
        <a class="navbar-brand" href="#"><img src="<?=ASSETS?>images/logo.png" alt=""></a>
>>>>>>> 6b76edc3cbc11e7304ea03141788accafd02c3dc

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <div class="navbar-right">
            <p class="navbar-text"><?=$data['user_info']->name?>!</p>
        </div>
    </div>
</div>
<!-- /main navbar -->

