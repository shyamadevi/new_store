<!DOCTYPE html>
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

		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="<?= base_url() ?>user_assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>user_assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



    <link href="<?= base_url() ?>user_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>user_assets/css/nav.css" rel="stylesheet">
    <link href="<?= base_url() ?>user_assets/css/index.css" rel="stylesheet">


    <link href="<?= base_url() ?>user_assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>user_assets/css/cart.css" rel="stylesheet">
    <link href="<?= base_url() ?>user_assets/css/checkout.css" rel="stylesheet">

    <style>
        .top-nav {
            /* background: linear-gradient(to right, #6A1B9A 0%, #AB47BC 15%, #AB47BC 85%, #F48FB1 100%); */
            /* background: linear-gradient(to right, #1E88E5 0%, #42A5F5 15%, #42A5F5 85%, #26C6DA 100%); */
            /* background: linear-gradient(to right, #FB8C00 0%, #FFB74D 15%, #FFB74D 85%, #FFE0B2 100%); */
            /* background: linear-gradient(to right, #0D47A1 0%, #5C6BC0 15%, #5C6BC0 85%, #B39DDB 100%); */
            /* background: linear-gradient(to right, #00796B 0%, #00ACC1 15%, #00ACC1 85%, #0288D1 100%); */
            /* background: linear-gradient(to right, #E53935 0%, #FB8C00 15%, #FB8C00 85%, #FFEB3B 100%); */
            /* background: linear-gradient(to right, #EC407A 0%, #FF6F61 15%, #FF6F61 85%, #FFCC80 100%); */
            /* background: linear-gradient(to right, #2E7D32 0%, #9E9D24 15%, #9E9D24 85%, #CDDC39 100%); */
            /* background: linear-gradient(to right, #3949AB 0%, #1E88E5 15%, #1E88E5 85%, #90CAF9 100%); */
            /* background: linear-gradient(to right, #827717 0%, #FDD835 15%, #FDD835 85%, #FFF59D 100%); */
            /* background: linear-gradient(to right, #1565C0 0%, #1976D2 15%, #1976D2 85%, #81D4FA 100%); */
            background: linear-gradient(to right, #EC407A 0%, #7B1FA2 15%, #7B1FA2 85%, #CE93D8 100%);
            /* background: linear-gradient(to right, #E65100 0%, #FB8C00 15%, #FB8C00 85%, #FFE0B2 100%); */
            /* background: linear-gradient(to right, #00BCD4 0%, #0097A7 15%, #0097A7 85%, #1976D2 100%); */
            /* background: linear-gradient(to right, #7B1FA2 0%, #EC407A 15%, #EC407A 85%, #FF7043 100%); */

        }
    </style>
</head>

<body>


    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>



    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar top-nav d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white"><?= htmlspecialchars($contactdata['data_address']) ?></a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white"><?= htmlspecialchars($contactdata['data_email']) ?></a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="<?=base_url()?>user/privacy" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                    <a href="<?=base_url()?>user/term" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                    <a href="<?=base_url()?>user/sales" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
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
                                <a href="<?= base_url()?>user/cart" class="dropdown-item">Cart</a>
                                <a href="<?= base_url()?>user/checkout" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                        <a href="<?=base_url()?>/user/contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="d-flex m-3 me-0">
                        <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                        <a href="#" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x"></i>
                            <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                        </a>
                        <!-- <a href="#" class="my-auto">
                            <i class="fas fa-user fa-2x"></i>
													</a> -->
													<?php if ($this->session->userdata('users2_id')) { ?>
														<a href="<?= base_url('users/profile') ?>" class="my-auto">
															<i class="fas fa-user"></i>
														</a>
														<!-- <a href="<?= base_url('users/logout') ?>" class="btn btn-danger">Logout</a> -->
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
    <!-- Navbar End -->

    <!-- Modal Search Start -->
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
    <!-- Modal Search End -->

	<!-- Auth Modal -->
  <div class="modal fade" id="authModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h5 class="modal-title">Welcome</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">

          <!-- Login Form -->
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

          <!-- Signup Form -->
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

  <!-- JS -->
  <script>
    function toggleForm(formId) {
      $("#loginForm, #signupForm").hide();
      $("#" + formId).show();
    }

    // Signup AJAX
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
            toggleForm('loginForm'); // switch to login
          } else {
            alert(res.message);
          }
        }
      });
    });

    // Login AJAX
    $("#loginForm form").on("submit", function(e) {
      e.preventDefault();
      $.ajax({
        url: "<?= base_url('users/login') ?>",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(res) {
          if (res.status == "success") {
            location.reload(); // reload page
          } else {
            alert(res.message);
          }
        }
      });
    });
  </script>
