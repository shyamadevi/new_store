<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3"><i class="fas fa-list me-2"></i> Customer List</h3>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <?php if (count($customer_list) > 0) { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center align-middle mb-0" id="ListTable">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th>Action</th>
                                    <th>Sr No</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Sign</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($customer_list as $key => $row) {
                                    $userst = $row['user_status'];
                                ?>
                                    <tr>
                                        <td>
                                            <?php if ($userst == 'Inactive') { ?>
                                                <button class="btn btn-outline-secondary btn-sm" title="Customer is Inactive" disabled>
                                                    Inactive
                                                </button>
                                            <?php } else { ?>
                                                <a href="<?= base_url() ?>admin/remove_customer/<?= $row['user_id'] ?>" class="btn btn-outline-danger btn-sm" title="Remove Customer!" onclick="return confirm('Are you sure you want to remove this customer?')">
                                                    <i class="fa fa-trash-alt"></i>
                                                </a>
                                            <?php } ?>
                                        </td>
                                        <td><?= $key + 1 ?></td>
                                        <td>#<?= $row['user_id'] ?> <?= htmlspecialchars($row['user_name']) ?></td>
                                        <td>
                                            <a href="tel:<?= htmlspecialchars($row['user_phone']) ?>" class="text-decoration-none">
                                                <?= htmlspecialchars($row['user_phone']) ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="mailto:<?= htmlspecialchars($row['user_email']) ?>" class="text-decoration-none">
                                                <?= htmlspecialchars($row['user_email']) ?>
                                            </a>
                                        </td>
                                        <td><?= htmlspecialchars($row['user_address']) ?></td>
                                        <td>
                                            <span class="badge <?= $userst == 'Active' ? 'bg-success' : 'bg-warning text-dark' ?>">
                                                <?= htmlspecialchars($userst) ?>
                                            </span>
                                        </td>
                                        <td><?= htmlspecialchars($row['user_sign']) ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-warning text-center mt-5">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        Customer Data is Empty
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- DataTables Initialization Script -->
<script>
$(document).ready(function() {
    $('#ListTable').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "lengthMenu": [5, 10, 25, 50],
        "pageLength": 10,
        "order": [[1, "asc"]],
        "language": {
            "search": "Search:",
            "lengthMenu": "Show _MENU_ entries",
            "info": "Showing _START_ to _END_ of _TOTAL_ customers",
            "paginate": {
                "next": "Next",
                "previous": "Previous"
            },
            "zeroRecords": "No matching records found"
        }
    });
});
</script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("searchInput");
        searchInput.addEventListener("keyup", function() {
            const value = this.value.toLowerCase();
            const rows = document.querySelectorAll("#ListTable tbody tr");
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
        const printContents = document.querySelector("#ListTable").outerHTML;
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
