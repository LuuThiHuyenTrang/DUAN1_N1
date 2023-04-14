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
                        $id_nd = 1;
                        if (!isset($_SESSION['mycart'][$id_nd])) {
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
                                    <td class="one-eight text-center" style="width: 15%; padding-top: 65px;">
                                        <div class="display-tc">
                                            <span class="price"><?= $cart[4] ?></span>
                                        </div>
                                    </td>
                                    <td class="one-eight text-center" style="width: 15%; padding-top: 65px;">
                                        <div class="display-tc">
                                            <span class="price" style="color: red; font-weight: 700;"><?= number_format($cart[3]) ?> VNĐ</span>
                                        </div>
                                    </td>

                                    <td class="d-flex text-center" style="width: 9%;">
                                        <span class="input-group-btn">
                                            <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
                                                <input type="text" name="idcart" value="<?= $cart[0] ?>" hidden>
                                                <input type="submit" class="btn" data-type="minus" name="giamsoluong" value="➖">
                                            </form>
                                        </span>
                                        <input type="number" id="quantity" name="soluong" class="quantity input-number quantity<?= $cart[0] ?>" value="<?= $cart[5] ?>" style="width: 40px; text-align: center; border: 2px solid white;">
                                        <span class="input-group-btn">
                                            <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
                                                <input type="text" name="idcart" value="<?= $cart[0] ?>" hidden>
                                                <input type="submit" class="btn" data-type="plus" name="tangsoluong" value="➕">
                                            </form>
                                        </span>
                                    </td>
                                    <!-- cart[0] : idsp, [1]: tên, [2]: hình, [3]: giá, [4]: kích cỡ, [5]: số lượng, [6]: tongtien -->

                                    <td class="one-eight text-center" style="width: 18%; padding-top: 65px;">
                                        <div class="display-tc">
                                            <span class="price" style="color: red; font-weight: 900; margin-left: 20px;"><?= number_format($cart[6]) ?> VNĐ</span>
                                        </div>
                                    </td>
                                    <td class="one-eight text-center" style="width: 15%; padding-top: 60px;">
                                        <a href="/DUAN1_N1/index.php?duong_link=xoaCart&idcart=<?= $cart[0] ?>"><button class="btn btn-danger" onclick="return(confirm('Bạn có chắc chắn muốn xóa?'))">Xoá</button></a>
                                    </td>
                                </tr>

                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
                            if (isset($_POST['giamsoluong']) && ($_POST['giamsoluong'])) {
                                $id_nd = 1;
                                $idcart = $_POST['idcart'];
                                foreach ($_SESSION['mycart'][$id_nd] as &$item) {
                                    if ($item[0] == $idcart) {
                                        if ($item[0] == $idcart) {
                                            if ($item[5] < 2) {
                                                $item[5] = 1;
                                            } else {
                                                $item[5] += -1;
                                            }

                                            $item[6] = $item[5] * $item[3];
                                            echo "<script>
                                                history.back();
                                            </script>";
                                            break;
                                        }
                                    }
                                }
                            }
                            if (isset($_POST['tangsoluong']) && ($_POST['tangsoluong'])) {
                                $id_nd = 1;
                                $idcart = $_POST['idcart'];
                                foreach ($_SESSION['mycart'][$id_nd] as &$item) {
                                    if ($item[0] == $idcart) {
                                        if ($item[5] >= $item[8]) {
                                            $item[5] =  $item[8];
                                        } else {
                                            $item[5] += +1;
                                        }

                                        $item[6] = $item[5] * $item[3];
                                        echo "<script>
                                                history.back();
                                            </script>";
                                        break;
                                    }
                                }
                            }
        ?>

        <div class="row row-pb-lg">
            <div class="col-md-12">
                <div class="total-wrap">
                    <div class="row">
                        <div class="col-sm-8">

                        </div>
                        <div class="col-sm-4 text-center">
                            <form action="index.php?duong_link=datHang" method="post">
                                <div class="total">
                                    <div class="sub" style="text-align: left;">
                                        <p><span>Tổng tiền hàng:</span> <input type="text" name="tongtienhang" id="tongtienhang" value="<?= $tongtien ?>" readonly class="tientien"> VNĐ</p>
                                        <p><span>Giảm giá sản phẩm:</span> - <input type="text" name="giamgiasanpham" id="giamgiasanpham" value="0" readonly class="tientien"></p>
                                        <p><span>TỔNG TIỀN:</span><input type="text" name="tongtien" id="tongtien" value="<?= $tongtien ?>" readonly class="tientien"> VNĐ</p>
                                        <input type="text" name="id_voucher" id="id_voucher" value="1" hidden>
                                    </div>
                                    <div class="button-thanhtoan">
                                        <details class="dropdown">
                                            <summary role="button">
                                                <a class="button"><span>Chọn voucher!</span></a>
                                            </summary>
                                            <ul>
                                                <?php foreach ($listvc as $vc) {
                                                    if ($tongtien < 2999999) {
                                                        echo "Không có voucher nào áp dụng cho đơn hàng này. Mời bạn đặt thêm để sử dụng ưu đãi <br>";
                                                        break;
                                                    } else if ($vc['dieu_kien'] <= $tongtien && $tongtien > 2999999) { ?>
                                                        <li>
                                                            <div class="item-radio">
                                                                <input type="radio" name="voucher" class="valueIdVoucher" value="<?= $vc['id'] ?>" data-voucher="<?= $vc['id'] ?>">
                                                                <input type="radio" name="voucher" class="valueVoucher_mucgiamgia" value="<?= $vc['muc_giam_gia'] ?>" data-voucher="<?= $vc['id'] ?>" hidden>
                                                            </div>
                                                            <div class="item-voucher">
                                                                <h3><?= $vc['ten_voucher'] ?></h3>
                                                                <p><?= $vc['mo_ta'] ?></p>
                                                                <span>Số Lượng: <?= $vc['so_luong'] ?></span>
                                                            </div>
                                                        </li>
                                                <?php }
                                                } ?>
                                            </ul>
                                        </details>

                                        <div class="grand-total" style="text-align: left;">
                                            <button class="btn" style="background-color: blueviolet;" type="submit">Thanh Toán</button>
                                        </div>
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
<script>
    let giamgiasanpham = document.querySelector("#giamgiasanpham"); //input hiden form post
    let tongtien = document.querySelector("#tongtien"); //input hiden form post
    let id_voucher = document.querySelector("#id_voucher");

    const voucherInput = document.querySelectorAll(".valueIdVoucher");
    for (const btn of voucherInput) {
        btn.addEventListener("click", () => {
            const idVoucher = btn.getAttribute('data-voucher');
            const voucher_mucgiamgia = document.querySelector(`.valueVoucher_mucgiamgia[data-voucher="${idVoucher}"]`).value;
            id_voucher.value = idVoucher;

            giamgiasanpham.value = <?= $tongtien ?> * voucher_mucgiamgia / 100; // %

            tongtien.value = <?= $tongtien ?> - giamgiasanpham.value;
        })
    }
</script>
<style>
    .tientien {
        color: red;
        font-weight: 700;
        width: 70px;
        background-color: whitesmoke;
        border: 1px solid whitesmoke;
    }

    :root {
        --button-background: dodgerblue;
        --button-color: white;

        --dropdown-highlight: dodgerblue;
        --dropdown-width: 400px;
        --dropdown-background: white;
        --dropdown-color: black;
    }

    a.button {
        /* Frame */
        display: inline-block;
        border-radius: 50px;
        box-sizing: border-box;
        padding: 7px 20px;
        height: 40px;
        /* Style */
        border: none;
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(64, 223, 255, 1) 9%, rgba(232, 61, 230, 1) 45%, rgba(232, 61, 94, 1) 100%);
        color: var(--button-color);
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
    }

    a.button span {
        color: white;
    }

    a.button:active {
        filter: brightness(75%);
    }

    /* Dropdown styles */
    .dropdown {
        position: relative;
        padding: 0;
        height: 40px;
        margin-right: 1em;
        margin-left: 18px;
        border: none;
    }

    .dropdown summary {
        list-style: none;
        list-style-type: none;
    }

    .dropdown>summary::-webkit-details-marker {
        display: none;
    }

    .dropdown summary:focus {
        outline: none;
    }

    .dropdown summary:focus a.button {
        border: 2px solid gray;
    }

    .dropdown summary:focus {
        outline: none;
    }

    .dropdown ul {
        position: absolute;
        margin: 20px 0 0 0;
        padding: 20px 0;
        width: var(--dropdown-width);
        left: -150%;
        top: -70%;
        margin-left: calc((var(--dropdown-width) / 2) * -1);
        margin-top: calc((var(--dropdown-width) / 2) * -1);
        box-sizing: border-box;
        z-index: 2;

        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(64, 223, 255, 1) 2%, rgba(232, 61, 230, 1) 84%);
        border-radius: 6px;
        list-style: none;
    }

    .dropdown ul li {
        padding: 0;
        margin: 0;
    }

    .dropdown ul li:link,
    .dropdown ul li:visited {
        display: inline-block;
        padding: 10px 0.8rem;
        width: 100%;
        box-sizing: border-box;

        color: var(--dropdown-color);
        text-decoration: none;
    }

    .dropdown ul li:hover {
        background-color: var(--dropdown-highlight);
        color: var(--dropdown-background);
    }

    /* Dropdown triangle */
    .dropdown ul::before {
        content: ' ';
        position: absolute;
        width: 0;
        height: 0;
        top: -10px;
        margin-left: -10px;
        border-style: solid;
        border-width: 0 10px 10px 10px;
        border-color: transparent transparent var(--dropdown-background) transparent;
    }


    /* Close the dropdown with outside clicks */
    .dropdown>summary::before {
        display: none;
    }

    .dropdown[open]>summary::before {
        content: 'áp dụng voucher';
        display: block;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        z-index: 1;
    }

    .button-thanhtoan,
    .dropdown ul li {
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }

    .item-radio {
        width: 100px;
        height: 170px;
        margin-right: 10px;
        margin-left: 5px;
    }

    .item-radio input {
        height: 20px;
        width: 20px;
        margin: 10px 45%;
    }

    .item-radio:hover {
        background: rgb(69, 58, 254);
        background: linear-gradient(90deg, rgba(69, 58, 254, 1) 0%, rgba(64, 223, 255, 1) 2%, rgba(232, 61, 230, 1) 36%, rgba(213, 14, 53, 1) 100%, rgba(215, 19, 73, 1) 100%);
    }

    .item-voucher h3 {
        color: red;
        font-weight: 800;
    }

    .item-voucher p {
        color: black;
        font-weight: 500;
    }

    .item-voucher {
        text-align: left;
        border-bottom: 1px solid gray;
    }

    .total-wrap .total {
        width: 400px;
    }

    .total-wrap {
        margin-right: 50px;
    }
</style>