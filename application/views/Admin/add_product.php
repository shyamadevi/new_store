<main class="main-content">
  <div class="container-fluid p-5 mt-5">
    <div class="container">
      <div class="card shadow border-0 rounded-4">
        <div class="card-header">
          <h5 class="mb-0">
            <i class="fas fa-boxes me-2"></i> <?= !empty($edit_data) ? 'Edit Product' : 'Add Product' ?>
          </h5>
        </div>
        <div class="mt-2 me-3 p-2">
          <a href="<?= base_url('admin/products') ?>" class="btn btn-advance">
            <i class="fa-solid fa-arrow-left me-1"></i> Back
          </a>
        </div>
        <div class="card-body bg-light">
          <form action="<?= $form_action ?>" method="post" enctype="multipart/form-data">
            <div class="row g-3">

              <!-- Product Name -->
              <div class="col-md-4">
                <label class="form-label fw-semibold">Product Name</label>
                <input type="text" name="name" value="<?= !empty($edit_data) ? $edit_data['name'] : '' ?>" class="form-control">
              </div>

              <!-- Description -->
              <div class="col-md-8">
                <label class="form-label fw-semibold">Description</label>
                <textarea name="description" class="form-control"><?= !empty($edit_data) ? $edit_data['description'] : '' ?></textarea>
              </div>

              <!-- Category ID -->
              <div class="col-md-4">
                <label class="form-label fw-semibold">Category</label>
                <input type="number" name="category_id" value="<?= !empty($edit_data) ? $edit_data['category_id'] : '' ?>" class="form-control">
              </div>

              <!-- Price -->
              <div class="col-md-4">
                <label class="form-label fw-semibold">Price</label>
                <input type="number" step="0.01" name="price" value="<?= !empty($edit_data) ? $edit_data['price'] : '' ?>" class="form-control">
              </div>

              <!-- Discount Percent -->
              <div class="col-md-4">
                <label class="form-label fw-semibold">Discount %</label>
                <input type="number" step="0.01" name="discount_percent" value="<?= !empty($edit_data) ? $edit_data['discount_percent'] : '' ?>" class="form-control">
              </div>

              <!-- Discount Amount -->
              <div class="col-md-4">
                <label class="form-label fw-semibold">Discount Amount</label>
                <input type="number" step="0.01" name="discount_amount" value="<?= !empty($edit_data) ? $edit_data['discount_amount'] : '' ?>" class="form-control">
              </div>

              <!-- Stock -->
              <div class="col-md-4">
                <label class="form-label fw-semibold">Stock</label>
                <input type="number" name="stock" value="<?= !empty($edit_data) ? $edit_data['stock'] : '' ?>" class="form-control">
              </div>

              <!-- Brand -->
              <div class="col-md-4">
                <label class="form-label fw-semibold">Brand</label>
                <input type="text" name="brand" value="<?= !empty($edit_data) ? $edit_data['brand'] : '' ?>" class="form-control">
              </div>

              <!-- Weight -->
              <div class="col-md-4">
                <label class="form-label fw-semibold">Weight</label>
                <input type="text" name="weight" value="<?= !empty($edit_data) ? $edit_data['weight'] : '' ?>" class="form-control">
              </div>

              <!-- Variety -->
              <div class="col-md-4">
                <label class="form-label fw-semibold">Variety</label>
                <input type="text" name="variety" value="<?= !empty($edit_data) ? $edit_data['variety'] : '' ?>" class="form-control">
              </div>

              <!-- Shelf Life -->
              <div class="col-md-4">
                <label class="form-label fw-semibold">Shelf Life</label>
                <input type="text" name="shelf_life" value="<?= !empty($edit_data) ? $edit_data['shelf_life'] : '' ?>" class="form-control">
              </div>

              <!-- Sub Option -->
              <div class="col-md-4">
                <label class="form-label fw-semibold">Sub Option</label>
                <select name="sub_option" class="form-control">
                  <option value="no" <?= !empty($edit_data) && $edit_data['sub_option']=='no' ? 'selected' : '' ?>>No</option>
                  <option value="yes" <?= !empty($edit_data) && $edit_data['sub_option']=='yes' ? 'selected' : '' ?>>Yes</option>
                </select>
              </div>

              <!-- Origin -->
              <div class="col-md-4">
                <label class="form-label fw-semibold">Origin</label>
                <input type="text" name="origin" value="<?= !empty($edit_data) ? $edit_data['origin'] : '' ?>" class="form-control">
              </div>

              <!-- Images -->
              <?php for($i=1; $i<=4; $i++): ?>
                <div class="col-md-3">
                  <label class="form-label fw-semibold">Image <?= $i ?></label>
                  <input type="file" name="image<?= $i ?>" class="form-control">
                </div>
              <?php endfor; ?>


              <!-- Submit Button -->
              <div class="col-12 text-center mt-3">
                <button type="submit" class="btn btn-advance px-4 py-2">
                  <i class="fas fa-plus me-1"></i> <?= !empty($edit_data) ? 'Update' : 'Add' ?> Product
                </button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
