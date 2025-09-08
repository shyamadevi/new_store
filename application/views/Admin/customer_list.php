<title>Customer</title>
<main class="main-content">
    <div class="container-fluid px-0">
        <div class="container">
            <div class="card shadow border-0 rounded-4">
                <div class="card-header  text-white rounded-top-4">
                    <h5 class="mb-0">
                        <i class="fas fa-list me-2"></i> Customer List
                    </h5>
                </div>
                <div class="card-body">
                    <?php if (count($customer_list)>0) { ?>

						<div class="m-2 d-flex justify-content-between align-items-center">
                             <input type="text" id="searchInput" class="form-control w-75" placeholder="Search Customer...">
                             <button class="btn btn-sm btn-outline-dark ms-3" onclick="printOrders()">
                                 <i class="fas fa-print me-1"></i> Print
                            </button>
                        </div>

						<div class="table-responsive">
                        <table class="table table-bordered table-hover text-center align-middle mb-0" id="SubscriptionTable">
                            <thead class="table-secondary">
                                <tr class="table-primary">
                                    <th>Action</th>
                                    <th>Sr No</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <!-- <th>Orders</th> -->
                                    <th>Status</th>
                                    <th>Sign</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($customer_list as $key => $row) {
                                    // $subact = $row['sub_activity'];
                                    $userst = $row['user_status']; 
                                    ?>
                                    <tr>
                                        <td>
                                            <?php if ($userst =='Inactive') { ?>
                                                <a href="#" class="btn btn-danger btn-sm" title="Customer is Inactive" onclick="return confirm('Customer is Inactive')">Inactive</a>
                                            <?php }else{ ?> 
                                                <a href="<?=base_url()?>admin/remove_customer/<?=$row['user_id']?>" 
                                                class="btn btn-outline-danger btn-sm" title="Remove Customer!" 
                                                onclick="return confirm('Remove Customer!')">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                            <?php } ?>
                                        </td>
                                        <td><?= $key + 1 ?></td>
                                        <td>#<?= $row['user_id'] ?> <?= $row['user_name'] ?></td>
                                        <td>
                                            <a href="tel:<?= $row['user_phone'] ?>">
                                                <?= $row['user_phone'] ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="mailto:<?= $row['user_email'] ?>">
                                                <?= $row['user_email'] ?>
                                            </a>
                                        </td>
                                        <td><?= $row['user_address'] ?></td>
                                        <!-- <td>total orders</td> -->
                                        <td><?= $row['user_status'] ?></td>
                                        <td><?= $row['user_sign'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <?php }else{ ?> 
                        <div class="alert alert-warning mt-5 d-flex align-items-center">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <span>Customer Data is Empty</span>
                        </div>
                        <?php } ?>
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
                const rows = document.querySelectorAll("#SubscriptionTable tbody tr");
                rows.forEach(function(row) {
                    const rowText = row.textContent.toLowerCase();
                    const isVisible = rowText.indexOf(value) > -1;
                    row.style.display = isVisible ? "" : "none";
                });
            });
        });
    </script>
     <script type="text/javascript">
    function printOrders() {
        const printContents = document.querySelector("#SubscriptionTable").outerHTML;
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
