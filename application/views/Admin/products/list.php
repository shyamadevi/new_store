<main class="main-content">
    <div class="container-fluid px-0">
        <div class="container">
            <div class="card shadow border-0 rounded-4">
                <div class="card-header  text-white rounded-top-4">
                    <h5 class="mb-0">
                        <i class="fas fa-list me-2"></i> Products List
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3 col-md-4 col-sm-5">
                            <a href="<?= base_url() ?>admin/products_form" class="btn btn-advance mb-3 mt-2">
                                <i class="fa-solid fa-plus me-1"></i> Add Products
                            </a>
                        </div>
                            <div class="col-xl-9 col-md-8 col-sm-7 text-center ">
                                <marquee scrollamount="7" class="marquee pt-3"></marquee>
                            </div>
                        </div>
                          <div class="m-2 d-flex justify-content-between align-items-center">
                                <input type="text" id="searchInput" class="form-control w-75" placeholder="Search Products....">
                                <button class="btn btn-sm btn-outline-dark ms-3" onclick="printProducts()">
                                    <i class="fas fa-print me-1"></i> Print
                                </button>
                            </div>

							<div class="table-responsive">
                            <table class="table table-bordered table-hover text-center align-middle mb-0" id="productsTable">
                                <thead class="table-secondary">
                                    <tr class="table-primary">
                                        <th>Action</th>
                                        <th>Sr No</th>
                                        <th>Product Name</th>
                                        <th>Weight</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Price /100g</th>
                                        <th>Tags</th>
                                        <th>Type</th>
                                        <th>Manufacturing Date</th>
                                        <th>Expiry Date</th>
                                        <th>Available Stock</th>
                                        <th>Discount</th>
                                    </tr>
                                </thead>
                                <!-- <tbody>
                                    <?php foreach ($products as $key => $row) { ?>
                                        <tr>
                                            <td>
                                                <a href="<?= base_url() ?>admin/edit_products/<?= $row['product_id'] ?>" class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            <?php if ($row['product_status'] == 'Active') { ?>
                                                <a href="<?= base_url() ?>admin/remove_products/<?= $row['product_id'] ?>" class="btn btn-sm btn-outline-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this product?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            <?php } else { ?>
                                                <a href="<?= base_url() ?>admin/active_products/<?= $row['product_id'] ?>" class="btn btn-sm btn-outline-info" title="Activate">
                                                    <i class="fa-solid fa-arrow-rotate-left"></i>
                                                </a>
                                            <?php } ?>
                                            </td>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $row['product_name'] ?></td>
                                            <td><?= $row['product_weight'] ?></td>
                                                    
                                            <td>
                                                <span class="badge p-2 <?php
                                                if ($row['product_status']=='Active') {
                                                    echo"bg-primary";
                                                }else{
                                                    echo"bg-danger";
                                                }
                                                ?>">
                                                    <?=$row['product_status']?>
                                                </span>
                                            
                                            </td>
                                            <td>
                                            <?php if (!empty($row['product_image'])) { ?>
                                                <a href="<?= base_url().$row['product_image'] ?>" class="btn btn-outline-dark btn-sm" target="_blank">View</a>
                                                <?php } else { ?>
                                                    <span class="text-muted">No Image</span>
                                                <?php } ?>
                                            </td>
                                            <td><?= $row['product_category'] ?></td>
                                            <td>₹ <?= $row['product_price'] ?>/-</td>
                                            <td><?= $row['product_tags'] ?></td>
                                            <td><?= $row['product_type'] ?></td>
                                            <td><?= $row['product_manufacturing_ate'] ?></td>
                                            <td><?= $row['product_expiry_date'] ?></td>
                                            <td><?= $row['product_available_stock'] ?></td>
                                            <td><?= $row['product_discount'] ?>%</td>
                                                            
                                        </tr>
                                        <?php } ?>
                                </tbody> -->
                            </table>
                        </div>
                            <div class="alert alert-warning mt-5 d-flex align-items-center">
                                <i class="fas fa-exclamation-circle me-2"></i>
                                <span>products Data is Empty</span>
                            </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>

    
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("searchInput");
            searchInput.addEventListener("keyup", function() {
                const value = this.value.toLowerCase();
                const rows = document.querySelectorAll("#productsTable tbody tr");
                rows.forEach(function(row) {
                    const rowText = row.textContent.toLowerCase();
                    const isVisible = rowText.indexOf(value) > -1;
                    row.style.display = isVisible ? "" : "none";
                });
            });
        });
    </script>
        
<script type="text/javascript">
    function printProducts() {
        const printContents = document.querySelector("#productsTable").outerHTML;
        const originalContents = document.body.innerHTML;

        const printWindow = window.open('', '', 'height=800,width=1200');
        printWindow.document.write('<html><head><title>Print Orders</title>');
        printWindow.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">');
        printWindow.document.write('<style>table, th, td { border: 1px solid #ccc; border-collapse: collapse; padding: 8px; text-align: center; }</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write('<h3 class="text-center mb-3">Orders List</h3>');
        printWindow.document.write(printContents);
        printWindow.document.write('</body></html>');

        printWindow.document.close();
        printWindow.focus();
        printWindow.print();
        printWindow.close();
    }
</script>
