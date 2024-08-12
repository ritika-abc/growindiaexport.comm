<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve the search query
    $query = $_GET["query"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/megadrop.css">
    <style>
        /* Optional: Some basic styling */
        #buyleads {
            display: none;
            /* Hide buyleads by default */
            margin-top: 10px;
            padding: 10px;

        }

        .none {
            display: none;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- top nav start here -->
    <section class="d-none d-sm-none d-md-none d-lg-block">
 <div class="header_top " style="border-bottom: 2px dashed white;background:rgb(11 53 94) ;">
            <ul class="nav p-3  justify-content-center">
                <li class="nav-item "><a href="/" class="nav-link"><img src="logo/logo.png" height="50px" width="180px" alt="http://growindiaexport.com/"></a></li>
            </ul>
        </div>
    </section>
    <!-- logo here -->

    <!-- sm mobile nav start here -->
     <!-- sm mobile nav start here -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex d-sm-flex d-md-flex d-lg-none">
                <div class="container-fluid">
                        <a class="navbar-brand" href="/"><img src="logo/logo.png" height="70px" width="200px" alt="http://growindiaexport.com/"></a>
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



    <!-- Your navigation and other HTML structure -->
    <!-- ... -->

    <div class="container mt-4 bg-light py-5 rounded">
        <div class="row">
        <div class="col-4 d-none d-sm-none d-md-none d-lg-block">
                <div class="serch_buyleads bg-white p-3 rounded">
                    <form id="searchForm">

                        <div class="buyleads_box  border ">
                            <label for="options" class="sticky-top fw-bold fs-5  w-100 p-2" style="background-color: rgb(172 198 221) !important;">State</label>
                            <div class="mt-2 p-3" style="height: 300px;overflow:scroll">
                                
                                <?php
                                
                                include "config.php";
                                $sel = "SELECT * FROM `states`";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {
                                ?>
                                    <a href="search-buyleads.php?query=<?php echo  $query ?>&state_name=<?php echo $row['state_name'] ?>" class="d-block"><?php echo $row['state_name'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="serch_buyleads bg-white p-3 rounded">
                    <form id="searchForm">

                        <div class="buyleads_box  border ">
                            <label for="options" class="sticky-top fw-bold fs-5  w-100 p-2" style="background-color: rgb(172 198 221) !important;">Country</label>
                            <div class="mt-2 p-3" style="height: 300px;overflow:scroll">
                                <?php
                                include "config.php";
                                $sel = "SELECT * FROM `countries`";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {                                ?>
                                    <a href="search-buyleads.php?query=<?php echo  $query ?>&country_name=<?php echo $row['country_name'] ?>" class="d-block"><?php echo $row['country_name'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-8">
  <form action="search-buyleads.php" method="GET" class="d-flex mb-3">
                    <div class="input-group mb-3">
                        <input name="query" type="text" class="form-control" placeholder="Search Buyleads">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>
                </form>
               
                <div class="old">
                    <div class="right_col" role="main">
                        <!-- top tiles -->
                        <div class="row">

                            <?php
                            // Check if the form is submitted
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Retrieve the search query
                                $search_query = $_POST["search_query"];

                                // Connect to your database (replace these variables with your actual database credentials)
                                include "config.php";



                                // Cre


                            ?>

                                <div class="col-12 my-4">



                                    <?php

                                    // SQL query to search for data in your database (replace 'table_name' with your actual table name and 'column_name' with the column you want to search)
                                    $sql1 = "SELECT * FROM `buyleads` WHERE buyer_name LIKE '%" . $search_query . "%'" . " or queiry_for LIKE '%" . $search_query . "%'";
                                    $result = $con->query($sql1);

                                    // Display the results
                                    if ($result->num_rows > 0) {
                                        echo "<h5>Search Results From <i>$search_query</i>:</h5>";
                                        echo "<ul>";
                                        while ($row2 = $result->fetch_assoc()) {
                                            // echo "<li>" . $row["product_name"] . "</li>"; // Display the result here
                                    ?>
                                            <div class="col-12">
                                                <form method="POST" action="get_buylead.php">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="buyleads_cards p-3 shadow-lg   rounded  text-capitalize">
                                                                <h1>ritika </h1>
                                                                <h5><?php echo $row2['queiry_for'] ?> <i class="fa-solid fa-check"></i></h5>
                                                                <ul class="nav justify-content-between">
                                                                    <li class="nav-item"><?php echo $row2['buyer_location'] ?></li>
                                                                    <li class="nav-item"><?php echo $row2['accessed_at'] ?></li>
                                                                </ul>
                                                                <div class="row mt-3 table-borderless">
                                                                    <div class="col-lg-6">
                                                                        <table class="table p-0 m-0">
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0">Buyer Name</th>
                                                                                <td class=" p-0 m-0">: <?php echo $row2['buyer_name'] ?></td>
                                                                            </tr>
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0">Quantity</th>
                                                                                <td class=" p-0 m-0">: <?php echo $row2['quantity'] ?></td>
                                                                            </tr>
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0">Mobile Number</th>
                                                                                <td class=" p-0 m-0">: +91-99******00</td>
                                                                            </tr>

                                                                        </table>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <table class="table p-0 m-0">
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0"> Requirement</th>
                                                                                <td class=" p-0 m-0">: Urgent</td>
                                                                            </tr>
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0"> Email</th>
                                                                               <td class=" p-0 m-0 text-lowercase"> ***@gmail.com</td>
                                                                            </tr>

                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="d-block mt-5 mb-3" style="border-top: 2px dotted gray;"></div>
                                                                <a href="" class="btn btn-dark text-capitalize"> <img src="include/trusted.png" height="50px" width="50px" alt="Trusted Logo"> send Requirement </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-12">

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="buyleads_cards p-3 shadow-lg bg-white rounded  text-capitalize">

                                                            <h5><?php echo $row['queiry_for'] ?> <i class="fa-solid fa-check"></i></h5>
                                                            <ul class="nav justify-content-between">
                                                                <li class="nav-item"><?php echo $row['buyer_location'] ?> </li>
                                                                <li class="nav-item"><?php echo $row['accessed_at'] ?></li>
                                                            </ul>
                                                             <div class="row mt-3  ">
                                                                    <div class="col-lg-6">
                                                                        <table class="table p-0 m-0 table-borderless">
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0  " style="color:#055faf;">Buyer Name :</th>
                                                                                <td class=" p-0 m-0"> <?php echo $row['buyer_name'] ?></td>
                                                                            </tr>
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0 " style="color:#055faf;">Quantity : </th>
                                                                                <td class=" p-0 m-0"><?php echo $row['quantity'] ?></td>
                                                                            </tr>
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0 " style="color:#055faf;">Mobile Number :</th>
                                                                                <td class=" p-0 m-0"> +91-99******00</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                    <table class="table p-0 m-0 table-borderless">
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0  " style="color:#055faf;">Requirement :</th>
                                                                                <td class=" p-0 m-0"> Urgent</td>
                                                                            </tr>
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0 " style="color:#055faf;">Quantity : </th>
                                                                                <td class=" p-0 m-0"><?php echo $row['quantity'] ?></td>
                                                                            </tr>
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0 " style="color:#055faf;">Mobile Number :</th>
                                                                                <td class=" p-0 m-0 text-lowercase"> ***@gmail.com</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            <div class="d-block mt-5 mb-3" style="border-top: 2px dotted gray;"></div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                <?php
                                        }
                                        echo "</ul>";
                                    } else {
                                        echo "No results found";
                                    }

                                    // Close the connection
                                    $con->close();
                                }
                                ?>

                                </div>

                                <?php
                                include "config.php"; // database configuration
                                /* Calculate Offset Code */
                                if (isset($_SESSION["user_id"])) {
                                    $user_id = $_SESSION["user_id"];
                                }
                                //  $product_name =$_GET[$product_name1]  ;
                                $sql = "SELECT * FROM  `buyleads`  ";
                                $result = mysqli_query($con, $sql) or die("Query Failed.");


                                if (mysqli_num_rows($result) > 0) {


                                    $serial =  1;
                                    while ($row = mysqli_fetch_assoc($result)) {


                                ?>
                                        <div class="col-12 mb-4">
                                            <div class="row">
                                                <div class="col-12 my-3 ">
                                                    <div class="row">
                                                        <div class="col-12 ">
                                                            <div class="buyleads_cards p-3 shadow-lg bg-white rounded    text-capitalize" style=" ">
                                                                <!--<h6>Product Name : ?php echo $product_name ?></h6>-->
                                                                <h5 class=" " style="color :#2f3394;font-weight: bold;"><?php echo $row['queiry_for'] ?> <img src="trusted.png" alt="" height="auto" width="10%"> </h5>
                                                                <ul class="nav justify-content-between">
                                                                    <li class="nav-item" title="<?php echo $row['buyer_location'] ?>"> <i class="fa-solid fa-location-dot " style="color: #3fb635;margin-right:10px"></i> <?php echo $row['buyer_location'] ?> </li>
                                                                    <li class="nav-item"><?php echo $row['accessed_at'] ?></li>
                                                                </ul>
                                                              <div class="row mt-3  ">
                                                                    <div class="col-lg-6">
                                                                        <table class="table p-0 m-0 table-borderless">
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0  " style="color:#055faf;">Buyer Name :</th>
                                                                                <td class=" p-0 m-0"> <?php echo $row['buyer_name'] ?></td>
                                                                            </tr>
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0 " style="color:#055faf;">Quantity : </th>
                                                                                <td class=" p-0 m-0"><?php echo $row['quantity'] ?></td>
                                                                            </tr>
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0 " style="color:#055faf;">Mobile Number :</th>
                                                                                <td class=" p-0 m-0"> +91-99******00</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                    <table class="table p-0 m-0 table-borderless">
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0  " style="color:#055faf;">Requirement :</th>
                                                                                <td class=" p-0 m-0"> Urgent</td>
                                                                            </tr>
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0 " style="color:#055faf;">Quantity : </th>
                                                                                <td class=" p-0 m-0"><?php echo $row['quantity'] ?></td>
                                                                            </tr>
                                                                            <tr class=" p-0 ">
                                                                                <th class=" p-0 m-0 " style="color:#055faf;">Mobile Number :</th>
                                                                                <td class=" p-0 m-0 text-lowercase"> ***@gmail.com</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="d-block mt-5 mb-3" style="border-top: 2px dotted gray;"></div>

                                                                <a href="supplier-register.php" class="btn btn-secondary">Send Requirement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Your scripts -->
    <script>
        $(document).ready(function() {
            $('#searchForm').submit(function(event) {
                event.preventDefault(); // Prevent form submission

                var query = $('#searchInput').val(); // Get the search input value
                var selectedOption = $('#options').val(); // Get the selected option value

                // Perform AJAX request
                $.ajax({
                    url: 'fetch_buyleads.php',
                    type: 'POST',
                    data: {
                        query: query,
                        selectedOption: selectedOption
                    },
                    success: function(response) {
                        // Update the buyleads div with the response
                        $('#buyleads').html(response);
                        $('#buyleads').slideDown(); // Show the buyleads div
                    }
                });
            });

            // Add event listener for 'change' event on select element
            $('#options').change(function() {
                var selectedOption = $(this).val();

                if (selectedOption === 'none') {
                    $('#buyleads').slideUp(); // Hide buyleads if 'Select an option' is selected
                } else {
                    // Perform AJAX request to fetch buyleads based on selected option
                    $.ajax({
                        url: 'fetch_buyleads.php',
                        type: 'POST',
                        data: {
                            selectedOption: selectedOption
                        },
                        success: function(response) {
                            // Update the buyleads div with the response
                            $('#buyleads').html(response);
                            $('#buyleads').slideDown(); // Show the buyleads div
                            $('.old').addClass('none');

                        }
                    });
                }
            });
        });
    </script>
<script src="assets/css/bootstrap.bundle.min.js"></script>

<?php include "footer.php"; ?>