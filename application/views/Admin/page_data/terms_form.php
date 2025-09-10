<main class="main-content">
  <div class="container-fluid p-5 mt-5">
    <div class="container">
      <div class="card shadow border-0 rounded-4">
        <div class="card-header">
          <h5 class="mb-0"><i class="fas fa-image me-2"></i><?= !empty($edit_data) ? 'Edit' : 'Add' ?> Terms and Conditions</h5>
        </div>

        <div class="mt-2 me-3 p-2">
          <a href="<?= base_url() ?>user_side/terms" class="btn btn-advance">
            <i class="fa-solid fa-arrow-left me-1"></i> Back
          </a>
        </div>

        <div class="card-body bg-light">
          <form action="<?= $form_action ?>" method="post" enctype="multipart/form-data">
            <div class="row g-4">

              <div class="col-md-6">
                <label class="form-label fw-semibold">Title</label>
                <textarea name="terms_title" class="form-control"><?= !empty($edit_data) ? $edit_data['terms_title'] : '' ?></textarea>
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Heading</label>
                <textarea name="terms_heading" class="form-control"><?= !empty($edit_data) ? $edit_data['terms_heading'] : '' ?></textarea>
              </div>

							<?php for($i = 1; $i <= 4; $i++) { ?>
								<div class="col-md-6">
									<label class="form-label fw-semibold">Description <?= $i ?></label>
									<textarea name="terms_description_<?= $i ?>" class="form-control"><?= !empty($edit_data) ? $edit_data['terms_description_' . $i] : '' ?></textarea>
								</div>
							<?php } ?>

              <div class="col-12 text-center">
                <button type="submit" class="btn btn-advance px-4 py-2 mt-3">
                  <i class="fas fa-plus me-1"></i> <?= !empty($edit_data) ? 'Update' : 'Add' ?> Terms and Conditions
                </button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
