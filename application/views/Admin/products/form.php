<main class="main-content">
  <div class="container-fluid px-0">
    <div class="container">
      <div class="card shadow border-0 rounded-4">
        <div class="card-header">
          <h5 class="mb-0"><i class="fas fa-image me-2"></i><?= isset($edit_data) ? 'Edit Product' : 'Add Product' ?></h5>
        </div>

        <div class="mt-2 me-3 p-2">
          <a href="<?= base_url() ?>admin/products" class="btn btn-advance">
            <i class="fa-solid fa-arrow-left me-1"></i> Back
          </a>
        </div>

        <div class="card-body bg-light">
          <form action="<?= $form_action ?>" method="post" enctype="multipart/form-data">
            <div class="row g-4">

              <div class="col-md-6">
                <label class="form-label fw-semibold">Product Name</label>
                <input type="text" name="product_name" value="<?= isset($edit_data) ? $edit_data['product_name'] : '' ?>" class="form-control" required>
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Product Description</label>
                <textarea name="product_description" class="form-control" rows="2"><?= isset($edit_data) ? $edit_data['product_description'] : '' ?></textarea>
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Ingredients</label>
                <input type="text" name="product_ingredients" value="<?= isset($edit_data) ? $edit_data['product_ingredients'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Weight</label>
                <input type="text" name="product_weight" value="<?= isset($edit_data) ? $edit_data['product_weight'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Packing</label>
                <input type="text" name="product_packing" value="<?= isset($edit_data) ? $edit_data['product_packing'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Shelf Life</label>
                <input type="text" name="product_shelf_life" value="<?= isset($edit_data) ? $edit_data['product_shelf_life'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Product Image</label>
                <input type="file" name="product_image" class="form-control">
				<?php if (isset($edit_data) && !empty($edit_data['product_image'])){ ?>
				  <img src="<?= base_url('uploads/' . $edit_data['product_image']) ?>" alt="Product Image" style="width: 100px; height: auto; margin-top: 10px;">
				<?php } ?>
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Category</label>
                <input type="text" name="product_category" value="<?= isset($edit_data) ? $edit_data['product_category'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Price</label>
                <input type="text" name="product_price" value="<?= isset($edit_data) ? $edit_data['product_price'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Quantity</label>
                <input type="text" name="product_quantity" value="<?= isset($edit_data) ? $edit_data['product_quantity'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Tags</label>
                <input type="text" name="product_tags" value="<?= isset($edit_data) ? $edit_data['product_tags'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Product Type</label>
                <input type="text" name="product_type" value="<?= isset($edit_data) ? $edit_data['product_type'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Tax %</label>
                <input type="text" name="product_tax" value="<?= isset($edit_data) ? $edit_data['product_tax'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Manufacturing Date</label>
                <input type="date" name="product_manufacturing_date" value="<?= isset($edit_data) ? $edit_data['product_manufacturing_date'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Expiry Date</label>
                <input type="date" name="product_expiry_date" value="<?= isset($edit_data) ? $edit_data['product_expiry_date'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Fat Content</label>
                <input type="text" name="product_fat_content" value="<?= isset($edit_data) ? $edit_data['product_fat_content'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Storage Instructions</label>
                <input type="text" name="product_storage_instructions" value="<?= isset($edit_data) ? $edit_data['product_storage_instructions'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Available Stock</label>
                <input type="text" name="product_available_stock" value="<?= isset($edit_data) ? $edit_data['product_available_stock'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Calories</label>
                <input type="text" name="product_calories" value="<?= isset($edit_data) ? $edit_data['product_calories'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Protein</label>
                <input type="text" name="product_protein" value="<?= isset($edit_data) ? $edit_data['product_protein'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Discount</label>
                <input type="text" name="product_discount" value="<?= isset($edit_data) ? $edit_data['product_discount'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Usage Suggestions</label>
                <input type="text" name="product_usage_suggestions" value="<?= isset($edit_data) ? $edit_data['product_usage_suggestions'] : '' ?>" class="form-control">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Status</label>
                <select name="product_status" class="form-control">
                  <option value="Active" <?= isset($edit_data) && $edit_data['product_status'] == 'Active' ? 'selected' : '' ?>>Active</option>
                  <option value="Inactive" <?= isset($edit_data) && $edit_data['product_status'] == 'Inactive' ? 'selected' : '' ?>>Inactive</option>
                  <option value="Out of Stock" <?= isset($edit_data) && $edit_data['product_status'] == 'Out of Stock' ? 'selected' : '' ?>>Out of Stock</option>
                </select>
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
