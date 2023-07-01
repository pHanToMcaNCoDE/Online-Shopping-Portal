<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Portal || Products</title>
    <link rel="stylesheet" href="css/settings.css">
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
                    <img src="assets/vick.png" alt="username">
                    <p>Victory Odumeh</p>
                </div>
            </div>
        </nav>
    </header>

    <section class="settings">
        <div class="max-width">
            <aside style="width: 23%; height: 100vh;">
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
                        <li class="current">
                            <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                            <a href="index.php">Account</a>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                            <a href="Brands.php">Password</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right-from-bracket fa-flip"></i>
                            <a href="#">Sign-out</a>
                        </li>
                    </ul>
                </div>
            </aside>
            <main class="settings" role="main">
                <div class="deco">
                    <i class="fa-solid fa-clipboard"></i>
                </div>
                <div class="header">
                    <h2>
                        <a href="Products.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-gift">
                                <polyline points="20 12 20 22 4 22 4 12"></polyline>
                                <rect x="2" y="7" width="20" height="5"></rect>
                                <line x1="12" y1="22" x2="12" y2="7"></line>
                                <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                                <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                            </svg>
                        </a>/ Settings
                    </h2>
                </div>
                <div class="set">
                    <div class="view">
                        <div class="txt">
                            <h2>Account Overview</h2>
                            <div class="line"></div>
                        </div>
                        <div class="row">
                            <img src="assets/vick.png" alt="">
                            <div class="container">

                            </div>
                        </div>
                    </div>
                </div>
            </main>
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

</body>

</html>