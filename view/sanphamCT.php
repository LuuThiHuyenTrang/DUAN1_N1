<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="index.html">Trang Chủ</a></span> / <span>Sản Phẩm Chi Tiết</span></p>
            </div>
        </div>
    </div>
</div>


<div class="colorlib-product">
    <div class="container">
        <div class="row row-pb-lg product-detail-wrap">
            <div class="col-sm-8">
                <div class="owl-carousel">
                    <?php foreach ($kichcoOne as $kc) { ?>
                        <div class="item">
                            <div class="product-entry">
                                <a href="#" class="prod-img">
                                    <img src="/DUAN1_N1/image/<?php echo $kc['hinh'] ?>" class="img-fluid" alt="Free html5 bootstrap 4 template" style="width: 500px; height: 500px; overflow: hidden; margin: 0 auto;">
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-4">
                <form action="index.php?duong_link=addCart" method="post">
                    <div class="product-desc">
                        <h3><?php echo $spOne["ten_sp"] ?></h3>
                        <p class="price">
                            <span><input type="text" name="tien" class="tientien" value="<?= $spOne['tien'] ?>" style="color: red; font-weight: 900; border: 1px solid white; width: 100px;"> VNĐ</span>
                        </p>
                        <div>
                            <p>(<?php echo $xemban["luotxem"] ?> lượt xem)</p>

                        </div>
                        <div class="size-wrap">
                            <div class="block-26 mb-2">
                                <h4>Size</h4>
                                <ul>
                                    <?php foreach ($kichcoOne as $kc) { ?>
                                        <li>
                                            <input type="text" name="kichco" id="kichco" value="<?= $kc['mau'] ?> - <?= $kc['size'] ?>" data-kc="<?= $kc['mau'] ?> - <?= $kc['size'] ?>" class="btn product-size" style="width: 130px" readonly>
                                            <input type="text" name="id_kich_co" value="<?= $kc['id'] ?>" hidden>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="" onclick="quantity_left_minus()">
                                    <i class="ion-ios-remove"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="soluong" class="quantity form-control input-number" value="1">
                            <span class="input-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="" onclick="quantity_right_plus()">
                                    <i class="ion-ios-add"></i>
                                </button>
                            </span>
                        </div>

                        <input type="text" name="idsp" value="<?= $spOne['id']; ?>" hidden>
                        <input type="text" name="tensp" value="<?= $spOne['ten_sp']; ?>" hidden>
                        <input type="text" name="hinh" value="<?= $spOne['hinh']; ?>" hidden>


                        <div class="row">
                            <div class="col-sm-12 text-center hien">
                                <input type="text" name="idsp" value="<?= $spOne['id'] ?>" hidden>
                                <button type="submit" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"> Add to Cart</i></button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        .selected {
            background-color: violet;
        }

        .hien {
            display: none;
        }
    </style>
    <script>
        const hienAddToCart = document.querySelector('.hien');
        const buttonSize = document.querySelectorAll('.product-size');
        let selectedButtonSize = null;

        buttonSize.forEach(button => {
            button.addEventListener('click', event => {
                // Xóa class "selected" khỏi button đang được chọn
                if (selectedButtonSize) {
                    selectedButtonSize.classList.toggle('selected');
                }

                // Thêm class "selected" vào button được click
                event.target.classList.toggle('selected');

                // Lưu trữ trạng thái của button được click
                selectedButtonSize = event.target;

                //cho hiện btn add to cart
                hienAddToCart.style.display = "block";
            });
        });
    </script>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Mô Tả</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Đánh Giá</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                <p><?= $spOne['mo_ta'] ?></p>

                            </div>



                            <div class="tab-pane border fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                <div class="row">
                                    <div class="col-md-8">
                                        <?php foreach ($listbl as $bl) { ?>
                                            <div class="review">
                                                <div class="user-img" style="background-image: url(/DUAN1_N1/view/images/person1.jpg)"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left"><?= $bl['ten_kh'] ?></span>
                                                        <span class="text-right"><?= $bl['ngay'] ?></span>
                                                    </h4>
                                                    <p><?= $bl['noi_dung'] ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($_SESSION['user'])) { ?>
                                            <div class="review">
                                                <form action="index.php?duong_link=comment&id=<?= $spOne['id'] ?>" method="post">
                                                    <input type="text" name="noidung" placeholder="Nội dung">
                                                    <input type="text" value="<?= $spOne['id'] ?>" name="idsp" hidden>
                                                    <input type="text" value="<?= $_SESSION['user']['id'] ?>" name="idnd" hidden>
                                                    <button type="submit" class="btn btn-success">GỬI</button>

                                                </form>
                                            </div>
                                        <?php } ?>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>