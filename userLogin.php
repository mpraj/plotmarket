<?php include_once('template/header.php') ?>
<div class="page login-page">
    <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                    <div class="info d-flex align-items-center">
                        <div class="content">
                            <div class="logo">
                                <h1><small>Plot</small>Market</h1>
                            </div>
                            <p>your Dreamland portal</p>
                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                            <div class="pb-5">
                                <div class="modal-header p-0">
                                    <h1><i class="fa fa-sign-in"></i> Login</h1>
                                </div>
                            </div>
                            <form id="login-form" method="post">
                                <div class="form-group">
                                    <input id="login-username" type="text" name="loginUsername" required="" class="input-material">
                                    <label for="login-username" class="label-material">User Name</label>
                                </div>
                                <div class="form-group">
                                    <input id="login-password" type="password" name="loginPassword" required="" class="input-material">
                                    <label for="login-password" class="label-material">Password</label>
                                </div><a id="login" href="index.html" class="btn btn-primary">Login</a>
                                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                            </form><a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="userSignup.php" class="signup">Signup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php include_once('template/js_files.php') ?>
    <?php include_once('template/footer.php') ?>
