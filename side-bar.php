<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>
<body>
    <div class="user-dashboard">
        <div class="sidebar-main-area res-sidebar">
            <div class="res-menu-close-btn">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="sidebar-toggle-btn-area">
                <i class="fa-solid fa-arrow-left"></i>
            </div>
            <div class="sidebar-area">
                <img class="img-fluid side-bar-logo" src="./assets/images/sidebar-logo.png" alt="">
            </div>
            <nav class="side-bar-navigation">
                <ul class="nav-area">
                    <li class="side-bar-link">
                        <a href="index.php" class="nav-links    ">
                            <div class="side-bar-icon-area">
                                <i class="fa-solid fa-chart-simple"></i>
                            </div>
                            <div class="">
                                <h3>Dashboard</h3>
                            </div>
                        </a>
                    </li>
                    <li class="side-bar-link">
                        <a href="profile.php" class="nav-links">
                            <div class="side-bar-icon-area">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="">
                                <h3>Profile</h3>
                            </div>
                        </a>
                    </li>
                    <li class="side-bar-link checkout-click">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex">
                                <div class="side-bar-icon-area">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                                <div class="">
                                    <h3>Checkout</h3>
                                </div>
                            </div>
                            <div class="">
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                        </div>
                        <ul class="checkout-ul">
                            <li>
                                <a class="checkout-link" href="billing-information.php">
                                    <span>
                                        Shipping Info
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                                        <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                                        <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="checkout-link" href="payment-information.php">
                                    <span>Payment Info</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-bar-link">
                        <a href="my-orders.php" class="nav-links">
                            <div class="side-bar-icon-area">
                                <i class="fa-solid fa-chart-simple"></i>
                            </div>
                            <div class="">
                                <h3>Orders</h3>
                            </div>
                        </a>
                    </li>
                    <li class="side-bar-link">
                        <a href="coupons.php" class="nav-links">
                            <div class="side-bar-icon-area">
                                <i class="fa-solid fa-sack-dollar"></i>
                            </div>
                            <div class="">
                                <h3>Coupons</h3>
                            </div>
                        </a>
                    </li>
                    <li class="side-bar-link">
                        <a href="cart.php" class="nav-links">
                            <div class="side-bar-icon-area">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <div class="">
                                <h3>Cart</h3>
                            </div>
                        </a>
                    </li>
                    <li class="side-bar-link">
                        <a href="my-wishlist.php" class="nav-links">
                            <div class="side-bar-icon-area">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="">
                                <h3>My Wishlist</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>