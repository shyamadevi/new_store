<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

		<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="<?= base_url() ?>user_assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>user_assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



    <link href="<?= base_url() ?>user_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>user_assets/css/nav.css" rel="stylesheet">
    <link href="<?= base_url() ?>user_assets/css/index.css" rel="stylesheet">


    <link href="<?= base_url() ?>user_assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>user_assets/css/cart.css" rel="stylesheet">
    <link href="<?= base_url() ?>user_assets/css/checkout.css" rel="stylesheet">

    
</head>

<body>


    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>




    <div class="container-fluid fixed-top">
        <div class="container topbar top-nav d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white"><?= htmlspecialchars($contactdata['data_address']) ?></a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="mailto:<?= htmlspecialchars($contactdata['data_email']) ?>" class="text-white"><?= htmlspecialchars($contactdata['data_email']) ?></a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="<?= base_url() ?>user/privacy" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                    <a href="<?= base_url() ?>user/term" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                    <a href="<?= base_url() ?>user/sales" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="<?= base_url() ?>user/index" class="navbar-brand">
                    <h1 class="text-primary display-6">New Store</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="<?= base_url() ?>user/index" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">Shop</a>
                        <a href="#" class="nav-item nav-link">Shop Detail</a>
                        <a href="<?= base_url('user/sub') ?>" class="nav-item nav-link">Subscription</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="<?= base_url() ?>user/cart" class="dropdown-item">Cart</a>
                                <a href="<?= base_url() ?>user/checkout" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                        <a href="<?= base_url() ?>user/contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="d-flex m-3 me-0">
                        <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                        <a href="#" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x"></i>
                            <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                        </a>
                        <a href="#" class="my-auto">
                            <i class="fas fa-user fa-2x"></i>
													</a>
													<?php if ($this->session->userdata('users2_id')) { ?>
														<a href="<?= base_url('users/profile') ?>" class="my-auto">
															<i class="fas fa-user"></i>
														</a>
														<a href="<?= base_url('users/logout') ?>" class="btn btn-danger">Logout</a>
													<?php } else { ?>
															<a class="my-auto" data-bs-toggle="modal" data-bs-target="#authModal">
																<i class="fas fa-user"></i>
															</a>
													<?php } ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    

   
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

  <div class="modal fade" id="authModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h5 class="modal-title">Welcome</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">

          <div id="loginForm">
            <h4 class="text-center mb-3">Login</h4>
            <form method="post">
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-grocery w-100">Login</button>
              <p class="text-center mt-3">Don’t have an account?
                <span class="text-primary" style="cursor:pointer;" onclick="toggleForm('signupForm')">Sign Up</span>
              </p>
            </form>
          </div>
 
        
          <div id="signupForm" style="display:none;">
            <h4 class="text-center mb-3">Sign Up</h4>
            <form method="post" enctype="multipart/form-data">
              <div class="mb-2">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="mb-2">
                <label class="form-label">Phone</label>
                <input type="number" name="phone" class="form-control" required>
              </div>
              <div class="mb-2">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="mb-2">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>
							<div class="mb-2">
                <label class="form-label">Profile Picture</label>
                <input type="file" accept="image/*" name="profile_picture" class="form-control">
              </div>
              <div class="mb-2">
                <label class="form-label">Address</label>
                <textarea name="address" class="form-control" required></textarea>
              </div>
              <button type="submit" class="btn btn-grocery w-100">Sign Up</button>
              <p class="text-center mt-3">Already have an account?
                <span class="text-primary" style="cursor:pointer;" onclick="toggleForm('loginForm')">Login</span>
              </p>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>


  <script>
    function toggleForm(formId) {
      $("#loginForm, #signupForm").hide();
      $("#" + formId).show();
    }


    $("#signupForm form").on("submit", function(e) {
      e.preventDefault();
      $.ajax({
        url: "<?= base_url('users/signup') ?>",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(res) {
          if (res.status == "success") {
            alert(res.message);
            toggleForm('loginForm');
          } else {
            alert(res.message);
          }
        }
      });
    });


    $("#loginForm form").on("submit", function(e) {
      e.preventDefault();
      $.ajax({
        url: "<?= base_url('users/login') ?>",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(res) {
          if (res.status == "success") {
            location.reload(); 
          } else {
            alert(res.message);
          }
        }
      });
    });
  </script> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">


  <title>New Store</title>


  <!-- <link rel="shortcut icon" type="image/png" href="<?= base_url() ?>"> -->


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url() ?>assetss/css/all.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assetss/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assetss/css/owl.carousel.css">

  <link rel="stylesheet" href="<?= base_url() ?>assetss/css/magnific-popup.css">

  <link rel="stylesheet" href="<?= base_url() ?>assetss/css/animate.css">

  <link rel="stylesheet" href="<?= base_url() ?>assetss/css/meanmenu.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assetss/css/main.css">

  <link rel="stylesheet" href="<?= base_url() ?>assetss/css/responsive.css">

</head>

<body>


  <div class="loader">
    <div class="loader-inner">
      <div class="circle"></div>
    </div>
  </div>



  <div class="top-header-area" id="sticker">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
          <div class="main-menu-wrap">

            <div class="site-logo">
              <a href="index.html">
                <!-- <img src="<?= base_url() ?>assetss" alt=""> -->
                <h3 class="site-title text-white">New Store</h3>
              </a>
            </div>



            <nav class="main-menu">
              <ul>
                <li class="current-list-item"><a href="<?= base_url() ?>user/index">Home</a>
                </li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Pages</a>
                  <ul class="sub-menu">
                    <li><a href="<?= base_url() ?>user/privacy">Privacy Policy</a></li>
                    <li><a href="<?= base_url() ?>user/terms">Terms of Use</a></li>
                    <li><a href="<?= base_url() ?>user/sales">Sales and Refunds</a></li>
                  </ul>
                </li>
                <li><a href="<?= base_url('user/sub') ?>">Subscription</a>
                </li>
                <li><a href="<?= base_url() ?>user/contact">Contact</a></li>
                <li><a href="<?= base_url() ?>user/shop">Shop</a>
                  <ul class="sub-menu">
                    <li><a href="<?= base_url() ?>user/shop">Shop</a></li>
                    <li><a href="<?= base_url() ?>user/checkout">Check Out</a></li>
                    <li><a href="<?= base_url() ?>user/single-product">Single Product</a></li>
                    <li><a href="<?= base_url() ?>user/cart">Cart</a></li>
                  </ul>
                </li>
                <li>
                  <div class="header-icons">
                    <a class="shopping-cart" href="<?= base_url() ?>user/cart"><i class="fas fa-shopping-cart"></i></a>
                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <?php if ($this->session->userdata('users2_id')) { ?>
                      <a href="<?= base_url('users/profile') ?>" class="my-auto">
                        <i class="fas fa-user"></i>
                      </a>
                      <a href="<?= base_url('users/logout') ?>" class="btn btn-danger">Logout</a>
                    <?php } else { ?>
                      <a class="my-auto" data-bs-toggle="modal" data-bs-target="#authModal">
                        <i class="fas fa-user"></i>
                      </a>
                    <?php } ?>
                  </div>
                </li>
              </ul>
            </nav>
            <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
            <div class="mobile-menu"></div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="search-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="close-btn"><i class="fas fa-window-close"></i></span>
          <div class="search-bar">
            <div class="search-bar-tablecell">
              <h3>Search For:</h3>
              <input type="text" placeholder="Keywords">
              <button type="submit">Search <i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="authModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h5 class="modal-title">Welcome</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">

          <div id="loginForm">
            <h4 class="text-center mb-3">Login</h4>
            <form method="post">
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-grocery w-100">Login</button>
              <p class="text-center mt-3">Don’t have an account?
                <span class="text-primary" style="cursor:pointer;" onclick="toggleForm('signupForm')">Sign Up</span>
              </p>
            </form>
          </div>


          <div id="signupForm" style="display:none;">
            <h4 class="text-center mb-3">Sign Up</h4>
            <form method="post" enctype="multipart/form-data">
              <div class="mb-2">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="mb-2">
                <label class="form-label">Phone</label>
                <input type="number" name="phone" class="form-control" required>
              </div>
              <div class="mb-2">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="mb-2">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <div class="mb-2">
                <label class="form-label">Profile Picture</label>
                <input type="file" accept="image/*" name="profile_picture" class="form-control">
              </div>
              <div class="mb-2">
                <label class="form-label">Address</label>
                <textarea name="address" class="form-control" required></textarea>
              </div>
              <button type="submit" class="btn btn-grocery w-100">Sign Up</button>
              <p class="text-center mt-3">Already have an account?
                <span class="text-primary" style="cursor:pointer;" onclick="toggleForm('loginForm')">Login</span>
              </p>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script>
    function toggleForm(formId) {
      $("#loginForm, #signupForm").hide();
      $("#" + formId).show();
    }


    $("#signupForm form").on("submit", function(e) {
      e.preventDefault();
      $.ajax({
        url: "<?= base_url('users/signup') ?>",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(res) {
          if (res.status == "success") {
            alert(res.message);
            toggleForm('loginForm');
          } else {
            alert(res.message);
          }
        }
      });
    });


    $("#loginForm form").on("submit", function(e) {
      e.preventDefault();
      $.ajax({
        url: "<?= base_url('users/login') ?>",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(res) {
          if (res.status == "success") {
            location.reload();
          } else {
            alert(res.message);
          }
        }
      });
    });
  </script>