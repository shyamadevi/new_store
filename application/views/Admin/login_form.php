<main class="main-content">
  <div class="container-fluid p-5 mt-5">
    <div class="container">
      <div class="card shadow border-0 rounded-4">
        <div class="card-header">
          <h5 class="mb-0"><i class="fas fa-image me-2"></i><?= !empty($edit_data) ? 'Edit' : 'Add' ?> Login Form</h5>
        </div>

        <div class="mt-2 me-3 p-2">
          <a href="<?= base_url() ?>admin/login_info" class="btn btn-advance">
            <i class="fa-solid fa-arrow-left me-1"></i> Back
          </a>
        </div>

        <div class="card-body bg-light">
					<form action="<?= $form_action ?>" method="post" enctype="multipart/form-data">
						<div class="row g-4">

							<div class="col-md-6">
								<label class="form-label fw-semibold">Heading</label>
                <input type="text" name="form_heading" value="<?= !empty($edit_data) ? $edit_data['form_heading'] : '' ?>" class="form-control">
              </div>

							<div class="col-md-6">
                <label class="form-label fw-semibold">Description</label>
                <input type="text" name="form_desc" value="<?= !empty($edit_data) ? $edit_data['form_desc'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="form_email" value="<?= !empty($edit_data) ? $edit_data['form_email'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Role</label>
                <input type="text" name="role" value="<?= !empty($edit_data) ? $edit_data['role'] : '' ?>"  class="form-control">
              </div>

	              <div class="col-12 text-center">
                <button type="submit" class="btn btn-advance px-4 py-2 mt-3">
                  <i class="fas fa-plus me-1"></i> <?= !empty($edit_data) ? 'Update' : 'Add' ?> Login Info
                </button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
