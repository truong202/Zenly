<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenly</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/assets/css/login.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/assets/css/cart.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/assets/css/checkout.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/assets/css/products.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/assets/css/product-details.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/assets/css/reponsive.css">
</head>

<body>
    <div id="app">
        <!-- header -->
        <header class="header container-fluid p-0">
            <!-- header top -->
            <div class="header-top container">
                <!-- logo -->
                <a href="Home">
                    <img src="<?php echo _WEB_ROOT;?>/public/assets/img/logo.png" alt="" class="header-logo">
                </a>

                <!-- search -->
                <div class="header-search header-search-js">
                    <input type="text" placeholder="Tìm kiếm..." class="search-input">
                    <button class="search-btn">
                        <ion-icon name="search" class="search-icon"></ion-icon>
                    </button>
                </div>

                <!-- action -->
                <ul class="action-list">
                    <li class="action-item">
                        <a href="#" class="action-link search-mobile-btn search-mobile-btn-js">
                            <ion-icon name="search" class="action-icon search-icon"></ion-icon>
                        </a>
                    </li>
                    <li class="action-item user">
                        <a href="#" class="action-link">
                            <ion-icon name="person-circle" class="action-icon"></ion-icon>
                        </a>
                        <ul class="option-list">
                            <li class="option-item">
                                <a href="Login" class="option-link">Đăng nhập</a>
                            </li>
                            <li class="option-item">
                                <a href="Register" class="option-link">Đăng kí</a>
                            </li>
                        </ul>
                    </li>
                    <li class="action-item cart">
                        <a href="Cart" class="action-link">
                            <ion-icon name="bag-outline" class="action-icon cart-icon"></ion-icon>
                            <span class="cart-quantity">1</span>
                        </a>
                    </li>
                    <li class="action-item">
                        <span class="menu-mobile-btn menu-mobile-btn-js">
                            <i class="fa-solid fa-bars action-icon menu-icon"></i>
                        </span>
                    </li>
                </ul>
            </div>
            <!-- end header top -->

            <!-- header bottom -->
            <div class="header-bottom container">
                <ul class="navbar p-0">
                    <li class="navbar-item">
                        <a href="" class="navbar-link">Trang chủ</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="navbar-link">Sản phẩm
                            <ion-icon name="chevron-down-outline" class="navbar-icon"></ion-icon>
                        </a>
                        <ul class="dropdow">
                            <li class="dropdow-item">
                                <a href="products.html" class="dropdow-link">Áo</a>
                            </li>
                            <li class="dropdow-item">
                                <a href="products.html" class="dropdow-link">Quần</a>
                            </li>
                            <li class="dropdow-item">
                                <a href="products.html" class="dropdow-link">Phụ kiện</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item">
                        <a href="" class="navbar-link">Khuyến mại</a>
                    </li>
                    <li class="navbar-item">
                        <a href="" class="navbar-link">Tin tức</a>
                    </li>
                    <li class="navbar-item">
                        <a href="" class="navbar-link">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </header>