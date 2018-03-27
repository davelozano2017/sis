<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Profile</h4>
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
                <li>My Account</li>
                <li class="active">Profile</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">

    <!-- Main charts -->
    <div class="row">

    <div class="col-sm-3">
        <div class="panel panel-flat">
            <div class="panel-body">
                <form method="POST" enctype="multipart/form-data" name="formProfile" id="formProfile">
                    <input type="hidden" id="token" name="token" value="<?=TOKEN?>'">
                    <input accept="image/*" type="file" style="display:none" name="files" id="file-2" onchange="profile_picture()" class="forn-control picture logo" />
                    <label for="file-2" style="border:none;cursor: pointer;">
                        <img id='preview' style="width:100%;height:100%;" src="<?= empty($data['user_info']->image) ? 'https://d2ln1xbi067hum.cloudfront.net/assets/default_user-abdf6434cda029ecd32423baac4ec238.png' : ASSETS.'/uploads/profile/'.$data['user_info']->image; ?>"  class="img-circle img-responsive">
                    </label>
                </form>
            </div>
        </div>
    </div>

    <div class="col-sm-9">
        <div class="panel panel-flat">
            <div class="panel-body">
                <form name="formUpdateProfile" id="formUpdateProfile" method="POST" novalidate>
                <input type="hidden" id="token" name="token" value="<?=TOKEN?>'">
                    <div class="form-group">
                        <input type="text" name="sname" id="name" placeholder="Name" ng-model="sname" class="form-control" required>
                        <span ng-messages="formUpdateProfile.sname.$error" ng-if="formUpdateProfile.sname.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text"placeholder="Contact" name="scontact" id="contact" ng-model="scontact" class="form-control" required >
                        <span ng-messages="formUpdateProfile.scontact.$error" ng-if="formUpdateProfile.scontact.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <input ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" type="email" name="semail" placeholder="Email Address" id="email" ng-model="semail" class="form-control" required>
                        <span ng-messages="formUpdateProfile.semail.$error" ng-if="formUpdateProfile.semail.$dirty">
                            <strong ng-message="pattern" class="text-danger">Please type valid email address.</strong>
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <select name="gender" id="gender" class="form-control">
                            <option value="<?=$data['user_info']->gender?>" selected><?=$data['user_info']->gender?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" name="educational_baclground" placeholder="Educational Background" id="educational_baclground" value="<?=$data['user_info']->educational_background?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="susername" placeholder="Username" id="username" ng-model="susername" class="form-control" required>
                        <span ng-messages="formUpdateProfile.susername.$error" ng-if="formUpdateProfile.susername.$dirty">
                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <button type="submit" onclick="update_profile()" id="btn-upload-profile" name="btn-upload-profile" ng-disabled="formUpdateProfile.$invalid"  class="btn-block btn bg-blue">Save Changes <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
    <!-- /main charts -->
