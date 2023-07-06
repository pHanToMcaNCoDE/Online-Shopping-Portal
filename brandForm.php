<?php

// require('nav.php');
// require('aside.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Portal - Add Brands</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <!-- <script src="sweetalert2/jquery-3.6.4.min.js"></script>
    <script src="sweetalert2/sweetalert2.all.min.js"></script> -->
</head>

<body>


    <section class="bForm">
        <div class="header">
            <h2>Add Brands</h2>
        </div>
        <form class="brForm" action="operations.php?data=added" method="POST">
            <div class="max-width">
                <div class="row-t">
                    <div class="items">
                        <label for="brandID">Brand ID:</label>
                        <input type="text" name="bID" id="bID" placeholder="e.g; B/milo1">
                    </div>
                    <div class="items">
                        <label for="brandName">Brand Name</label>
                        <input type="text" name="bName" id="bName" placeholder="e.g; Milo Tea">
                    </div>
                    <div class="items">
                        <label for="email">E-mail Address:</label>
                        <input type="email" name="bEmail" id="bEmail" placeholder="e.g; support@milo.co">
                    </div>


                </div>
                <div class="row-c">
                    <div class="items">
                        <label for="contact">Contact Info:</label>
                        <input type="text" name="bContact" id="bContact" placeholder="e.g; +1 (23) 000-000">
                    </div>

                    <div class="items">
                        <label for="status">Status:</label>
                        <select name="bStatus" id="status">
                            <option>-- select the status of the brand ---</option>
                            <option value="Active">Active</option>
                            <option value="Not Active">Not Active</option>
                        </select>
                    </div>
                </div>
                <div class="row-b">
                    <div class="items">
                        <label for="rating">Rating:</label>
                        <select name="bRating" id="rating">
                            <option>--- select rating ---</option>
                            <option value="1 star">
                                1 Star
                            </option>
                            <option value="2 star">
                                2 Star
                            </option>
                            <option value="3 star">
                                3 Star
                            </option>
                            <option value="4 star">
                                4 Star
                            </option>
                            <option value="5 star">
                                5 Star
                            </option>
                        </select>

                    </div>
                </div>
                <div class="btn">
                    <input class="submit" type="submit" value="Add Brand" style="cursor: pointer;">
                </div>
            </div>
        </form>
    </section>

    <script src="js/script.js"></script>
</body>

</html>