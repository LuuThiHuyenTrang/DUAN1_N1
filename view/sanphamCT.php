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
                            <div class="product-entry border">
                                <a href="#" class="prod-img">
                                    <img src="/DUAN1_N1/image/<?php echo $kc['hinh'] ?>" class="img-fluid" alt="Free html5 bootstrap 4 template">
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
                            <span><input type="text" name="gia" class="tientien" value="<?= number_format(gia_sp($spOne["id"])["gia"]) ?>" style="color: red; font-weight: 900; border: 1px solid white; width: 100px;"> VNĐ</span>
                            <span class="rate">
                                <i class="icon-star-full"></i>
                                <i class="icon-star-full"></i>
                                <i class="icon-star-full"></i>
                                <i class="icon-star-full"></i>
                                <i class="icon-star-half"></i>
                                (74 Rating)
                            </span>
                        </p>
                        <div class="size-wrap">
                            <div class="block-26 mb-2">
                                <h4>Size</h4>
                                <ul>
                                    <?php foreach ($kichcoOne as $kc) { ?>
                                        <li>
                                            <input type="text" name="kichco" id="kichco" value="<?= $kc['mau'] ?> - <?= $kc['size'] ?>" data-kc="<?= $kc['mau'] ?> - <?= $kc['size'] ?>" class="btn product-size" style="width: 130px" readonly>
                                            <input type="text" name="id_kich_co" value="<?= $kc['id'] ?>" hidden>
                                            <input type="text" name="tien" class="valueTien" value="<?= $kc['tien'] ?>" data-kc="<?= $kc['mau'] ?> - <?= $kc['size'] ?>" hidden>
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

        const buttonSM = document.querySelectorAll('.product-size');
        const tientien = document.querySelector(".tientien");

        for (const btn of buttonSM) {
            btn.addEventListener('click', () => {
                const kichco = btn.getAttribute('data-kc');
                const valueTien = document.querySelector(`.valueTien[data-kc="${kichco}"]`).value;
                tientien.value = valueTien;
            });
        }
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
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Chi Tiết</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Đánh Giá</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                <ul>
                                    <li>The Big Oxmox advised her not to do so</li>
                                    <li>Because there were thousands of bad Commas</li>
                                    <li>Wild Question Marks and devious Semikoli</li>
                                    <li>She packed her seven versalia</li>
                                    <li>tial into the belt and made herself on the way.</li>
                                </ul>
                            </div>

                            <div class="tab-pane border fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                            </div>

                            <div class="tab-pane border fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3 class="head">23 Reviews</h3>
                                        <?php foreach ($listbl as $bl) { ?>
                                            <div class="review">
                                                <div class="user-img" style="background-image: url(/DUAN1_N1/view/images/person1.jpg)"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left"><?= $bl['ten_kh'] ?></span>
                                                        <span class="text-right"><?= $bl['ngay'] ?></span>
                                                    </h4>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-half"></i>
                                                            <i class="icon-star-empty"></i>
                                                        </span>
                                                        <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                    </p>
                                                    <p><?= $bl['noi_dung'] ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <div class="review">
                                            <form action="index.php?duong_link=comment&id=<?= $spOne['id'] ?>" method="post">
                                                <input type="text" name="noidung" placeholder="Nội dung">
                                                <input type="text" value="<?= $spOne['id'] ?>" name="idsp" hidden>
                                                <input type="text" value="<?= $_SESSION['user']['id'] ?>" name="idnd" hidden>
                                                <button type="submit" class="btn btn-success">GỬI</button>

                                            </form>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="rating-wrap">
                                            <h3 class="head">Give a Review</h3>
                                            <div class="wrap">
                                                <p class="star">
                                                    <span>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        (98%)
                                                    </span>
                                                    <span>20 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-empty"></i>
                                                        (85%)
                                                    </span>
                                                    <span>10 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-empty"></i>
                                                        <i class="icon-star-empty"></i>
                                                        (70%)
                                                    </span>
                                                    <span>5 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-empty"></i>
                                                        <i class="icon-star-empty"></i>
                                                        <i class="icon-star-empty"></i>
                                                        (10%)
                                                    </span>
                                                    <span>0 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-empty"></i>
                                                        <i class="icon-star-empty"></i>
                                                        <i class="icon-star-empty"></i>
                                                        <i class="icon-star-empty"></i>
                                                        (0%)
                                                    </span>
                                                    <span>0 Reviews</span>
                                                </p>
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
</div>
</div>