<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale= 1, user-scalable=0">
    <title>Shopping Cart || Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <nav>
            <div class="left">
                <a class="logo" href="https://victory-odumeh.vercel.app/">
                    <i class="fa-solid fa-ghost fa-bounce"></i>
                    phantomcancode
                </a>
                <svg id="left" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </div>
            <div class="right">
                <li>
                    <a href="#"><i class="fa-solid fa-bell fa-shake"></i></a>
                    <div class="num">1</div>
                </li>
                <div class="user">
                    <img src="assets/vick.png" alt="username">
                    <p>Victory Odumeh</p>
                </div>
            </div>
        </nav>
    </header>

    <!--------------------------------------------------------------------------------
    # Dashboard
------------------------------------------------------------------------------------>

    <section class="dashboard">
        <div class="max-width">

            <aside>
                <div class=" x">
                    <svg class="x" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </div>
                <div class="content">
                    <ul class="aside-up">
                        <li>
                            <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                            <a href="Brands.php">Brands</a>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-gift">
                                <polyline points="20 12 20 22 4 22 4 12"></polyline>
                                <rect x="2" y="7" width="20" height="5"></rect>
                                <line x1="12" y1="22" x2="12" y2="7"></line>
                                <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                                <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                            </svg>
                            <a href="Products.php">Products</a>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-truck">
                                <rect x="1" y="3" width="15" height="13"></rect>
                                <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                <circle cx="18.5" cy="18.5" r="2.5"></circle>
                            </svg>
                            <a href="Orders.php">Orders</a>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <a href="#">Customers</a>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <a href="#">Vendors</a>
                        </li>
                    </ul>
                    <ul class="aside-down">
                        <li>
                            <i class="fa-solid fa-gear fa-spin fa-spin-reverse"></i>
                            <a href="#">Settings</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right-from-bracket fa-flip"></i>
                            <a href="#">Sign-out</a>
                        </li>
                    </ul>
                </div>
            </aside>

            <main role="main">
                <div class="header">
                    <h2>
                        <a href="index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                        </a>/ Dashboard
                    </h2>
                </div>
                <div class="row">
                    <div class="box">
                        <div class="top">
                            <div class="left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-truck">
                                    <rect x="1" y="3" width="15" height="13"></rect>
                                    <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                    <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                    <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                </svg>
                            </div>
                            <div class="right">
                                <p>Orders</p>
                                <h4>0</h4>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="box-link">
                                <a href="#">view more <i class="fa-solid fa-arrow-right-long fa-beat"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="top">
                            <div class="left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-gift">
                                    <polyline points="20 12 20 22 4 22 4 12"></polyline>
                                    <rect x="2" y="7" width="20" height="5"></rect>
                                    <line x1="12" y1="22" x2="12" y2="7"></line>
                                    <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                                    <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                                </svg>
                            </div>
                            <div class="right">
                                <p>Products</p>
                                <h4>0</h4>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="box-link">
                                <a href="#">view more <i class="fa-solid fa-arrow-right-long fa-beat"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="top">
                            <div class="left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <div class="right">
                                <p>Vendors</p>
                                <h4>0</h4>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="box-link">
                                <a href="#">view more <i class="fa-solid fa-arrow-right-long fa-beat"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="box">
                        <div class="top">
                            <div class="left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <div class="right">
                                <p>Customers</p>
                                <h4>0</h4>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="box-link">
                                <a href="#">view more <i class="fa-solid fa-arrow-right-long fa-beat"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="top">
                            <div class="left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-star">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg>
                            </div>
                            <div class="right">
                                <p>Brands</p>
                                <h4>0</h4>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="box-link">
                                <a href="#">view more <i class="fa-solid fa-arrow-right-long fa-beat"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table">
                    <div class="header2">
                        <h2>Recent orders</h2>
                        <p>from collection by order</p>
                    </div>
                    <table class="stats">
                        <tr>
                            <th>#</th>
                            <th>Id</th>
                            <th>Customer Fullname</th>
                            <th>Delivery Date</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>prd1/2eC</td>
                            <td>Kia spotage</td>
                            <td>11-12-23</td>
                            <td>
                                <svg class="yes" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>prd2/1eC</td>
                            <td>Mercedes c300</td>
                            <td>12-02-22</td>
                            <td>
                                <svg class="yes" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>prd3/fR12</td>
                            <td>Indomie</td>
                            <td>11-11-22</td>
                            <td>
                                <svg class="no" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                </svg>
                            </td>
                        </tr>
                        <div class="box-link">
                            <a href="#">view more<i class="fa-solid fa-arrow-right-long fa-beat"></i></a>
                        </div>
                    </table>
                </div>
            </main>
        </div>
    </section>


    <script src="js/script.js"></script>
</body>

</html>