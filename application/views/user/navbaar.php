<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Store - Grocery & Milk Subscription</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- custom css  -->
  <link rel="stylesheet" href="<?=base_url()?>user_assets/css/nav.css">
  <link rel="stylesheet" href="<?=base_url()?>user_assets/css/index-slider.css">
  <link rel="stylesheet" href="<?=base_url()?>user_assets/css/index-products.css">

  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f8f9fa;
    }

<<<<<<< HEAD

    <link href="<?= base_url() ?>user_assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>user_assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



    <link href="<?= base_url() ?>user_assets/css/bootstrap.min.css" rel="stylesheet">


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
=======
  </style>
>>>>>>> fd3da01039374ece4832a1ee65451431e2dfaf1f
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url() ?>">New Store</a>
      <div class="d-flex">
        <?php if ($this->session->userdata('users2_id')) { ?>
          <a href="<?= base_url('users/profile') ?>" class="btn btn-light me-2">
            <i class="fa fa-user"></i> Profile
          </a>
          <a href="<?= base_url('users/logout') ?>" class="btn btn-danger">Logout</a>
        <?php } else { ?>
          <a class="btn btn-light fw-bold" data-bs-toggle="modal" data-bs-target="#authModal">
            <i class="fa fa-user"></i> Login
          </a>
        <?php } ?>
      </div>
    </div>
  </nav>


  <!-- Auth Modal -->
  <div class="modal fade" id="authModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h5 class="modal-title">Welcome</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
<<<<<<< HEAD
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-primary display-6">New Store</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">Shop</a>
                        <a href="#" class="nav-item nav-link">Shop Detail</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="<?= base_url()?>user/cart" class="dropdown-item">Cart</a>
                                <a href="<?= base_url()?>user/checkout" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link">Contact</a>
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
                    </div>
                </div>
            </nav>
=======
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

>>>>>>> fd3da01039374ece4832a1ee65451431e2dfaf1f
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

</body>
</html>
