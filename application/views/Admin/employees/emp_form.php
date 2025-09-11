<main class="main-content">
  <div class="container-fluid p-5 mt-5">
    <div class="container">
      <div class="card shadow border-0 rounded-4">
        <div class="card-header">
          <h5 class="mb-0"><i class="fas fa-image me-2"></i><?= !empty($edit_data) ? 'Edit' : 'Add' ?> Employee</h5>
        </div>

        <div class="mt-2 me-3 p-2">
          <a href="<?= base_url() ?>admin/employee_list" class="btn btn-advance">
            <i class="fa-solid fa-arrow-left me-1"></i> Back
          </a>
        </div>

        <div class="card-body bg-light">
          <form action="<?= $form_action ?>" method="post" enctype="multipart/form-data">
			  <div class="row g-4">

			  <div class="col-md-6">
                <label class="form-label fw-semibold">Name</label>
                <input type="text" name="employees_name" value="<?= !empty($edit_data) ? $edit_data['employees_name'] : '' ?>" class="form-control">
              </div>

			  <div class="col-md-6">
                <label class="form-label fw-semibold">Phone</label>
                <input type="number" name="employees_phone" value="<?= !empty($edit_data) ? $edit_data['employees_phone'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="employees_email" value="<?= !empty($edit_data) ? $edit_data['employees_email'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Password</label>
                <input type="text" name="employees_password" value="<?= !empty($edit_data) ? $edit_data['employees_password'] : '' ?>"  class="form-control">
              </div>

			  <div class="col-md-6">
				  <label class="form-label fw-semibold">Address</label>
				  <input type="text" name="employees_address" value="<?= !empty($edit_data) ? $edit_data['employees_address'] : '' ?>" class="form-control">
				</div>

				<div class="col-md-6">
					<label class="form-label fw-semibold">Role</label>
					<select name="employees_role" class="form-select">
						<?php foreach($roles as $role){ ?>
							<option value="<?= $role['role'] ?>" <?= !empty($edit_data) && $edit_data['employees_role'] == $role['role'] ? 'selected' : '' ?>><?= $role['role'] ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="col-md-6">
					<label class="form-label fw-semibold">Status</label>
					<select name="employees_status" class="form-select">
						<option value="Active" <?= !empty($edit_data) && $edit_data['employees_status'] == 'Active' ? 'selected' : '' ?>>Active</option>
						<option value="Leave" <?= !empty($edit_data) && $edit_data['employees_status'] == 'Leave' ? 'selected' : '' ?>>Leave</option>
						<option value="Inactive" <?= !empty($edit_data) && $edit_data['employees_status'] == 'Inactive' ? 'selected' : '' ?>>Inactive</option>
					</select>
				</div>

				<div class="col-md-6">
				  <label class="form-label fw-semibold">Picture</label>
				  <input type="file" accept="image/*" name="employees_pic" class="form-control"></input>
				  <?php if(isset($edit_data['employees_pic'])){ ?>
					  <img src="<?= !empty($edit_data) ? base_url().$edit_data['employees_pic'] : '' ?>" alt="<?= !empty($edit_data) ? $edit_data['employees_name'] : '' ?>" width="100px" class="mt-2">
				  <?php } ?>
				</div>

              <div class="col-12 text-center">
                <button type="submit" class="btn btn-advance px-4 py-2 mt-3">
                  <i class="fas fa-plus me-1"></i> <?= !empty($edit_data) ? 'Update' : 'Add' ?> Employees
                </button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
