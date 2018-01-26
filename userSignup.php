<?php include_once('template/header.php') ?>

<div class="page login-page">
<section class="container d-flex align-items-center">
    <div class="form-holder has-shadow">
        <div class="row">

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
            <!-- Form Elements -->
            <div class="col-lg-6 bg-white">
                <div class="form d-flex align-items-center">

                    <!--<div class="card-header d-flex align-items-center">
                        <h1><i class="fa fa-user-plus"></i>&nbsp;Register</h1>
                    </div>-->
                    <div class="content">
                    <div class="modal-header p-0 mb-4">
                        <h1><i class="fa fa-user-plus"></i> Register</h1>
                    </div>
                    <div class="content">
                        <div class="row p-4">
                            <!--<div class="col-5">
                            <div class="align-items-center nav-item">
                                <a class="active nav-link" href="#buyer" data-toggle="tab">
                                    <input type="radio" class="radio" name="signup" checked>Buyer
                                </a>
                            </div>
                            </div>
                            <label class="p-2">OR</label>
                            <div class="col-5">
                                <div class="align-items-center border nav-item">
                                    <a href="#seller" class="nav-link" data-toggle="tab">
                                        <input type="radio" class="radio" name="signup"> Seller
                                    </a>
                                </div>
                            </div>-->
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active px-5 py-2" data-toggle="tab" href="#buyer">
                                        Buyer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-5 py-2" data-toggle="tab" href="#seller">
                                        Seller</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <!--<div class="tab-content">
                                <div class="tab-pane active container" id="buyer">hiii</div>
                                <div class="tab-pane container" id="seller">hello</div>
                            </div>-->
                        </div>
                        <div class="line"></div>

                        <div class="tab-content">
                        <form class="form-horizontal tab-pane active" id="buyer" name="buyer" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Father's Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Mobile</label>
                                <div class="col-sm-9">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">+91</span></div>
                                            <input type="text" placeholder="Mobile" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" placeholder="Confirm Password" class="form-control">
                                </div>
                            </div>

                            <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-sm-6 offset-sm-3">
                                    <button type="submit" class="btn btn-primary">Signup</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>

                                </div>
                            </div>
                        </form>

                            <form class="form-horizontal tab-pane" id="seller" name="seller" method="post">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Father's Name </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">+91</span></div>
                                                <input type="text" placeholder="Mobile" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">State</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Plot Location</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sel1" class="col-sm-3 form-control-label">Type:</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="sel1">
                                            <option>Land</option>
                                            <option>Property</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Aadhaar Upload</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Confirm Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" placeholder="Confirm Password" class="form-control">
                                    </div>
                                </div>


                                <div class="line"></div>
                                <div class="form-group row">
                                    <div class="col-sm-6 offset-sm-3">
                                        <button type="submit" class="btn btn-primary">Signup</button>
                                        <button type="submit" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<?php include_once('template/js_files.php') ?>
<?php include_once('template/footer.php') ?>
</body>
</html>
