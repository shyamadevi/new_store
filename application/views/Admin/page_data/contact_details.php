<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3"><i class="fas fa-list me-2"></i> Contact Details</h3>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <?php if (count($form_data) > 0) { ?>
					<div class="col-xl-3 col-md-4 col-sm-5">
                            <a href="<?= base_url() ?>user_side/contact_form" class="btn btn-advance mb-3 mt-2">
                                <i class="fa-solid fa-plus me-1"></i> Add Info
                            </a>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center align-middle mb-0" id="SubscriptionTable">
                            <thead class="table-dark text-white">
                                <tr>
									<th>Action</th>
                                    <th>Sr No</th>
                                    <th>Mobile</th>
                                    <th>Phone</th>
                                    <th>Toll Free</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Location</th>
                                    <th>Map</th>
                                    <th>Facebook</th>
                                    <th>Twitter</th>
                                    <th>Instagram</th>
                                    <th>LinkedIn</th>
                                    <th>WhatsApp</th>
                                    <th>YouTube</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($form_data as $key => $row) {
                                ?>
                                    <tr>
										<td>
											<a href="<?=base_url()?>user_side/contact_form/<?= $row['contactform_id'] ?>" class="btn btn-sm btn-warning">Edit</a>
											<a href="<?=base_url()?>user_side/contact_info_delete/<?= $row['contactform_id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
										</td>
                                        <td><?= $key + 1 ?></td>
                                        <td>
                                            <a href="tel:<?= htmlspecialchars($row['data_mobile']) ?>" class="text-decoration-none">
                                                <?= htmlspecialchars($row['data_mobile']) ?>
                                            </a>
                                        </td>
										<td>
                                            <a href="tel:<?= htmlspecialchars($row['data_phone']) ?>" class="text-decoration-none">
                                                <?= htmlspecialchars($row['data_phone']) ?>
                                            </a>
                                        </td>
										<td>
                                            <a href="tel:<?= htmlspecialchars($row['data_toll_free']) ?>" class="text-decoration-none">
                                                <?= htmlspecialchars($row['data_toll_free']) ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="mailto:<?= htmlspecialchars($row['data_email']) ?>" class="text-decoration-none">
                                                <?= htmlspecialchars($row['data_email']) ?>
                                            </a>
                                        </td>
                                        <td><?= htmlspecialchars($row['data_address_street']) ?></td>
                                        <td><?= htmlspecialchars($row['data_address']) ?></td>
                                        <td><a href="<?= htmlspecialchars($row['data_map']) ?>" class="badge badge-black p-2"><i class="fas fa-map fs-4"></i></a></td>
                                        <td><a href="<?= htmlspecialchars($row['data_facebook']) ?>" class="badge badge-primary p-2 fw-bold"><i class="fab fa-facebook fs-4"></i></a></td>
                                        <td><a href="<?= htmlspecialchars($row['data_twitter']) ?>" class="badge badge-info p-2 fw-bold"><i class="fab fa-twitter fs-4"></i></a></td>
                                        <td><a href="<?= htmlspecialchars($row['data_instagram']) ?>" class="badge badge-danger p-2 fw-bold"><i class="fab fa-instagram fs-4"></i></a></td>
                                        <td><a href="<?= htmlspecialchars($row['data_linkedin']) ?>" class="badge badge-info p-2 fw-bold"><i class="fab fa-linkedin fs-4"></i></a></td>
                                        <td><a href="<?= htmlspecialchars($row['data_whatsapp']) ?>" class="badge badge-success p-2 fw-bold"><i class="fab fa-whatsapp fs-4"></i></a></td>
                                        <td><a href="<?= htmlspecialchars($row['data_youtube']) ?>" class="badge badge-danger p-2 fw-bold"><i class="fab fa-youtube fs-4"></i></a></td>
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
    $('#SubscriptionTable').DataTable({
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
