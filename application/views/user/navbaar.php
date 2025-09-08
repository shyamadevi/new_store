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
  <link rel="stylesheet" href="<?=base_url()?>admin_assets/css/nav.css">
  <link rel="stylesheet" href="<?=base_url()?>admin_assets/css/index-slider.css">
  <link rel="stylesheet" href="<?=base_url()?>admin_assets/css/index-products.css">

  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f8f9fa;
    }

  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url() ?>">New Store</a>
      <div class="d-flex">
        <?php if ($this->session->userdata('users2_id')) { ?>
          <a href="<?= base_url('user/profile') ?>" class="btn btn-light me-2">
            <i class="fa fa-user"></i> Profile
          </a>
          <a href="<?= base_url('user_login/logout') ?>" class="btn btn-danger">Logout</a>
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
            <form method="post">
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
        url: "<?= base_url('user_login/signup') ?>",
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
        url: "<?= base_url('user_login/login') ?>",
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
