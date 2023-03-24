<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="index.php">Trang Chủ</a></span> / <span>Giỏ Hàng</span></p>
            </div>
        </div>
    </div>
</div>


<div class="colorlib-product">
    <div class="container">
        <div class="row row-pb-lg colorCart">
            <div class="col-sm-10 offset-md-1">
                <div class="process-wrap">
                    <div class="process text-center active">
                        <p><span>01</span></p>
                        <h3>Giỏ Hàng</h3>
                    </div>
                    <div class="process text-center active">
                        <p><span>02</span></p>
                        <h3>Đặt Hàng</h3>
                    </div>
                    <div class="process text-center">
                        <p><span>03</span></p>
                        <h3>Thành Công</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-pb-lg">
            <div class="col-md-12">
                <table class="table" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="one-eight text-left" style="width: 30%; padding-left: 20px;">
                                <span>Sản Phẩm</span>
                            </th>
                            <th class="one-eight text-center" style="width: 15%;">
                                <span>Phân loại</span>
                            </th>
                            <th class="one-eight text-center" style="width: 15%;">
                                <span>Giá</span>
                            </th>
                            <th class="one-eight text-center">
                                <span>Số Lượng</span>
                            </th>
                            <th class="one-eight text-center" style="width: 15%;">
                                <span>Tiền</span>
                            </th>
                            <th class="one-eight text-center px-4" style="width: 15%;">
                                <span>Xóa</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($_SESSION['mycart'] == null) {
                            echo "<h1>Không có Sản phẩm nào</h1>";
                        } else {
                            $tongtien = 0;
                            foreach ($_SESSION['mycart'][$id_nd] as $cart) {
                                $tongtien += $cart[6]; ?>

                                <tr>
                                    <td class="d-flex justify-content-evenly one-eight align-items-center" style="width: 30%; padding-left: 20px;">
                                        <div class="product-img">
                                            <img src="/DUAN1_N1/image/<?= $cart[2] ?>" alt="anh" class="product-img" style="width: 100px; margin-right: 15px;">
                                        </div>
                                        <br>
                                        <div class="display-tc">
                                            <h5 style="width: 200px;"><?= $cart[1] ?></h5>
                                        </div>
                                    </td>
                                    <td class="one-eight text-center" style="width: 15%;">
                                        <div class="display-tc">
                                            <span class="price"><?= $cart[4] ?></span>
                                        </div>
                                    </td>
                                    <td class="one-eight text-center" style="width: 15%;">
                                        <div class="display-tc">
                                            <span class="price" style="color: red; font-weight: 700;"><?= number_format($cart[3]) ?> VNĐ</span>
                                        </div>
                                    </td>
                                    <td class="display-tc d-flex justify-content-evenly one-eight text-center" style="width: 11%;">
                                        <span class="input-group-btn mr-2">
                                            <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="" onclick="quantity_left_minus()">
                                                <i class="ion-ios-remove"></i>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="soluong" class="quantity input-number" value="<?= $cart[5] ?>" style="width: 20px; text-align: center; border: 2px solid white;">
                                        <span class="input-group-btn ml-2">
                                            <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="" onclick="quantity_right_plus()">
                                                <i class="ion-ios-add"></i>
                                            </button>
                                        </span>
                                    </td>
                                    <td class="one-eight text-center" style="width: 15%;">
                                        <div class="display-tc">
                                            <span class="price" style="color: red; font-weight: 900; margin-left: 20px;"><?= number_format($cart[6]) ?> VNĐ</span>
                                        </div>
                                    </td>
                                    <td class="one-eight text-center" style="width: 15%;">
                                        <a href="/DUAN1_N1/index.php?duong_link=xoaCart&idcart=<?= $cart[0] ?>"><button class="btn btn-danger">Xoá</button></a>
                                    </td>
                                </tr>

                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php $soluong = 100; ?>
        <!-- cart[0] : idsp, [1]: tên, [2]: hình, [3]: giá, [4]: kích cỡ, [5]: số lượng, [6]: tongtien -->
        <div class="row row-pb-lg">
            <div class="col-md-12">
                <div class="total-wrap">
                    <div class="row">
                        <div class="col-sm-8">
                            <form action="#">
                                <div class="row form-group">
                                    <div class="col-sm-9">
                                        <input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="submit" value="Áp dụng mã giảm giá" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="total">
                                <div class="sub" style="text-align: left;">
                                    <p><span>Tổng tiền hàng:</span> <span><?= number_format($tongtien) ?> VNĐ</span></p>
                                    <p><span>Giảm giá sản phẩm:</span> <span>000.000</span></p>
                                    <p><span>TỔNG TIỀN:</span><span style="color: red; font-weight: 900;"><?= number_format($tongtien) ?> VNĐ</span></p>
                                </div>
                                <form action="index.php?duong_link=datHang" method="post">
                                    <input type="text" name="tongtienhang" id="tongtienhang" value="<?= $tongtien ?>" hidden>
                                    <input type="text" name="giamgiasanpham" id="giamgiasanpham" value="<?= $tongtien ?>" hidden>
                                    <input type="text" name="tongtien" id="tongtien" value="<?= $tongtien ?>" hidden>

                                    <div class="grand-total" style="text-align: left;">
                                        <button class="btn" style="background-color: blueviolet;" type="submit">Thanh Toán</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="row">
        <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
            <h2>Sản Phẩm Hot</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-lg-3 mb-4 text-center">
            <div class="product-entry border">
                <a href="#" class="prod-img">
                    <img src="/DUAN1_N1/view/images/item-1.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a>
                <div class="desc">
                    <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                    <span class="price">$139.00</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mb-4 text-center">
            <div class="product-entry border">
                <a href="#" class="prod-img">
                    <img src="/DUAN1_N1/view/images/item-2.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a>
                <div class="desc">
                    <h2><a href="#">Women's Minam Meaghan</a></h2>
                    <span class="price">$139.00</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mb-4 text-center">
            <div class="product-entry border">
                <a href="#" class="prod-img">
                    <img src="/DUAN1_N1/view/images/item-3.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a>
                <div class="desc">
                    <h2><a href="#">Men's Taja Commissioner</a></h2>
                    <span class="price">$139.00</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mb-4 text-center">
            <div class="product-entry border">
                <a href="#" class="prod-img">
                    <img src="/DUAN1_N1/view/images/item-4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a>
                <div class="desc">
                    <h2><a href="#">Russ Men's Sneakers</a></h2>
                    <span class="price">$139.00</span>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>