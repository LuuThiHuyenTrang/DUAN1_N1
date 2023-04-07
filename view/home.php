<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(https://bizweb.dktcdn.net/100/413/756/files/giay-adidas-nam-43-jpeg.jpg?v=1614322668655);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1 class="head-1">Men's</h1>
                                    <h2 class="head-2">Shoes</h2>
                                    <h2 class="head-3">Collection</h2>
                                    <p class="category"><span>New trending shoes</span></p>
                                    <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(https://bizweb.dktcdn.net/100/413/756/files/giay-adidas-nam-43-jpeg.jpg?v=1614322668655);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1 class="head-1">Huge</h1>
                                    <h2 class="head-2">Sale</h2>
                                    <h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
                                    <p class="category"><span>Big sale sandals</span></p>
                                    <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(https://bizweb.dktcdn.net/100/413/756/files/giay-adidas-nam-43-jpeg.jpg?v=1614322668655);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1 class="head-1">New</h1>
                                    <h2 class="head-2">Arrival</h2>
                                    <h2 class="head-3">up to <strong class="font-weight-bold">30%</strong> off
                                    </h2>
                                    <p class="category"><span>New stylish shoes for men</span></p>
                                    <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
<div class="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="intro">Những sản phẩm chất lượng được tạo ra từ những thiết kế tỉ mỉ thời thượng.
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Bán Chạy Nhất</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            <?php foreach ($listsp as $sp) { ?>
                <div class="col-lg-4 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="index.php?duong_link=sanphamCT&id=<?= $sp["id"] ?>" class="prod-img">
                            <img src="/DUAN1_N1/image/<?= $sp["hinh"] ?>" class="img-fluid" alt="Free html5 bootstrap 4 template">
                        </a>
                        <div class="desc">
                            <h2><a href="index.php?duong_link=sanphamCT&id=<?= $sp["id"] ?>" class="tensp"><?= $sp["ten_sp"] ?></a></h2>
                            <span class="price" style="color: red; font-weight: 900;"><?= number_format($sp['tien']) ?> VNĐ</span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>Trusted Partners</h2>
            </div>
        </div>
        <div class="row">
            <div class="col partner-col text-center">
                <img src="/DUAN1_N1/view/images/brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="/DUAN1_N1/view/images/brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="/DUAN1_N1/view/images/brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="/DUAN1_N1/view/images/brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="/DUAN1_N1/view/images/brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
        </div>
    </div>
</div>