<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Portal || Settings</title>
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
                        <li>
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
                        <li class="current">
                            <i class="fa-solid fa-key"></i>
                            <a href="Brands.php">Password</a>
                        </li>
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
                            <i class="fa-solid fa-arrow-right-from-bracket fa-flip"></i>
                            <a href="#">Sign-out</a>
                        </li>
                    </ul>
                </div>
            </aside>
            <main class="password" role="main">
                <div class="deco">
                    <i class="fa-solid fa-clipboard"></i>
                </div>
                <div class="header">
                    <h2>
                        <a href="Products.php">
                            <i class="fa-solid fa-key"></i>
                        </a>/ Password
                    </h2>
                </div>
                <div class="pwd">
                    <div class="txt">
                        <h2>Account Password</h2>
                        <div class="line"></div>
                    </div>
                    <div class="container">
                        <form class="pwd">
                            <div class="align">
                                <label>Password:</label>
                                <input name='pwd' value='1wE324#$'>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </section>

    <script src="js/script.js"></script>
</body>

</html>