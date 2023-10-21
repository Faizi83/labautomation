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
<!-- PHP for database -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $product_name = $_POST["Product_Name"]; // Note the capitalization
    $status = $_POST["status"];

    // Assuming you have established a database connection earlier
    $insert_query = "INSERT INTO `category`(`category_name`, `category_status`) VALUES (:category_name, :category_status)";
    $insert_query_prepare = $connection->prepare($insert_query);
    
    // Use bindValue to bind the parameters
    $insert_query_prepare->bindValue(':category_name', $product_name, PDO::PARAM_STR);
    $insert_query_prepare->bindValue(':category_status', $status, PDO::PARAM_STR);

    $insert_query_prepare->execute();

    // Redirect or display a success message
    header("Location: add_category.php");
     // Redirect to a success page
    exit;
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

    <title>Add Product</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
            <h1 style="color: rgba(31, 28, 28, 0.726);" class="h3 mb-4 font-weight-bold  text-center">Add Categories</h1>
            <hr>

            <!-- Form Start -->
            <div class="container mt-5 p-container">
                <div class="row ">
                    <div class="col-lg-7 mx-auto">
                        <div class="card mt-2 mx-auto p-4 bg-light">
                            <div class="card-body bg-light">

                                <div class="container">
                                    <form action="add_category.php" method="post">



                                        <div class="controls">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_name">Product Name</label>
                                                        <input id="form_name" type="text" name="Product_Name" class="form-control" placeholder="Product Name" required="required" data-error="Username is required.">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Status</label>

                                                        <select id="form_need" name="status" class="form-control" data-error="Please specify your need." required>
                                                            <option value="" selected disabled>---Select---</option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-12">

                                                    <input type="submit" class="btn btn-primary btn-send  pt-2 btn-block
                                        " value="Add Product" name="submit">

                                                </div>

                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <!-- /.8 -->

                    </div>
                    <!-- /.row-->

                </div>
            </div>
            <!-- Form End -->



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

</body>

</html>