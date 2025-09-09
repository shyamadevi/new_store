<link rel="stylesheet" href="<?= base_url() ?>user_assets/css/profile.css">
<div class="container py-4 mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-10 mt-5">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <div class="row g-4">
                        <!-- Left Section -->
                        <div class="col-md-4 text-center border-end profile-modal-body">
                            <?php if(!empty($userdata['user_profile_picture'])){ ?>
                                <img src="<?= base_url($userdata['user_profile_picture']) ?>" alt="User Photo">
                            <?php } else { ?>
                                <img src="<?= base_url('user_assets/img/profile/default.jpg') ?>" alt="Default User Photo" title="Default User Photo">
                            <?php } ?>

                            <h4 class="fw-bold text-capitalize"><?= $userdata['user_name'] ?></h4>
                            <p>User</p>
                            <div class="d-flex justify-content-center gap-2 mt-2">
                                <a href="javascript:void(0)" id="showUserOverview" class="btn btn-outline-success btn-sm px-3">Overview</a>
                                <a href="javascript:void(0)" id="showUserEdit" class="btn btn-success btn-sm px-3">Edit</a>
                            </div>
                            <a href="<?=base_url()?>users/logout"  class="btn btn-outline-dark btn-sm px-3 my-2">Logout</a>
                        </div>

                        <!-- Right Section -->
                        <div class="col-md-8">
                            <!-- Tabs -->
                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tabUserOverview" href="#">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tabUserEdit" href="#">Edit Profile</a>
                                </li>
                            </ul>

                            <!-- Overview Content -->
                            <div id="userOverviewSection">
                                <h5 class="text-success mb-3">Profile Details</h5>
                                <table class="table table-sm table-borderless">
                                    <tr><th>Name:</th><td><?= $userdata['user_name'] ?></td></tr>
                                    <tr><th>Email:</th><td><?= $userdata['user_email'] ?></td></tr>
                                    <tr><th>Address:</th><td><?= $userdata['user_address'] ?></td></tr>
                                    <tr><th>Phone:</th><td><?= $userdata['user_phone'] ?></td></tr>
                                </table>
                            </div>

                            <!-- Edit Form -->
                            <div id="userEditSection" style="display:none;" class="user-profile-edit-form">
                                <h5 class="text-secondary mb-3">Edit Your Profile</h5>
                                <form action="<?= base_url('Users/update_profile') ?>" method="post" enctype="multipart/form-data">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="user_name" value="<?= $userdata['user_name'] ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="user_email" value="<?= $userdata['user_email'] ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="user_password" placeholder="Leave blank to keep current" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Phone</label>
                                            <input type="text" name="user_phone" value="<?= $userdata['user_phone'] ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Profile Picture</label>
                                            <input type="file" name="user_profile_picture" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Address</label>
                                            <textarea name="user_address" class="form-control" rows="2"><?= $userdata['user_address'] ?></textarea>
                                        </div>
                                        <div class="col-md-12 text-center mt-3">
                                            <button type="submit" class="btn btn-success px-4">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- End Right Section -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Toggle Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#showUserOverview, #tabUserOverview').on('click', function() {
        $('#userEditSection').slideUp(300);
        $('#userOverviewSection').slideDown(300);
        $('#tabUserOverview').addClass('active');
        $('#tabUserEdit').removeClass('active');
    });
    $('#showUserEdit, #tabUserEdit').on('click', function() {
        $('#userOverviewSection').slideUp(300);
        $('#userEditSection').slideDown(300);
        $('#tabUserEdit').addClass('active');
        $('#tabUserOverview').removeClass('active');
    });
});
</script>
