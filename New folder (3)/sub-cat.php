 

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="assets/css/megadrop.css">
       <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
        <script src="assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
        <script src="assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

        <style>
                body {
                        background-color: #fdfdfd !important;
                        font-family: "Roboto", sans-serif;
                }
                 a{
                    text-decoration:none !important;
                }
                

        </style>
</head>

<body>

      <!-- top nav start here -->
        <section class="d-none d-sm-none d-md-none d-lg-block">
                <div class="top_nav">
                        <div class="container">
                                <div class="row">
                                        <div class="col-12">
                                                <ul class="nav py-2">
                                                        <!--<li class="nav-item"><a href="supplier-login.php" class="btn btn-dark mt-1"> Login Supplier </a></li>-->
                                                        <div class="btn-group">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Login Here
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="supplier-login.php"> Login Supplier</a></li>
                                                                        <li><a class="dropdown-item" href="admin/index.php">Login User</a></li>

                                                                </ul>
                                                        </div>
                                                        <li class="nav-item   w-50"><a href="" class="nav-link text-white">
                                                                        <marquee behavior="" direction="">Lorem, ipsum dolor sit amet consectetur adipisicing
                                                                                elit. Quisquam, et.</marquee>
                                                                </a></li>
                                                        <li class="nav-item ms-auto "><a href="4" class="nav-link  text-white">+91 7686*****</a></li>
                                                        <li class="nav-item dropdown">
                                                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        For Buyers
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="post-requirement.php">Post Requirement</a></li>
                                                                        <li><a class="dropdown-item" href="all-category.php">Browse Suppliers</a></li>
                                                                        <li>
                                                                                <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">FAQ</a></li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        For Seller
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="supplier-register.php">Sell Your Product / <small class="text-danger">Register Now</small></a></li>
                                                                        <li><a class="dropdown-item" href="buyleads.php">New Buyleads </a></li>
                                                                        <li>
                                                                                <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Seller FAQ</a></li>
                                                                </ul>
                                                        </li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                </div>
                <!-- top nav end here -->

                <!-- logo here -->
                <div class="header_top bg-white">
                        <ul class="nav p-3 border shadow-sm">
                                <li class="nav-item me-auto"><a href="/" class="nav-link"><img src="logo/logo.png" height="75px" width="256px" alt="https://growindiaexport.com/"></a></li>
                                <li class="nav-item mt-3">
                                        <form action="search-product.php" method="GET">
                                                <div class="input_box   ">
                                                        <input type="search" placeholder="Search Here By Product Name / Company Name" name="query" class="p-2 px-3 border-end">
                                                        <button class="px-2" type="submit">Submit</button>
                                                </div>
                                        </form>
                                </li>
                                <li class="nav-item  "><a href="" class="nav-link"> <a href="post-requirement.php" class="btn btn-primary px-3 mx-2 rounded-pill">Post Your Buy Requirement</a></a></li>
                        </ul>
                </div>
        </section>
        <!-- logo here -->

        <!-- sm mobile nav start here -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex d-sm-flex d-md-flex d-lg-none">
                <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="logo/logo.png" height="70px" width="200px" alt="http://growindiaexport.com/"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                        <!-- <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                                        </li> -->
                                        <!-- <li class="nav-item">
                                                <a class="nav-link" href="#">  </a>
                                        </li> -->
                                        <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" style="color: rgb(11 46 135);" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        For Buyers
                                                </a>
                                                <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="https://growindiaexport.com/all-category.php"><i class="fa-solid fa-list"></i> Browse Suppliers</a></li>
                                                        <li><a class="dropdown-item" href="https://growindiaexport.com/post-requirement.php"><i class="fa-solid fa-pen"></i> Post Buy Requirement</a></li>
                                                        <li>
                                                                <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Buyers FAQ</a></li>
                                                </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" style="color: rgb(11 46 135);" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        For Suppliers
                                                </a>
                                                <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="https://growindiaexport.com/supplier-register.php"><i class="fa-solid fa-bullhorn"></i> Sell your Product</a></li>
                                                        <li><a class="dropdown-item" href="https://growindiaexport.com/buyleads.php"><i class="fa-solid fa-tag"></i> Latest Buy Leads</a></li>
                                                        <li>
                                                                <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger" href="https://growindiaexport.com/supplier-register.php">Create Account</a></li>
                                                        <li><a class="dropdown-item text-success" href="https://growindiaexport.com/supplier-login.php">Login Here</a></li>
                                                </ul>
                                        </li>
                                        <hr>
                                        <li class="nav-item">
                                                <a class="nav-link  " href="/" style="color: rgb(11 46 135);">Home</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link  " href="about.php" style="color: rgb(11 46 135);"> Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link  " href="contact.php" style="color: rgb(11 46 135);"> Advertise with Us</a>
                                        </li>
                                </ul>
                                <form action="search-product.php" method="GET" class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search Here By Product Name / Company Name" name="query">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                        </div>
                </div>
        </nav>
        <!-- sm mobile nav end here -->
        <!-- lg nav bar start here -->
    <div class="container-fluid my-2">
        <div class="row">
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                        <!--  -->
                        <?php
                        include "config.php";
                        $sub_id = $_GET['sub_id'];
                        $select = "SELECT * from `sub_cat` where `sub_id`='$sub_id'";
                        $qu = mysqli_query($con, $select);
                        $s_no = 1;
                        while ($row = mysqli_fetch_array($qu)) {
                            //      $sub_id = $row['sub_id']; 
                        ?>
                            <li class="breadcrumb-item"> <?php echo $row['sub_cat_name'] ?> </li>

                        <?php } ?>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- members -->
    <!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            <marquee behavior="" direction="">
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
            </marquee>
        </div>
    </div>
  </div> -->

    <?php
    include "config.php";
    $sub_id = $_GET['sub_id'];
    $state_name = $_GET['state_name'];
    $select = "SELECT * from `inner_cat` where `sub_id`='$sub_id' ";
    $qu = mysqli_query($con, $select);
    $s_no = 1;
    while ($row = mysqli_fetch_array($qu)) {
        // $sub_id = $row['sub_id'];
        $inner_cat_id = $row['inner_cat_id'];

    ?>
        <div class="container shadow-lg   border-3 border-dark my-5 p-3 border rounded bg-white">
            <h5><?php echo $row['inner_cat_name'] ?></h5>
            <div class="row">
                <?php
                include "config.php";
                // $inner_cat_id = $_GET['inner_cat_id'];
                $select1 = "SELECT * from `micro` where `inner_cat_id`='$inner_cat_id' ";
                $qu1 = mysqli_query($con, $select1);

                while ($row1 = mysqli_fetch_array($qu1)) {
                    $micro_cat_image = $row1['micro_cat_image'];

                ?>
                    <div class="col-6 col-md-4 col-lg-2 my-2">
                        <a href="micro-category.php?micro_id=<?php echo $row1['micro_id'] ?>&state_name=<?php echo $state_name?>" class="text-decoration-none text-dark border   d-block p-2 rounded">
                            <div class="text-center ">
                                <div class=" ">
                                    <img src="./admin/<?php echo $row1['micro_cat_image'] ?>" class="rounded mb-2 " height="100px" style="object-fit:cover" width="80%" alt="">
                                    <p ><?php echo $row1['micro_name'] ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>




    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 7
                    }
                }
            })
        })
    </script>
<?php include "footer.php"; ?>