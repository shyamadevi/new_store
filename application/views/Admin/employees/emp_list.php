<!-- Messages List -->
<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3"><i class="fas fa-list me-2"></i> Employees List</h3>
            </div>
            <div class="ms-auto d-flex gap-2">
                <!-- Print Button -->
                <button class="btn btn-outline-primary btn-sm" onclick="printOrders()">
                    <i class="fa fa-print me-1"></i> Print Employees
                </button>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
				<div class="col-xl-3 col-md-4 col-sm-5">
						<a href="<?= base_url() ?>admin/emp_form" class="btn btn-advance mb-3 mt-2">
							<i class="fa-solid fa-plus me-1"></i> Add Employee
						</a>
					</div>
                <?php if (count($emp) > 0) { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center align-middle mb-0" id="ListTable">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th>Action</th>
                                    <th>Sr No</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Address</th>
                                    <th>Picture</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($emp as $key => $row) { ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url() ?>admin/emp_form/<?= $row['employees_id'] ?>"
                                               class="btn btn-outline-primary btn-sm"
                                               title="Edit Employee!">
                                                <i class="fa fa-edit"></i>
                                            </a>
											<a href="<?= base_url() ?>admin/remove_employee/<?= $row['employees_id'] ?>"
                                               class="btn btn-outline-danger btn-sm"
                                               title="Remove Employee!"
                                               onclick="return confirm('Are you sure you want to remove this employee?')">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                        <td><?= $key + 1 ?></td>
										<td><?= htmlspecialchars($row['employees_name']) ?></td>
                                        <td>
                                            <a href="tel:<?= htmlspecialchars($row['employees_phone']) ?>">
                                                <?= htmlspecialchars($row['employees_phone']) ?>
                                            </a>
                                        </td>
                                        <td>
											<a href="mailto:<?= htmlspecialchars($row['employees_email']) ?>">
												<?= htmlspecialchars($row['employees_email']) ?>
											</a>
										</td>
                                        <td><?= htmlspecialchars($row['employees_password']) ?></td>
                                        <td><?= htmlspecialchars($row['employees_address']) ?></td>
                                        <td>
                                            <?php if (!empty($row['employees_pic'])) { ?>
                                                <img src="<?= base_url( $row['employees_pic']) ?>" alt="Employee Picture" class="img-fluid" style="max-width: 100px;">
                                            <?php } else { ?>
                                                <span class="text-muted">No Picture</span>
                                            <?php } ?>
                                        </td>
                                        <td><?= htmlspecialchars($row['employees_role']) ?></td>
                                        <td>
											<span class="p-2 badge <?php if($row['employees_status'] == 'Active') {
												echo 'bg-success'; } elseif($row['employees_status'] == 'Inactive') 
												{ echo 'bg-danger'; } elseif($row['employees_status'] == 'Leave') 
												{ echo 'bg-dark'; } ?>">
												<?= htmlspecialchars($row['employees_status']) ?>
											</span>
										</td>
                                        <td><?= date("d M Y, h:i A", strtotime($row['employees_sign'])) ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-warning text-center mt-5">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        No Messages Found
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- DataTables Initialization -->
<script>
$(document).ready(function() {
    var table = $('#ListTable').DataTable({
        "paging": true,
        "searching": true, // DataTables internal search ON
        "ordering": true,
        "lengthMenu": [5, 10, 25, 50],
        "pageLength": 10,
        "order": [[1, "asc"]],
        "language": {
            "lengthMenu": "Show _MENU_ entries",
            "info": "Showing _START_ to _END_ of _TOTAL_ Employees",
            "paginate": {
                "next": "Next",
                "previous": "Previous"
            },
            "zeroRecords": "No matching records found"
        }
    });

    // Custom search box linked to DataTables
    $('#searchInput').on('keyup', function () {
        table.search(this.value).draw();
    });
});
</script>

<!-- Print Function -->
<script type="text/javascript">
function printOrders() {
    const printContents = document.querySelector("#ListTable").outerHTML;
    const printWindow = window.open('', '', 'height=800,width=1200');
    printWindow.document.write('<html><head><title>Print Messages</title>');
    printWindow.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">');
    printWindow.document.write('<style>table, th, td { border: 1px solid #ccc; border-collapse: collapse; padding: 8px; text-align: center; } @media print { th, td { font-size: 12px; }}</style>');
    printWindow.document.write('</head><body>');
    printWindow.document.write('<h3 class="text-center mb-3">Messages List</h3>');
    printWindow.document.write(printContents);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.focus();
    printWindow.print();
    printWindow.close();
}
</script>
