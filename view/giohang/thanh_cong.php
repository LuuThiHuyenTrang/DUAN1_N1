<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="index.php">Trang Chủ</a></span> / <span>Đặt Hàng Thành Công</span></p>
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
        <div class="row">
            <div class="col-sm-10 offset-sm-1 text-center">
                <p class="icon-addcart" style="margin-top: 30px;"><span><i class="icon-check"></i></span></p>
                <h2 class="mb-4">CẢM ƠN BẠN ĐÃ ĐẶT HÀNG TẠI MyShoes, CHÚC BẠN CÓ MỘT TRẢI NGHIỆM TỐT KHI SỬ DỤNG SẢN PHẨM CỦA SHOP 💝💝💝💝💝</h2>
                <h3>Mã hóa đơn của bạn là: <?= $idhd ?></h3>
                <?php if ($pttt == "Chuyển khoản") { ?>
                    <div class="MaQR">
                        <img src="/DUAN1_N1/image/QR.jpg" alt="" width="200px">
                        <p style="color: red;">Chuyển khoản với nội dung: email đặt hàng + mã hóa đơn !!!</p>
                    </div>
                <?php }  ?>
                <p>
                    <a href="index.php" class="btn btn-primary btn-outline-primary">Trang Chủ</a>
                    <a href="index.php?duong_link=shop" class="btn btn-primary btn-outline-primary"><i class="icon-shopping-cart"></i> Cửa Hàng</a>
                </p>
            </div>
        </div>
    </div>
</div>