<?php

require('getData.php');
require('dbConnect.php');



if(isset($_GET['data']) && $_GET['data'] == "added"){

  $bID = $_POST['bID'];
  $bName = $_POST['bName'];
  $bEmail = $_POST['bEmail'];
  $contact = $_POST['bContact'];  
  $status = $_POST['bStatus'];
  $rating = $_POST['bRating'];

  $brand = new Brands();

  if($brand->getBrands($bID, $bName, $bEmail, $contact, $status, $rating)){
   
    // $_SESSION['status'] = 'Brand Added Successfully!!';
    // $_SESSION['status_icon'] = 'success';
    header("Location: Brand.php");

  }else{

    // $_SESSION['status'] = 'Brand  Not Added!!';
    // $_SESSION['status_icon'] = 'error';
    header("Location: brandForm.php");
  }
}



?>