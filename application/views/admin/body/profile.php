<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
   body {
      background: #eef2f7;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
   }
   .profile-card {
      border: none;
      border-radius: 18px;
      background: #fff;
      box-shadow: 0 6px 18px rgba(0,0,0,0.06);
      overflow: hidden;
      transition: 0.3s ease-in-out;
   }
   .profile-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 28px rgba(0,0,0,0.12);
   }
   .profile-header {
      background: linear-gradient(135deg, #4e73df, #6f42c1, #20c997);
      padding: 45px 20px;
      text-align: center;
      color: #fff;
   }
   .profile-header img {
      width: 130px;
      height: 130px;
      object-fit: cover;
      border-radius: 50%;
      border: 5px solid #fff;
      margin-bottom: 15px;
      background: #f8f9fa;
      transition: 0.3s;
   }
   .profile-header img:hover { transform: scale(1.05); }
   .profile-header h3 { font-weight: 700; margin-bottom: 5px; }
   .profile-body { padding: 30px; }
   .info-row {
      display: flex; align-items: center; margin-bottom: 15px;
      border-bottom: 1px solid #f1f1f1; padding-bottom: 10px;
      transition: 0.2s;
   }
   .info-row:hover { background: #f8f9fa; border-radius: 8px; }
   .info-icon {
      width: 42px; height: 42px; border-radius: 50%;
      background: #f1f3f5; display: flex; align-items: center;
      justify-content: center; color: #4e73df;
      margin-right: 15px; font-size: 18px; transition: 0.2s;
   }
   .info-row:hover .info-icon { background: #4e73df; color: #fff; }
   .info-text h6 { margin: 0; font-size: 14px; color: #6c757d; font-weight: 600; }
   .info-text p { margin: 0; font-size: 15px; font-weight: 500; color: #212529; }
   .btn-edit {
      background: linear-gradient(135deg, #007bff, #6610f2);
      color: #fff; border-radius: 30px; padding: 10px 25px;
      font-weight: 600; transition: 0.3s; border: none;
   }
   .btn-edit:hover {
      background: linear-gradient(135deg, #0056b3, #4b0082);
      transform: scale(1.05); color: #fff;
   }
   /* Active Tab Styling */
.nav-tabs .nav-link.active {
  color: #fff !important;
  background-color: #2d7a36 !important;
  border-radius: 8px 8px 0 0;
  font-weight: 600;
}

/* Normal Tab Styling */
.nav-tabs .nav-link {
  color: #495057;
  border: none;
  font-weight: 500;
  transition: 0.3s;
}

.nav-tabs .nav-link:hover {
  color: #2d7a36;
  background-color: #f1f3f5;
  border-radius: 8px 8px 0 0;
}

  </style>
</head>
<body>

<div class="container py-5">
  <div class="col-lg-7 mx-auto mt-5">
    <div class="card profile-card">
      <div class="profile-header">
        <?php if(!empty($admin['admin_pic'])): ?>
          <img src="<?= base_url($admin['admin_pic']); ?>" alt="Admin Pic" title="<?=$admin['admin_name']?>">
        <?php else: ?>
          <img src="<?= base_url('user_assets/img/profile/default.jpg'); ?>" alt="Default Pic" title="Default Picture">
        <?php endif; ?>
        <h3><?= ucfirst($admin['admin_name']); ?></h3>
        <p><i class="fas fa-envelope me-2"></i><?= $admin['admin_email']; ?></p>
      </div>

      <div class="profile-body">
        <!-- Nav Tabs -->
        <ul class="nav nav-tabs mb-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="tabAdminOverview" href="#">Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tabAdminEdit" href="#">Edit Profile</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" id="" href="<?=base_url()?>admins/admin_logout">Logout</a>
          </li>
        </ul>

        <!-- Overview Section -->
        <div id="adminOverviewSection">
          <div class="info-row">
            <div class="info-icon"><i class="fas fa-id-badge"></i></div>
            <div class="info-text">
              <h6>Admin ID</h6>
              <p><?= $admin['admin_id']; ?></p>
            </div>
          </div>

          <div class="info-row">
            <div class="info-icon"><i class="fas fa-phone"></i></div>
            <div class="info-text">
              <h6>Phone</h6>
              <p><?= $admin['admin_phone']; ?></p>
            </div>
          </div>

		  <div class="info-row">
            <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="info-text">
              <h6>Address</h6>
              <p><?= $admin['admin_address']; ?></p>
            </div>
          </div>

          <div class="info-row">
            <div class="info-icon"><i class="fas fa-user-shield"></i></div>
            <div class="info-text">
              <h6>Status</h6>
              <p><span class="badge bg-success"><?= $admin['admin_status']; ?></span></p>
            </div>
          </div>

          <div class="info-row">
            <div class="info-icon"><i class="fas fa-clock"></i></div>
            <div class="info-text">
              <h6>Signed At</h6>
              <p><?= $admin['admin_sign']; ?></p>
            </div>
          </div>

          <div class="info-row">
            <div class="info-icon"><i class="fas fa-pen"></i></div>
            <div class="info-text">
              <h6>Last Update</h6>
              <p><?= $admin['admin_update']; ?></p>
            </div>
          </div>
        </div>

        <!-- Edit Section -->
        <div id="adminEditSection" style="display:none;">
          <form action="<?= base_url('admins/update_profile') ?>" method="post" enctype="multipart/form-data">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" name="admin_name" value="<?= $admin['admin_name']; ?>" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone</label>
                <input type="number" name="admin_phone" value="<?= $admin['admin_phone']; ?>" class="form-control">
              </div>
			   <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="admin_email" value="<?= $admin['admin_email']; ?>" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Password</label>
                <input type="password" name="admin_password" placeholder="Leave blank to keep current" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Profile Picture</label>
                <input type="file" name="admin_pic" class="form-control">
              </div>
              <div class="col-md-12">
                <label class="form-label">Address</label>
                <textarea name="admin_address" class="form-control" rows="2"><?= $admin['admin_address']; ?></textarea>
              </div>
              <div class="col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-edit px-4" onclick="return confirm('Are you sure you want to update your profile?');">Update Profile</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- jQuery for toggle -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#tabAdminOverview').on('click', function() {
        $('#adminEditSection').slideUp(300);
        $('#adminOverviewSection').slideDown(300);
        $('#tabAdminOverview').addClass('active');
        $('#tabAdminEdit').removeClass('active');
    });
    $('#tabAdminEdit').on('click', function() {
        $('#adminOverviewSection').slideUp(300);
        $('#adminEditSection').slideDown(300);
        $('#tabAdminEdit').addClass('active');
        $('#tabAdminOverview').removeClass('active');
    });
});
</script>

</body>
</html>
