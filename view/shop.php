<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="index.html">Trang Chủ</a></span> / <span>Cửa Hàng</span></p>
            </div>
        </div>
    </div>
</div>

<div class="breadcrumbs-two">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs-img" style="background-image: url(https://bizweb.dktcdn.net/100/413/756/files/giay-adidas-nam-43-jpeg.jpg?v=1614322668655);">
                    <h2 style="color:white;">Cửa Hàng Giày Dép MyShoe</h2>
                </div>
                <div class="menu text-center">
                    <!-- <p><a href="#">sản Phẩm Mới</a> <a href="#">Giày Hot</a> <a href="#">Giày xu hướng</a> <a href="#">Giảm giá</a></p> -->
                </div>
            </div>
        </div>
    </div>
</div>


<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xl-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Danh Mục</h3>
                            <ul>
                                <?php foreach ($listdm as $dm) { ?>
                                    <li class="danhmuc"><a href="/DUAN1_N1/index.php?duong_link=locdanhmuc&id_dm=<?= $dm['id'] ?>"><?= $dm['ten_loai'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <style>
                        .danhmuc {
                            padding: 10px;
                        }

                        .danhmuc:hover {
                            background-color: violet;
                        }
                    </style>
                    <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Tìm kiếm</h3>
                            <form class="d-flex" action="/DUAN1_N1/index.php?duong_link=timkiemsanpham" method='post' role="search">
                                <input class="form-control me-10" type="search" name='ten_sp' placeholder="Search" aria-label="Search" style="width: 140px; box-shadow: 50%;">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-xl-9">
                <h2 style="color: red; font-weight: 700;"><?= isset($mess) ? $mess : ""; ?></h2>
                <div class="row row-pb-md">
                    <?php foreach ($listsp as $sp) {
                        if ($sp['tong_so_luong'] < 1) {
                            luutruSp($sp['id']);
                            break;
                        } ?>
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
                <!-- <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
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
<style>
    .img-fluid {
        width: 300px;
        height: 300px;
    }
</style>