<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="index.php">Trang Chủ</a></span> / <span>Thông Tin Đơn Hàng</span></p>
            </div>
        </div>
    </div>
</div>


<div class="colorlib-product" style="margin-top: 30px;">
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
        <form method="post" class="colorlib-form" action="index.php?duong_link=thanhcong">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Hoàn thiện Thông Tin Đơn Hàng</h2>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="companyname">Tên người nhận</label>
                                <input type="text" id="companyname" class="form-control" placeholder="Your Name" name="tenkh">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="companyname">Email</label>
                                <input type="text" id="companyname" class="form-control" placeholder="Your Email" name="email">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="fname">Số điện thoại</label>
                                <input type="text" id="address" class="form-control" placeholder="Your Phone" name="sdt">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="companyname">Địa chỉ nhận hàng</label>
                                <input type="text" id="towncity" class="form-control" placeholder="Your address" name="diachi">
                            </div>
                        </div>
                    </div>
                    <div class="MaQR">
                        <img src="/DUAN1_N1/image/QR.jpg" alt="" width="200px">
                    </div>
                </div>
                <style>
                    .MaQR {
                        margin: 50px auto;
                        text-align: center;
                        display: none;
                    }
                </style>

                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-detail">
                                <h2>Tiền</h2>
                                <ul>
                                    <li><span>Tổng tiền hàng</span> <span><?= $tongtienhang ?></span></li>
                                    <li><span>Phí vặn chuyển</span> <span>0.00</span></li>
                                    <li><span>Tổng voucher giảm giá</span> <span><?= $giamgiasanpham ?></span></li>
                                    <li><span>Tổng đơn hàng</span> <span style="color: red; font-weight: 900;"><?= $tongtien ?> VNĐ</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="w-100"></div>

                        <div class="col-md-12">
                            <div class="cart-detail">
                                <h2>Phương thức thanh toán</h2>
                                <div class="form-group">
                                    <input type="radio" name="phuongthucthanhtoan" value="Chuyển khoản" onclick="hienQR()">Chuyển khoản ngân hàng <br>
                                    <input type="radio" name="phuongthucthanhtoan" value="Thanh toán nhận hàng" onclick="khongHienQR()">Thanh toán khi nhận hàng <br>

                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="">Tôi đã đọc và chấp nhận các điều khoản</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="text" name="tongtienhang" value="<?= $tongtienhang ?>" hidden>
                    <input type="text" name="giamgiasanpham" value="<?= $giamgiasanpham ?>" hidden>
                    <input type="text" name="tongtien" value="<?= $tongtien ?>" hidden>
                    <input type="text" name="idvoucher" value="<?= $idvoucher ?>" hidden>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p><button type="submit" class="btn btn-primary">Đặt Hàng</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    const MaQR = document.querySelector(".MaQR");
    const hienQR = () => {
        MaQR.style.display = "block";
    }
    const khongHienQR = () => {
        MaQR.style.display = "none";
    }
</script>