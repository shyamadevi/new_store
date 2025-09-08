<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Panel</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://kit.fontawesome.com/b8320da100.js" crossorigin="anonymous"></script>

  <style>
    body {
      background: linear-gradient(120deg, #84fab0, #8fd3f4);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: "Poppins", sans-serif;
    }

    .login-container {
      display: flex;
      width: 100%;
      max-width: 900px;
      background: #fff;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }

    /* Left side info */
    .login-info {
      flex: 1;
      background: linear-gradient(135deg, #1d2671, #c33764);
      color: #fff;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    .login-info img {
      height: 100px;
      margin-bottom: 20px;
      border-radius: 10px;
      border: 2px solid #fff;
    }
    .login-info h2 {
      font-weight: 700;
      margin-bottom: 10px;
    }
    .login-info p {
      opacity: 0.9;
    }

    /* Right side form */
    .login-form {
      flex: 1;
      padding: 50px;
    }
    .login-form h3 {
      font-weight: 700;
      margin-bottom: 30px;
      color: #333;
    }
    .form-control, .form-select {
      border-radius: 8px;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      transition: all 0.3s ease;
    }
    .form-control:focus, .form-select:focus {
      border-color: #1d2671;
      box-shadow: 0 0 8px rgba(29,38,113,0.2);
    }
    .btn-login {
      background: linear-gradient(135deg, #1d2671, #c33764);
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 12px;
      font-weight: 600;
      transition: 0.3s;
      width: 100%;
    }
    .btn-login:hover {
      opacity: 0.9;
      transform: translateY(-2px);
    }

    @media (max-width: 767px) {
      .login-info { display: none; }
      .login-form { padding: 30px; }
    }
  </style>
</head>

<body>
  <div class="login-container">

    <!-- Left Info Section -->
    <div class="login-info" id="loginInfo">
      <?php if (!empty($formdata)) { ?>
        <img src="<?= base_url()?>admin_assets/img/logo/logo.webp">
        <h2><?= $formdata[0]['form_heading'] ?></h2>
        <p><?= $formdata[0]['form_desc'] ?></p>
        <small><i class="fa-solid fa-envelope me-2"></i><?= $formdata[0]['form_email'] ?></small>
      <?php } ?>
    </div>

    <!-- Right Form Section -->
    <div class="login-form">
      <h3 class="text-center">🔐 Secure Login</h3>
      <form action="<?= base_url() ?>admins/login_verify" method="post">

        <select name="login_op" id="login_op" class="form-select" required>
          <option value="">-- Select Role --</option>
          <?php foreach ($formdata as $row) { ?>
            <option value="<?= $row['role'] ?>"><?= $row['form_heading'] ?></option>
          <?php } ?>
        </select>

        <input type="email" name="log_email" required class="form-control" placeholder="Enter email"/>

        <input type="password" id="password" name="log_password" required class="form-control" placeholder="Enter password" onkeyup="check()">

        <button type="submit" id="loginbtn" class="btn-login" style="visibility: hidden;">Login</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function check() {
      let a = document.getElementById('password').value;
      document.getElementById('loginbtn').style = a.length > 0 ? "display:block;" : "visibility: hidden;";
    }

    const roleDetails = <?= json_encode($formdata) ?>;
    const baseUrl = "<?= base_url() ?>";

    document.addEventListener("DOMContentLoaded", function() {
      const roleSelect = document.getElementById("login_op");
      const loginInfo  = document.getElementById("loginInfo");

      roleSelect.addEventListener("change", function() {
        let selectedRole = this.value;
        let data = roleDetails.find(item => item.role === selectedRole);
        if (data) {
          loginInfo.innerHTML = `
            <img src="${baseUrl}${'admin_assets/img/logo/logo.webp'}">
            <h2>${data.form_heading}</h2>
            <p>${data.form_desc}</p>
            <small><i class="fa-solid fa-envelope me-2"></i>${data.form_email}</small>
          `;
        }
      });
    });
  </script>
</body>
</html>
