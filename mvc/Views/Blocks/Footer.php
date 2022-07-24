<footer class="footer container-fluid p-0">
    <div class="footer-content container">
        <div class="row gx-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="title">Chăm sóc khách hàng</h3>
                <ul>
                    <li><a href="">Trung tâm trợ giúp</a></li>
                    <li><a href="">Hướng dẫn mua hàng</a></li>
                    <li><a href="">Thanh toán</a></li>
                    <li><a href="">Chính sách đổi trả</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="title">Sản phẩm</h3>
                <ul>
                    <li><a href="products.html">Quần</a></li>
                    <li><a href="products.html">Áo</a></li>
                    <li><a href="products.html">Phụ kiện</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="title">Về chúng tôi</h3>
                <ul>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="">Điều khoản</a></li>
                    <li><a href="">Chính sách bảo mật</a></li>
                    <li><a href="">Liên hệ</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="title">Theo dõi</h3>
                <ul>
                    <li><a href=""><i class="fa-brands fa-facebook-square social-icon"></i>Facebook</a></li>
                    <li><a href=""><i class="fa-brands fa-instagram-square social-icon"></i>Instagram</a></li>
                    <li><a href=""><i class="fa-brands fa-twitter-square social-icon"></i>Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>Copyright @2022 Zenly.</p>
    </div>
</footer>
<div class="modal">
    <div class="modal-body">
        <div class="filter">
            <div class="filter-mobile">
                <ion-icon name="close" class="close-btn"></ion-icon>
                <div class="wrapper">
                    <section class="section-filter">
                        <a href="#filter-category" data-bs-toggle="collapse" aria-expanded="false" aria-controls="filter-category">
                            <h4 class="filter-name">Danh mục</h4>
                            <ion-icon name="chevron-up-outline" class="filter-icon"></ion-icon>
                        </a>
                        <div class="collapse show" id="filter-category">
                            <ul class="filter-list">
                                <li class="filter-item">
                                    <label for="categorym1" class="container-check">
                                        <input type="checkbox" name="category" id="categorym1">
                                        <div class="check-mark"></div>
                                        <span>Quần nam</span>
                                    </label>
                                </li>
                                <li class="filter-item">
                                    <label for="categorym2" class="container-check">
                                        <input type="checkbox" name="category" id="categorym2">
                                        <div class="check-mark"></div>
                                        <span>Quần nam</span>
                                    </label>
                                </li>
                                <li class="filter-item">
                                    <label for="categorym3" class="container-check">
                                        <input type="checkbox" name="category" id="categorym3">
                                        <div class="check-mark"></div>
                                        <span>Quần nam</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="section-filter">
                        <a href="#filter-color" data-bs-toggle="collapse" aria-expanded="false" aria-controls="filter-color">
                            <h4 class="filter-name">Màu sắc</h4>
                            <ion-icon name="chevron-up-outline" class="filter-icon"></ion-icon>
                        </a>
                        <div class="collapse show" id="filter-color">
                            <ul class="filter-list">
                                <li class="filter-item">
                                    <label for="colorm1" class="container-check">
                                        <input type="checkbox" name="color" id="colorm1">
                                        <div class="check-mark"></div>
                                        <span>Xanh</span>
                                    </label>
                                </li>
                                <li class="filter-item">
                                    <label for="colorm2" class="container-check">
                                        <input type="checkbox" name="color" id="colorm2">
                                        <div class="check-mark"></div>
                                        <span>Đen</span>
                                    </label>
                                </li>
                                <li class="filter-item">
                                    <label for="colorm3" class="container-check">
                                        <input type="checkbox" name="color" id="colorm3">
                                        <div class="check-mark"></div>
                                        <span>Trắng</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="filter-price">
                        <h4 class="filter-name">Giá</h4>
                        <div class="input-price row gx-3">
                            <div class="field col-5">
                                <span>Từ</span>
                                <input type="number" value="0" class="input-min">
                            </div>
                            <div class="field col-5">
                                <span>Đến</span>
                                <input type="number" value="5000000" class="input-max">
                            </div>
                            <div class="input-range2-wrap">
                                <div class="slider">
                                    <div class="range-progress">
                                    </div>
                                </div>
                                <div class="input-range">
                                    <input type="range" min="0" max="5000000" step="10000" value="0" class="range-min">
                                    <input type="range" min="0" max="5000000" step="10000" value="5000000" class="range-max">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="button button--primary filter-btn width-100">Lọc</button>
                </div>
            </div>
        </div>
        <div class="menu-mobile menu-mobile-js">
            <ion-icon name="close" class="close-btn menu-mobile-close-btn-js"></ion-icon>
            <ul class="menu-list">
                <li class="menu-item">
                    <a href="" class="menu-link">Trang chủ</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">Sản phẩm
                    </a>
                    <ion-icon name="chevron-down-outline" class="menu-icon menu-icon-js"></ion-icon>
                    <ul class="dropdow">
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Áo</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Quần</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Phụ kiện</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Áo</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Quần</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Phụ kiện</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Áo</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Quần</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Phụ kiện</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Áo</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Quần</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Phụ kiện</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Áo</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Quần</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Phụ kiện</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Áo</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Quần</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Phụ kiện</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Áo</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Quần</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Phụ kiện</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Áo</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Quần</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Phụ kiện</a>
                        </li>
                        <li class="dropdow-item">
                            <a href="" class="dropdow-link">Phụ kiện</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link">Khuyến mại</a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link">Tin tức</a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link">Liên hệ</a>
                </li>
                <li class="menu-item">
                    <a href="login.html" class="menu-link">Đăng nhập</a>
                </li>
                <li class="menu-item">
                    <a href="register.html" class="menu-link">Đăng kí</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="./public/assets/js/main.js"></script>
<script src="./public/assets/js/product-details.js"></script>
<script src="./public/assets/js/products.js"></script>
</body>

</html>