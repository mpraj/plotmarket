<?php include_once('template/header.php') ?>

<?php echo "<script>
$(document).ready(function () {
            $('#theme-stylesheet').attr('href', '/css/style.violet.css');
});
    </script>"; ?>

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
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item"><a href="category.html" class="nav-link active">Listings</a>
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

<?php include_once('template/js_files.php') ?>
<?php include_once('template/footer.php') ?>