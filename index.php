<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>plotMarket </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/css/bootstrap.min.css">
    <!-- Google fonts - Vidaloka-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Vidaloka">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/css/bootstrap-select.min.css">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/css/owl.carousel.min.css">
    <!-- Fancy Box-->
    <link rel="stylesheet" href="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/css/jquery.fancybox.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/css/style.violet.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/img/favicon.ico">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/css/custom-fonticons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<header class="header">
    <!-- Top bar-->
    <div class="top-bar">

    </div>
    <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg p-1">
        <div class="container">
            <!-- Navbar Brand --><a href="index.html" class="navbar-brand"><!--<img src="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/img/logo.png" alt="...">-->
                <h2><small>Plot</small>Market</h2></a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span>Menu</span><i class="fa fa-bars"></i></button>
            <!-- Navbar Menu -->
            <div id="navbarcollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <!-- Search-->
                    <li class="nav-item"><a href="index.php" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item"><a href="listing.php" class="nav-link">Listings</a>
                    </li>

                    <li class="nav-item"><a href="blog.html" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">About</a>
                    </li>
                </ul><a href="/userLogin.php" class="btn navbar-btn btn-outline-primary mt-3 mt-lg-0 ml-lg-3">Login</a>
            </div>
        </div>
    </nav>
</header>
<!-- Hero Section-->
<section style="background: url('https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/img/hero-bg.jpg') no-repeat;" class="hero d-flex align-items-center">
    <div class="container">

        <h1>Let's <span class="text-primary">buy    </span> your dreams</h1>
        <p class="text-hero">Buy Land, Plot or House from many sellers</p>
        <div class="search-bar">
            <form action="#">
                <div class="row">
                    <!--<div class="form-group col-lg-4">
                        <input type="search" name="search" placeholder="What are you searching for?">
                    </div>-->
                    <div class="form-group col-lg-5">
                        <input type="text" name="location" placeholder="Location" id="location">
                        <label for="location" class="location"><i class="fa fa-dot-circle-o"></i></label>
                    </div>
                    <div class="form-group col-lg-4">
                        <select title="Categories &lt;i class=&quot;fa fa-angle-down&quot;&gt;&lt;/i&gt;" class="listing-categories">
                            <option value="small">Plot</option>
                            <option value="medium">House</option>
                            <option value="large">Villa</option>
                            <option value="x-large">FarmLand</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-3">
                        <input type="submit" value="Search" class="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Features Section-->
<section class="features bg-gray">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-4">
                <div class="icon"><i class="icon-antique-pavilion"></i></div>
                <h4 class="h5">250 Places</h4>
            </div>
            <div class="col-sm-4">
                <div class="icon"><i class="icon-calendar"></i></div>
                <h4 class="h5">300 sellers</h4>
            </div>
            <div class="col-sm-4">
                <div class="icon"><i class="icon-gallery"></i></div>
                <h4 class="h5">700 Photos</h4>
            </div>

        </div>
    </div>
</section>
<!-- Top Cities Section-->
<section class="top-listings">
    <div class="container">
        <header>
            <h2 class="has-lines"><small>Top cities</small> Our <span class="text-primary">top visited</span> cities</h2>
            <p class="lead">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </header>
        <div class="row d-flex align-items-stretch">
            <!-- Item-->
            <div class="col-lg-6"><a href="category.html">
                    <div class="item item-big">
                        <div class="image"><img src="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/img/photo-top-big.jpg" alt="..." class="img-fluid"></div>
                        <div class="info d-flex align-items-end">
                            <div class="content">
                                <h3>Los Angeles</h3>
                                <p>Lorem ipsum dolor</p>
                                <ul class="rate list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="badge">featured</div>
                    </div></a></div>
            <!-- Item-->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6"><a href="category.html">
                            <div class="item">
                                <div class="image"><img src="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/img/photo-top-1.jpg" alt="..." class="img-fluid"></div>
                                <div class="info d-flex align-items-end">
                                    <div class="content">
                                        <h3>Barcelona</h3>
                                        <ul class="rate list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div></a></div>
                    <!-- Item-->
                    <div class="col-md-6"><a href="category.html">
                            <div class="item">
                                <div class="image"><img src="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/img/photo-top-2.jpg" alt="..." class="img-fluid"></div>
                                <div class="info d-flex align-items-end">
                                    <div class="content">
                                        <h3>Hong Kong</h3>
                                        <ul class="rate list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div></a></div>
                    <!-- Item                    -->
                    <div class="col-md-6"><a href="category.html">
                            <div class="item">
                                <div class="image"><img src="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/img/photo-top-3.jpg" alt="..." class="img-fluid"></div>
                                <div class="info d-flex align-items-end">
                                    <div class="content">
                                        <h3>New York</h3>
                                        <ul class="rate list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div></a></div>
                    <!-- Item-->
                    <div class="col-md-6"><a href="category.html">
                            <div class="item">
                                <div class="image"><img src="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/img/photo-top-4.jpg" alt="..." class="img-fluid"></div>
                                <div class="info d-flex align-items-end">
                                    <div class="content">
                                        <h3>Amsterdam</h3>
                                        <ul class="rate list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div></a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><a href="category.html">
                    <div class="item">
                        <div class="image"><img src="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/img/photo-top-1.jpg" alt="..." class="img-fluid"></div>
                        <div class="info d-flex align-items-end">
                            <div class="content">
                                <h3>Barcelona</h3>
                                <ul class="rate list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div></a></div>
            <!-- Item-->
            <div class="col-md-3"><a href="category.html">
                    <div class="item">
                        <div class="image"><img src="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/img/photo-top-2.jpg" alt="..." class="img-fluid"></div>
                        <div class="info d-flex align-items-end">
                            <div class="content">
                                <h3>Hong Kong</h3>
                                <ul class="rate list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div></a></div>
            <!-- Item                    -->
            <div class="col-md-3"><a href="category.html">
                    <div class="item">
                        <div class="image"><img src="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/img/photo-top-3.jpg" alt="..." class="img-fluid"></div>
                        <div class="info d-flex align-items-end">
                            <div class="content">
                                <h3>New York</h3>
                                <ul class="rate list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div></a></div>
            <!-- Item                    -->
            <div class="col-md-3"><a href="category.html">
                    <div class="item">
                        <div class="image"><img src="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/img/photo-top-3.jpg" alt="..." class="img-fluid"></div>
                        <div class="info d-flex align-items-end">
                            <div class="content">
                                <h3>New York</h3>
                                <ul class="rate list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div></a></div>
        </div><a href="#" class="btn btn-primary has-shadow has-wide-padding">View More    </a>
    </div>
</section>
<!-- Services Section-->
<section class="services">
    <div class="container text-center">
        <header>
            <h2><small>Our Services</small> What do <span class="text-primary">plotMarket</span> provide</h2>
            <p class="lead col-md-10 mx-auto">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores </p>
        </header>
        <div class="row">
            <!-- Item-->
            <div class="item col-lg-4">
                <div class="icon"><i class="icon-map"></i></div>
                <div class="text">
                    <h3 class="h4">Amazing Local Places</h3>
                    <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                </div>
            </div>
            <!-- Item-->
            <div class="item col-lg-4">
                <div class="icon"><i class="icon-cityscape"></i></div>
                <div class="text">
                    <h3 class="h4">Many Cities</h3>
                    <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                </div>
            </div>
            <!-- Item-->
            <div class="item col-lg-4">
                <div class="icon"><i class="icon-script"></i></div>
                <div class="text">
                    <h3 class="h4">Many sellers</h3>
                    <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Page Footer-->
<footer class="main-footer p-0">

    <div class="copyrights text-center m-0">
        <div class="row">
            <div class="col-sm-6">
                <p>&copy; <?php echo date("Y")?> <span class="text-primary">PlotMarket</span> All Rights Reserved.</p>
            </div>
            <div class="col-sm-6 text-right">
                <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
        </div>

    </div>
</footer>
<!-- Javascript files-->
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"> </script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.cookie.js"> </script>
<script src="/js/bootstrap-select.min.js"></script>
<script src="https://d32d8xzgnjxuvk.cloudfront.net/places/1-0/js/owl.carousel.min.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>
<script src="/js/front.js"></script>
</body>
</html>