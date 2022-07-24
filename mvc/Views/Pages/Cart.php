<div class="content">
    <section class="section section-cart container">
        <h1 class="page-title">Giỏ hàng</h1>
        <div class="cart-empty">
            <img src="<?php echo _WEB_ROOT;?>/public/assets/img/cart-empty.png" alt="" class="cart-empty-img">
            <p>Không có sản phẩm nào trong giỏ hàng</p>
            <a href="index" class="button button--primary">Tiếp tục mua hàng</a>
        </div>
        <div class="cart">
            <div class="cart-table-desktop">
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="product-info">
                                    <a href="" class="product-link">
                                        <img src="<?php echo _WEB_ROOT;?>/public/assets/img/ao5.jpg" alt="" class="product-img">
                                        <span class="product-name">Quần kaki</span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <span class="product-price">100.000đ</span>
                            </td>
                            <td>
                                <div class="input-number-wrap">
                                    <button class="input-btn minus-btn">
                                        <i class="fa-solid fa-minus input-icon"></i>
                                    </button>
                                    <input type="number" min="1" max="100" value="2" class="input-number">
                                    <button class="input-btn plus-btn">
                                        <i class="fa-solid fa-plus input-icon"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <span class="sub-total">200.000đ</span>
                            </td>
                            <td>
                                <button class="cart-delete-btn">
                                    <ion-icon name="trash" class="delete-icon"></ion-icon>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="product-info">
                                    <a href="" class="product-link">
                                        <img src="https://source.unsplash.com/random" alt="" class="product-img">
                                        <span class="product-name">ÁO POLO TRƠN</span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <span class="product-price">100.000đ</span>
                            </td>
                            <td>
                                <div class="input-number-wrap">
                                    <button class="input-btn minus-btn">
                                        <i class="fa-solid fa-minus input-icon"></i>
                                    </button>
                                    <input type="number" min="1" max="100" value="2" class="input-number">
                                    <button class="input-btn plus-btn">
                                        <i class="fa-solid fa-plus input-icon"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <span class="sub-total">200.000đ</span>
                            </td>
                            <td>
                                <button class="cart-delete-btn">
                                    <ion-icon name="trash" class="delete-icon"></ion-icon>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="cart-table-mobile">
                <ul class="product-list">
                    <li class="product">
                        <a href="" class="product-link">
                            <img src="https://source.unsplash.com/random" alt="" class="product-img">
                        </a>
                        <div class="product-info">
                            <a href="" class="product-link">
                                <span class="product-name">Quan kaki</span>
                            </a>
                            <div class="product-price">100.000đ</div>
                            <div class="product-action">
                                <div class="input-number-wrap">
                                    <button class="input-btn minus-btn">
                                        <i class="fa-solid fa-minus input-icon"></i>
                                    </button>
                                    <input type="number" min="1" max="100" value="2" class="input-number">
                                    <button class="input-btn plus-btn">
                                        <i class="fa-solid fa-plus input-icon"></i>
                                    </button>
                                </div>
                                <span class="product-delete-btn">Xóa</span>
                            </div>
                        </div>
                    </li>
                    <li class="product">
                        <a href="" class="product-link">
                            <img src="https://source.unsplash.com/random" alt="" class="product-img">
                        </a>
                        <div class="product-info">
                            <a href="" class="product-link">
                                <span class="product-name">Quan kaki</span>
                            </a>
                            <div class="product-price">100.000đ</div>
                            <div class="product-action">
                                <div class="input-number-wrap">
                                    <button class="input-btn minus-btn">
                                        <i class="fa-solid fa-minus input-icon"></i>
                                    </button>
                                    <input type="number" min="1" max="100" value="2" class="input-number">
                                    <button class="input-btn plus-btn">
                                        <i class="fa-solid fa-plus input-icon"></i>
                                    </button>
                                </div>
                                <span class="product-delete-btn">Xóa</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="total">
                Tổng tiền:
                <strong>500.000đ</strong>
            </div>
            <div class="cart-control row gx-4 gy-3 justify-content-end ">
                <div class="col-md-3 col-xl-2 col-12">
                    <a href="index.html" class="button button--primary width-100 purchase-btn">Tiếp tục mua hàng</a>
                </div>
                <div class="col-md-3 col-xl-2 col-12">
                    <a href="Checkout" class="button button--primary width-100">Tiến hành đặt hàng</a>
                </div>
            </div>
        </div>

    </section>
</div>