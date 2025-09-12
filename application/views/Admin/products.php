<!-- Dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables CSS & JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstra<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>


<style>
    
    .product-img {
        width: 50px;
        height: 50px;
        object-fit: cover;
    }
</style>

<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3"><i class="fas fa-list me-2"></i> Contact Details</h3>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
				<div class="col-xl-3 col-md-4 col-sm-5 text-light">
						<a href="<?= base_url() ?>admin/products_form" class="btn text-white btn-advance mb-3 mt-2">
							<i class="fa-solid fa-plus me-1"></i> Add Info
						</a>
					</div>
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <?php if (count($products) > 0) { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center align-middle mb-0" id="productTable">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th>Actions</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Discount %</th>
                                    <th>Discount Amount</th>
                                    <th>Stock</th>
                                    <th>Sub Option</th>
                                    <th>Variety</th>
                                    <th>Shelf Life</th>
                                    <th>Origin</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $p): ?>
                                    <tr data-id="<?= $p->product_id ?>">
                                        <td>
                                            <button class="btn btn-sm btn-primary edit-btn" 
                                                data-product='<?= htmlspecialchars(json_encode($p), ENT_QUOTES, "UTF-8") ?>'>Edit</button>
                                            <button class="btn btn-sm btn-danger delete-btn">Delete</button>
                                        </td>
                                        <td><?= $p->product_id ?></td>
                                        <td><?= $p->name ?></td>
                                        <td><?= $p->brand ?></td>
                                        <td><?= $p->price ?></td>
                                        <td><?= $p->discount_percent ?></td>
                                        <td><?= $p->discount_amount ?></td> <!-- Discount Amount -->
                                        <td><?= $p->stock ?></td>
                                        <td><?= ucfirst($p->sub_option) ?></td>
                                        <td><?= $p->variety ?></td>
                                        <td><?= $p->shelf_life ?></td>
                                        <td><?= $p->origin ?></td>
                                        <td>
                                            <?php if (!empty($p->image1)): ?>
                                                <img src="<?= base_url('user_assets/img/products/'.$p->image1) ?>" class="product-img">
                                            <?php else: ?>
                                                <span>No Image</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-warning text-center mt-5">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        No Products Found
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="editProductForm" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body row g-3">
                    <input type="hidden" name="product_id" id="product_id">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Brand</label>
                        <input type="text" class="form-control" name="brand" id="brand">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Price</label>
                        <input type="number" step="0.01" class="form-control" name="price" id="price">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Discount %</label>
                        <input type="number" step="0.01" class="form-control" name="discount_percent" id="discount_percent">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Stock</label>
                        <input type="number" class="form-control" name="stock" id="stock">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Sub Option</label>
                        <select name="sub_option" id="sub_option" class="form-control">
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Variety</label>
                        <input type="text" class="form-control" name="variety" id="variety">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Shelf Life</label>
                        <input type="text" class="form-control" name="shelf_life" id="shelf_life">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Origin</label>
                        <input type="text" class="form-control" name="origin" id="origin">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Image</label>
                        <input type="file" name="image1" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- DataTables Initialization -->
<script>
$(document).ready(function () {
    $('#productTable').DataTable({
        pageLength: 10,
        dom: "<'row mb-3'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6 text-end'B>>" +
             "<'row'<'col-sm-12'tr>>" +
             "<'row mt-3'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        buttons: [
            { extend: 'copy', className: 'btn btn-secondary btn-sm' },
            { extend: 'csv', className: 'btn btn-secondary btn-sm' },
            { extend: 'excel', className: 'btn btn-secondary btn-sm' },
            { extend: 'pdf', className: 'btn btn-secondary btn-sm' },
            { extend: 'print', className: 'btn btn-secondary btn-sm' }
        ],
        responsive: true
    });

    // Open Modal on Edit
    $(document).on('click', '.edit-btn', function () {
        let product = $(this).data('product');
        $('#editProductForm')[0].reset();

        $('#product_id').val(product.product_id);
        $('#name').val(product.name);
        $('#brand').val(product.brand);
        $('#price').val(product.price);
        $('#discount_percent').val(product.discount_percent);
        $('#stock').val(product.stock);
        $('#sub_option').val(product.sub_option);
        $('#variety').val(product.variety);
        $('#shelf_life').val(product.shelf_life);
        $('#origin').val(product.origin);

        $('#editProductModal').modal('show');
    });

    // Submit Edit Form
    $('#editProductForm').on('submit', function (e) {
        e.preventDefault();
        let id = $('#product_id').val();
        let formData = new FormData(this);

        $.ajax({
            url: "<?= base_url('admin/update_product/') ?>" + id,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (res) {
                if (res === "success") {
                    location.reload();
                } else {
                    alert("Failed to update product");
                }
            }
        });
    });

    // Delete Product
    $(document).on('click', '.delete-btn', function () {
        let row = $(this).closest('tr');
        let id = row.data('id');

        if (confirm("Are you sure you want to delete this product?")) {
            $.ajax({
                url: "<?= base_url('admin/delete_product/') ?>" + id,
                type: "POST",
                success: function (res) {
                    if (res === "deleted") {
                        row.fadeOut(500, function () { $(this).remove(); });
                    } else {
                        alert("Failed to delete product.");
                    }
                }
            });
        }
    });
});
</script>
