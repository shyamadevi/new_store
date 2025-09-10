<main class="main-content">
  <div class="container-fluid px-0">
    <div class="container">
      <div class="card shadow border-0 rounded-4">
        <div class="card-header">
          <h5 class="mb-0"><i class="fas fa-image me-2"></i><?= isset($edit_data) ? 'Edit Contact' : 'Add Contact' ?></h5>
        </div>

        <div class="mt-2 me-3 p-2">
          <a href="<?= base_url() ?>user_side/contact_details" class="btn btn-advance">
            <i class="fa-solid fa-arrow-left me-1"></i> Back
          </a>
        </div>

        <div class="card-body bg-light">
          <form action="<?= $form_action ?>" method="post" enctype="multipart/form-data">
            <div class="row g-4">

              <div class="col-md-6">
                <label class="form-label fw-semibold">Phone</label>
                <input type="number" name="data_phone" value="<?= isset($edit_data) ? $edit_data['data_phone'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="data_email" value="<?= isset($edit_data) ? $edit_data['data_email'] : '' ?>"  class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Address</label>
                <textarea name="data_address" class="form-control"><?= isset($edit_data) ? $edit_data['data_address'] : '' ?></textarea>
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Facebook</label>
                <input type="text" name="data_facebook" value="<?= isset($edit_data) ? $edit_data['data_facebook'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Twitter</label>
                <input type="text" name="data_twitter" value="<?= isset($edit_data) ? $edit_data['data_twitter'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Instagram</label>
                <input type="text" name="data_instagram" value="<?= isset($edit_data) ? $edit_data['data_instagram'] : '' ?>" class="form-control">
			</div>

			<div class="col-md-6">
			  <label class="form-label fw-semibold">Linkedin</label>
			  <input type="text" name="data_linkedin" value="<?= isset($edit_data) ? $edit_data['data_linkedin'] : '' ?>" class="form-control">
			</div>

			<div class="col-md-6">
                <label class="form-label fw-semibold">Whatsapp</label>
                <input type="text" name="data_whatsapp" value="<?= isset($edit_data) ? $edit_data['data_whatsapp'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Youtube</label>
                <input type="text" name="data_youtube" value="<?= isset($edit_data) ? $edit_data['data_youtube'] : '' ?>" class="form-control">
              </div>

              <div class="col-12 text-center">
                <button type="submit" class="btn btn-advance px-4 py-2 mt-3">
                  <i class="fas fa-plus me-1"></i> <?= isset($edit_data) ? 'Update' : 'Add' ?> Product
                </button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
