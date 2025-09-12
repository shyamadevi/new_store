<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="<?= base_url('admin_assets/css/admin_profile.css'); ?>" rel="stylesheet">

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
              <p><span class="badge bg-success p-2"><?= $admin['admin_status']; ?></span></p>
            </div>
          </div>

          <div class="info-row">
            <div class="info-icon"><i class="fas fa-clock"></i></div>
            <div class="info-text">
              <h6>Signed At</h6>
              <p><?= date( "D, d M Y, h:i A", strtotime($admin['admin_sign'])); ?></p>
            </div>
          </div>

          <div class="info-row">
            <div class="info-icon"><i class="fas fa-pen"></i></div>
            <div class="info-text">
              <h6>Last Update</h6>
              <p><?= date( "D, d M Y, h:i A", strtotime($admin['admin_update'])); ?></p>
            </div>
          </div>
        </div>

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
