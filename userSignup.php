<?php include_once('template/header.php') ?>

<div class="page">
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <!-- Form Elements -->
            <div class="col-lg-6">
                <div class="card">

                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Register</h3>
                    </div>
                    <div class="card-body">
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
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="dropdown-item active px-5 py-2" data-toggle="tab" href="#buyer">
                                        Buyer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item px-5 py-2" data-toggle="tab" href="#seller">
                                        Seller</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <!--<div class="tab-content">
                                <div class="tab-pane active container" id="buyer">hiii</div>
                                <div class="tab-pane container" id="seller">hello</div>
                            </div>-->
                        </div>

                        <div class="tab-content">
                        <form class="form-horizontal tab-pane active container" id="buyer">
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Normal</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Help text</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"><small class="help-block-none">A block of help text that breaks onto a new line and may extend beyond one line.</small>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Placeholder</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="placeholder" class="form-control">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Disabled</label>
                                <div class="col-sm-9">
                                    <input type="text" disabled="" placeholder="Disabled input here..." class="form-control">
                                </div>
                            </div>

                            <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-sm-6 offset-sm-3">
                                    <button type="submit" class="btn btn-secondary">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Signup</button>
                                </div>
                            </div>
                        </form>
                            <form class="form-horizontal tab-pane container" id="seller">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Normal text</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Help </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"><small class="help-block-none">A block of help text that breaks onto a new line and may extend beyond one line.</small>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Placeholder form</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="placeholder" class="form-control">
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Disabled</label>
                                    <div class="col-sm-9">
                                        <input type="text" disabled="" placeholder="Disabled input here..." class="form-control">
                                    </div>
                                </div>

                                <div class="line"></div>
                                <div class="form-group row">
                                    <div class="col-sm-6 offset-sm-3">
                                        <button type="submit" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Signup</button>
                                    </div>
                                </div>
                            </form>
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
