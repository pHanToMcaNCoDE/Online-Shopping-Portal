 <?php
    require('nav.php');
    require('aside.php');
    require('getData.php');

    // $_GET['msg'];


 ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Shopping Portal - Add Brands</title>
     <link rel="stylesheet" href="css/style.css">
     <!-- <link rel="stylesheet" href="assets/sweetalert2/sweetalert2.min.css"> -->
     <!-- <script src="https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script> -->
 </head>

 <body>
     <section class="brand">
         <div class="header">
             <h2>
                 <a href="#">
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-star">
                         <polygon
                             points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                         </polygon>
                     </svg>
                 </a>/ Brands
             </h2>
         </div>
         <div class="max-width">
             <div class="deco">
                 <i class="fa-solid fa-clipboard"></i>
             </div>
             <div class="top">
                 <div class="left">
                     <h2>Brands onboard</h2>
                     <p>strong partnerships</p>
                 </div>
                 <div class="center">
                     <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-search">
                         <circle cx="11" cy="11" r="8"></circle>
                         <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                     </svg>
                     <input type="text" name="search" id="search" placeholder="e.g; biscuit">
                 </div>
                 <div class="right">
                     <a href="brandForm.php">
                         <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-plus-square">
                             <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                             <line x1="12" y1="8" x2="12" y2="16"></line>
                             <line x1="8" y1="12" x2="16" y2="12"></line>
                         </svg>
                         Add a brand
                     </a>
                 </div>
             </div>
             <div class="down">
                 <table class="bTable">
                     <thead>
                         <tr>
                             <th scope="col">Brand Id</th>
                             <th scope="col">Brand Name</th>
                             <th scope="col">E-mail Address</th>
                             <th scope="col">Contact</th>
                             <th scope="col">Status</th>
                             <th scope="col">Rating</th>
                             <th scope="col">Actions</th>
                         </tr>
                     </thead>

                     <tbody>
                         <?php
                            require("dbConnect.php");

                            $con = new mysql(SERVER, USERNAME, PASSWORD, DATABASE);

                            if($con->connet_error){
                                die("Cannot connect to the database ".$con->connect_error);
                            }else{
                                $sql = "SELECT * FROM `Brands`;";

                                $result = $con->query($sql);
                                

                                while($row = $result->fetch_assoc()){
                                    echo "<tr scope='row'> 
                                            <td>" .$row['Brand_ID']. "</td>
                                            <td>" .$row['Brand_Name']. "</td>
                                            <td>" .$row['Brand_Email']. "</td>
                                            <td>" .$row['Brand_Contact']. "</td>
                                            <td>" .$row['Brand_Status']. "</td>
                                            <td>" .$row['Brand_Rating']. "</td>
                                            <td>" .$row['Brand_Rating']. "</td>
                                        </tr>";
                                }
                            }

                        ?>
                         <tr>
                             <td>Yes</td>
                         </tr>

                     </tbody>
                 </table>
             </div>
         </div>
     </section>

     <script src="js/script.js"></script>
     <script src="assets/sweetalert2/sweetalert2.min.js"></script>

     <script>
     Swal.fire(
         'Good job!',
         'You clicked the button!',
         'success'
     )
     </script>

     <!-- <?php

    // require('script.php');

?> -->

 </body>

 </html>