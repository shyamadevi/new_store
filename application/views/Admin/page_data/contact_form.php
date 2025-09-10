<main class="main-content">
  <div class="container-fluid p-5 mt-5">
    <div class="container">
      <div class="card shadow border-0 rounded-4">
        <div class="card-header">
          <h5 class="mb-0"><i class="fas fa-image me-2"></i><?= !empty($edit_data) ? 'Edit Contact' : 'Add Contact' ?></h5>
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
                <label class="form-label fw-semibold">Mobile</label>
                <input type="number" name="data_mobile" value="<?= !empty($edit_data) ? $edit_data['data_mobile'] : '' ?>" class="form-control">
              </div>

							<div class="col-md-6">
                <label class="form-label fw-semibold">Phone</label>
                <input type="number" name="data_phone" value="<?= !empty($edit_data) ? $edit_data['data_phone'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Toll Free</label>
                <input type="text" name="data_toll_free" value="<?= !empty($edit_data) ? $edit_data['data_toll_free'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="data_email" value="<?= !empty($edit_data) ? $edit_data['data_email'] : '' ?>"  class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Address</label>
                <textarea name="data_address_street" class="form-control"><?= !empty($edit_data) ? $edit_data['data_address_street'] : '' ?></textarea>
              </div>

							 <div class="col-md-6">
                <label class="form-label fw-semibold">Location</label>
                <input type="text" name="data_address" value="<?= !empty($edit_data) ? $edit_data['data_address'] : '' ?>" class="form-control">
              </div>

							 <div class="col-md-6">
                <label class="form-label fw-semibold">Map</label>
                <input type="url" name="data_map" class="form-control" value="<?= !empty($edit_data) ? $edit_data['data_map'] : '' ?>">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Facebook</label>
                <input type="url" name="data_facebook" value="<?= !empty($edit_data) ? $edit_data['data_facebook'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Twitter</label>
                <input type="url" name="data_twitter" value="<?= !empty($edit_data) ? $edit_data['data_twitter'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Instagram</label>
                <input type="url" name="data_instagram" value="<?= !empty($edit_data) ? $edit_data['data_instagram'] : '' ?>" class="form-control">
							</div>

							<div class="col-md-6">
								<label class="form-label fw-semibold">Linkedin</label>
								<input type="url" name="data_linkedin" value="<?= !empty($edit_data) ? $edit_data['data_linkedin'] : '' ?>" class="form-control">
							</div>

							<div class="col-md-6">
                <label class="form-label fw-semibold">Whatsapp</label>
                <input type="url" name="data_whatsapp" value="<?= !empty($edit_data) ? $edit_data['data_whatsapp'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Youtube</label>
                <input type="text" name="data_youtube" value="<?= !empty($edit_data) ? $edit_data['data_youtube'] : '' ?>" class="form-control">
              </div>

              <div class="col-12 text-center">
                <button type="submit" class="btn btn-advance px-4 py-2 mt-3">
                  <i class="fas fa-plus me-1"></i> <?= !empty($edit_data) ? 'Update' : 'Add' ?> Contact
                </button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
