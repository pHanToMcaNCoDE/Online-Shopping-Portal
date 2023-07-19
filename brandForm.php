<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Portal || Vendors</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" href="assets/sweetalert2/sweetalert2.min.css"> -->
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
                <div class="user">
                    <i class="fa-solid fa-arrow-right-from-bracket fa-flip"></i>
                    <a href="#" style="margin-left: .3em; color: var(--bl);">Sign-out</a>
                </div>
            </div>
        </nav>
    </header>

    <section class="brand-form-page">
        <div class="max-width">
            <aside style="width: 35%; height: 100vh;">
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
                        <li class="current">
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
                            <a href="Customers.php">Customers</a>
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
                            <a href="Vendors.php">Vendors</a>
                        </li>
                    </ul>
                    <ul class="aside-down">
                        <li>
                            <i class="fa-solid fa-user"></i>
                            <a href="Account.php">Account</a>
                        </li>
                    </ul>
                </div>
            </aside>
            <main class="bnd" role="main">
                <div class="deco">
                    <i class="fa-solid fa-clipboard"></i>
                </div>
                <div class="header">
                    <h2>
                        <a href="Brands.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </a>/ Add brands
                    </h2>
                </div>
                <div class="top" style="font-size: 1.2rem; text-align: center; position: absolute; left: 45%;">
                    <div class="left">
                        <h2>Add Brands</h2>
                    </div>
                </div>
                <div class="down">
                    <form class="bForm" action="" method="" style=" position: absolute; top: 23%; left: 30%;">
                        <div class=" content">
                            <div class="item">
                                <label for="brandID">Brand ID:</label>
                                <input class="" type="text" placeholder="">
                            </div>
                            <div class="item">
                                <label for="brandName">Brand Name:</label>
                                <input class="" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="content">
                            <div class="item">
                                <label for="emailAddress">E-mail Address:</label>
                                <input class="" type="text" placeholder="">
                            </div>
                            <div class="item">
                                <label for="contact">Contact:</label>
                                <input class="" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="content">
                            <div class="item">
                                <label for="status">Status:</label>
                                <input class="" type="text" placeholder="">
                            </div>
                            <div class="item">
                                <label for="rating">Rating:</label>
                                <input class="" type="text" placeholder="">
                            </div>
                        </div>

                        <div class="brand-btn">
                            <input type="submit" value="Add Brand">
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </section>

    <script src="js/script.js"></script>
</body>

</html>