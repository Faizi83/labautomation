<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<?php
require 'Connection/connection.php';
?>
<?php
// Array of table names
$productTables = array('fuses', 'capacitors', 'resistors', 'switchgears');

$data_fetch_array = array();

foreach ($productTables as $table) {
    $fetch_query = "SELECT * FROM $table";
    $fetch_prepare = $connection->prepare($fetch_query);
    $fetch_prepare->execute();
    $fetch_data = $fetch_prepare->fetchAll(PDO::FETCH_ASSOC);

    foreach ($fetch_data as $data) {
        $data['product_type'] = $table;
        $data_fetch_array[] = $data;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tested Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Navbar Start -->

        <?php require 'header/navbar.php' ?>

        <!-- Navbar End -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Testing Type</th>
                                    <th>Rating</th>
                                    <th>Date</th>
                                    <th>Uploaded by</th>
                                    <th>Result</th>
                                    <th>Submit</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Testing Type</th>
                                    <th>Rating</th>
                                    <th>Date</th>
                                    <th>Uploaded by</th>
                                    <th>Result</th>
                                    <th>Submit</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <!-- Now you can loop through $data_fetch_array to generate your table -->
                                <?php foreach ($data_fetch_array as $fetched_data) { ?>
                                    <tr>
                                        <td><?= $fetched_data['product_type'] ?></td>
                                        <td><?= $fetched_data['testing_type'] ?></td>
                                        <td><?= $fetched_data['rating'] ?></td>
                                        <td><?= $fetched_data['date'] ?></td>
                                        <td><?= $fetched_data['username'] ?></td>
                                        <td>
                                            <div class="form-group">
                                                <select id="form_need" name="testing-type" class="form-control" data-error="Please specify your need." required>
                                                    <option value="" selected disabled>---Select---</option>
                                                    <option>Pass</option>
                                                    <option>Fail</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td><input type="Submit" class="btn btn-primary" value="Test Now"></td>
                                    </tr>
                                <?php } ?>
                                <!-- <tr>
                                    <td>bri Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>
                                        <div class="form-group">
                                            <select id="form_need" name="testing-type" class="form-control" data-error="Please specify your need." required>
                                                <option value="" selected disabled>---Select---</option>
                                                <option>Pass</option>
                                                <option>Fail</option>
                                            </select>

                                        </div>
                                    </td>
                                    <td><input type="Submit" class="btn btn-primary" value="Submit"></td>
                                </tr>
                                <tr>
                                    <td>ziri Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>0</td>
                                    <td>2008/11/28</td>
                                    
                                    <td>
                                        <div class="form-group">
                                            <select id="form_need" name="testing-type" class="form-control" data-error="Please specify your need." required>
                                                <option value="" selected disabled>---Select---</option>
                                                <option>Pass</option>
                                                <option>Fail</option>
                                            </select>

                                        </div>
                                    </td>
                                    <td><input type="Submit" class="btn btn-primary" value="Submit"></td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?php require 'header/footer.php' ?>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>