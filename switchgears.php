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

if(isset($_POST['submit'])) 
		{

         $username = $_POST['username'];
         $date = $_POST['date'];
         $rating = $_POST['rating'];
         $testing_type = $_POST['testing-type'];
         $desc = $_POST['desc'];


         $insert_query = "INSERT INTO `switchgears`(`username`, `date`, `rating`, `testing_type`, `description`) VALUES (:username, :date, :rating, :testing_type, :desc)";
         $insert_query_prepare = $connection->prepare($insert_query);
         $insert_query_prepare->bindParam(':username',$username,PDO::PARAM_STR);
         $insert_query_prepare->bindParam(':date',$date,PDO::PARAM_STR);
         $insert_query_prepare->bindParam(':rating',$rating,PDO::PARAM_INT);
         $insert_query_prepare->bindParam(':testing_type',$testing_type,PDO::PARAM_STR);
         $insert_query_prepare->bindParam(':desc',$desc,PDO::PARAM_STR);

         $insert_query_prepare->execute();







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

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
                    <h1 style="color: rgba(31, 28, 28, 0.726);"  class="h3 mb-4 font-weight-bold  text-center">Switch Gears Testing</h1>
                    <hr>

                    <!-- Form Start -->
                    <div class="container mt-5 p-container"> 
                    <div class="row ">
                      <div class="col-lg-7 mx-auto">
                        <div class="card mt-2 mx-auto p-4 bg-light">
                            <div class="card-body bg-light">
                       
                            <div class = "container">
                        <form action="#" id="contact-form" role="form" method="post">
                
                            
                
                            <div class="controls">
                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Username</label>
                                            <input id="form_name" type="text" name="username" class="form-control" placeholder="Your Name"  required="required" data-error="Username is required.">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Date</label>
                                            <input id="form_lastname" type="date" name="date" class="form-control" required="required" data-error="Date is required.">
                                                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email"> Fuse Rating (V)</label>
                                            <input id="form_email" type="number" min="1" max="5" name="rating" class="form-control"  placeholder="Rate out of 5"  required="required" data-error="Rating is required.">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_need">Testing Type</label>
                                            <select id="form_need" name="testing-type" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="" selected disabled>--Select Your Issue--</option>
                                                <option >Strength Test</option>
                                                <option >Operation Test</option>
                                                <option >Protection Test</option>
                                                <option >Relay Testi</option>
                                                <option >Other</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Description</label>
                                            <textarea id="form_message" name="desc" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                                >
                                            </div>
                
                                        </div>
                
                
                                    <div class="col-md-12">
                                        
                                        <input type="submit" class="btn btn-primary btn-send  pt-2 btn-block
                                        " value="Send For Testing" name="submit" >
                                    
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
            <?php require'header/footer.php' ?>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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