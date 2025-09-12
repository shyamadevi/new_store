<!-- Messages List -->
<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3"><i class="fas fa-list me-2"></i> Messages List</h3>
            </div>
            <div class="ms-auto d-flex gap-2">
                <!-- Print Button -->
                <button class="btn btn-outline-primary btn-sm" onclick="printOrders()">
                    <i class="fa fa-print me-1"></i> Print Messages
                </button>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <?php if (count($msg) > 0) { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center align-middle mb-0" id="ListTable">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th>Action</th>
                                    <th>Sr No</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($msg as $key => $row) { ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url() ?>admin/remove_msg/<?= $row['msg_id'] ?>" 
                                               class="btn btn-outline-danger btn-sm" 
                                               title="Remove Message!" 
                                               onclick="return confirm('Are you sure you want to remove this message?')">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                        <td><?= $key + 1 ?></td>
                                        <td>#<?= $row['msg_userid'] ?> <?= htmlspecialchars($row['msg_name']) ?></td>
                                        <td>
                                            <a href="tel:<?= htmlspecialchars($row['msg_phone']) ?>" class="text-decoration-none">
                                                <?= htmlspecialchars($row['msg_phone']) ?>
                                            </a>
                                        </td>
                                        <td><?= htmlspecialchars($row['msg_sub']) ?></td>
                                        <td><?= htmlspecialchars($row['msg_desc']) ?></td>
                                        <td><?= date("d M Y, h:i A", strtotime($row['created'])) ?></td>
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
            "info": "Showing _START_ to _END_ of _TOTAL_ messages",
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
