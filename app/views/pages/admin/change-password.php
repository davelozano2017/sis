<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Change Password</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li>Dashboard</li>
                <li>My Account</li>
                <li class="active">Change Password</li>
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
                    <input type="hidden" id="token" name="token" value="<?=$data['token']?>'">
                    <input accept="image/*" type="file" style="display:none" name="files" id="file-2" onchange="profile_picture()" class="forn-control picture logo" />
                    <label for="file-2" style="border:none;cursor: pointer;">
                        <img id='preview' style="width:250px;height:250px" src="<?= empty($data['user_info']->image) ? 'https://d2ln1xbi067hum.cloudfront.net/assets/default_user-abdf6434cda029ecd32423baac4ec238.png' : ASSETS.'/uploads/profile/'.$data['user_info']->image; ?>"  class="img-circle img-responsive">
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
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input readonly type="text" name="sname" id="name" placeholder="Name" ng-model="sname" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input readonly type="text" name="scontact" id="contact" placeholder="Name" ng-model="scontact" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input readonly ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" type="email" name="semail" placeholder="Email Address" id="email" ng-model="semail" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input readonly type="text" name="susername" placeholder="Username" id="username" ng-model="susername" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control" id="password" ng-minlength=6 ng-model="password" name="password" required password-verify="{{confirm_password}}">
                                <span ng-messages="formUpdateProfile.password.$error" ng-if="formUpdateProfile.password.$dirty">
                                    <strong ng-message="required" class="text-danger">This field is required.</strong>
                                </span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <input type="password" placeholder="Confirm Password" class="form-control" ng-model="confirm_password" name="confirm_password" id="confirm_password" required password-verify="{{password}}">
                            <span ng-messages="formUpdateProfile.confirm_password.$error" ng-if="formUpdateProfile.confirm_password.$dirty">
                                <strong ng-message="required" class="text-danger">This field is required.</strong>
                                <strong ng-show="confirm_password != password" class="text-danger">Password not matched.</strong>
                            </span>
                        </div>

                       
                    </div>

                    <div class="form-group">
                        <button type="submit" onclick="update_password()" id="btn-upload-profile" name="btn-upload-profile" ng-disabled="formUpdateProfile.$invalid"  class="btn-block btn bg-blue">Save Changes <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
    <!-- /main charts -->
