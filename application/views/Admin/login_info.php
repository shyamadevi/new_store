<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3"><i class="fas fa-list me-2"></i> Login Details</h3>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
				<div class="col-xl-3 col-md-4 col-sm-5">
						<a href="<?= base_url() ?>admins/login_form" class="btn btn-advance mb-3 mt-2">
							<i class="fa-solid fa-plus me-1"></i> Add Login Info
						</a>
					</div>
                <?php if (count($logindata) > 0) { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center align-middle mb-0" id="SubscriptionTable">
                            <thead class="table-dark text-white">
                                <tr>
									<th>Action</th>
                                    <th>Sr No</th>
                                    <th>Heading</th>
                                    <th>Desc</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php foreach ($logindata as $key => $row) { ?>
									<tr>
										<td>
											<a href="<?=base_url()?>admins/login_form/<?= $row['form_id'] ?>" class="btn btn-sm btn-warning">Edit</a>
										</td>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= htmlspecialchars($row['form_heading']) ?></td>
										<td><?= htmlspecialchars($row['form_desc']) ?></td>
										<td> <a href="mailto:<?= htmlspecialchars($row['form_email']) ?>"><?= htmlspecialchars($row['form_email']) ?></a></td>
                                        <td><?= htmlspecialchars($row['role']) ?></td>
                                        <td><?= htmlspecialchars($row['created']) ?></td>
                                        <td><?= htmlspecialchars($row['updated']) ?></td>
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
            "info": "Showing _START_ to _END_ of _TOTAL_ Login Info",
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
