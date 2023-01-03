<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div> -->
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php
        require_once("config.php");
        session_start();
        include("./includers/sidebar.php");
        
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">

        
            <!-- Navbar Start -->
            <?php
            include("./include/include_navbar.php");
            ?>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <!-- <div class="col-md-6 text-center">
                        <h3>This is blank page</h3>
                    </div> -->
                    <?php

                   // build a head of table
                    $html = "<div class='col-sm-12 col-xl-12'>
                        <div class='bg-secondary rounded h-100 p-4'>
                            <h6 class='mb-4'><a href='add_product.php'>Add Product</a></h6>
                            <table  class='table table-dark'>
                                <thead>
                                    <tr>
                                        <th scope='col'>product_name</th>
                                        <th scope='col'>product_category</th>
                                        <th scope='col'>description</th>
                                        <th scope='col'>model_year</th>
                                        <th scope='col'>price</th>
                                        <th scope='col'>pic_main</th>
                                        <th scope='col'>in_stock</th>
                                        <th scope='col'>discount</th>
                                        <th scope='col'>Response</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>";   
                                // build body table from products table that exist in database
                                require_once("config.php");
                                $sql = "SELECT * FROM products"; // query sentence
                                $conn->query($sql); // execute query 
                                $array = ($conn->query($sql));                 
                                    foreach($array as $ele){
                                        if($ele['product_is_deleted'] == 0){
                                    
                                        $P_id=$ele['product_id'];
                                        $proname=$ele['product_name'];
                                        $procategory=$ele['category_id'];
                                        $desc=$ele['description'];
                                        $mod=$ele['model_year'];
                                        $pri=$ele['price'];
                                        $pic=$ele['pic_main'];
                                        $sto=$ele['in_stock'];
                                        $dis=$ele['discount'];

                                $html .= "<tr><td>$proname</td>";
                                $html .= "<td>$procategory</td>";
                                $html .= "<td>$desc</td>";
                                $html .= "<td>$mod</td>";
                                $html .= "<td>$pri</td>";
                                $html .= "<td><img width='100px';height='100px' src='../admin_dashboard/img/products/$pic'></td>";
                                $html .= "<td>$sto</td>";
                                $html .= "<td>$dis</td>";
                                $html .= "<td><a href='delete_product.php?deleteid=$P_id'><button>delete</button></a><hr><a href='edit_product.php?editid=$P_id'><buttont>edit</a></button></a></td></tr>";

                            } }
                                    $html .= 
                                "</tbody>
                            </table>
                            </div>
                        </div>";
                        echo $html;
// $picc= "SELECT `pic_main` FROM `products` WHERE product_id=$P_id";
// $piccc=$conn->query($picc);
// foreach($piccc as $elem){
//     echo $elem["pic_main"];
// }
                    ?>
                    




                </div>
            </div>
            <!-- Blank End -->


            <!-- Footer Start -->
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end"> -->
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>