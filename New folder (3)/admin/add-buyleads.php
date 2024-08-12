<?php
//  isert and check the details

include "config.php";
include_once "include/header.php";



?>
<?php


if (isset($_POST['submit'])) {
    $buyer_name = $_POST['buyer_name'];
    $queiry_for = $_POST['queiry_for'];
    $number = $_POST['number'];
    $accessed_at = $_POST['accessed_at'];
    $buyer_email = $_POST['buyer_email'];
    $buyer_location = $_POST['buyer_location'];
    $product_name = $_POST['product_name'];
    
    
        $ins = "INSERT INTO `buyleads`(`buyer_name`,`queiry_for`,`number`,`accessed_at`,`buyer_email`,`buyer_location`,`product_name`) VALUES ('$buyer_name','$queiry_for','$number','$accessed_at','$buyer_email','$buyer_location','$product_name') ";
        $qu = mysqli_query($con, $ins);
       
   
  

}

?>


<!-- new data -->
<div class="right_col" role="main">
    <div class="container mt-5">
        <div class="row  justify-content-center">
            <div class="col-7">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="my-3">
                        <label for="">Buyer :</label>
                        <input type="text" name="buyer_name" class="form-control  " placeholder="Buyer Name">
                    </div>
                    <div class="my-3">
                        <label for="">Enquiry For :</label>
                        <textarea name="queiry_for" class="w-100" id=""></textarea>
                    </div>
                    <div class="my-3">
                        <label for="">Number :</label>
                        <input type="number" name="number" class="form-control" placeholder="Add Number">
                    </div>
                    <div class="my-3">
                        <label for="">Date</label>
                        <input type="date" name="accessed_at" class="form-control" placeholder="Date">
                    </div>
                    <div class="my-3">
                        <label for="">Buyer Email</label>
                        <input type="email" name="buyer_email" class="form-control" placeholder="Buyer Email Id">
                    </div>
                    <div class="my-3">
                        <label for="">Buyer location</label>
                        <input type="text" name="buyer_location" class="form-control" placeholder="Location">
                    </div>
                    <div class="my-3">
                        <label for="">product Name</label>
                        <input type="text" name="product_name" class="form-control" placeholder="Product Name">
                    </div>
                    <button class="btn btn-success mt-2 px-3" name="submit" type="submit">Submit</button>
                    <button class="btn btn-success mt-2 px-3" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>

</div>




<!-- /page content -->
<?php
include_once "include/footer.php";
?>