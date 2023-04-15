<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="/DUAN1_N1/index.php">Trang Chủ</a></span> / <span>Hóa đơn</span></p>
            </div>
        </div>
    </div>
</div>


<div class="colorlib-product">
    <div class="container">
        <div class="thongtindonhang">
            <ul>
                <?php foreach ($listhoadon as $hoadon) {
                    if ($hoadon['id'] == $idhd) { ?>
                        <li>
                            <h4>Mã đơn hàng: <span><?= $hoadon['id']; ?></span></h4>
                        </li>
                        <li>
                            <h4>Thông tin khách mua: <span style="line-height: 20px;"> <br> - <?= $hoadon['ten_kh']; ?> <br> - <?= $hoadon['sdt']; ?> <br> - <?= $hoadon['email']; ?><br> - <?= $hoadon['dia_chi']; ?></span></h4>
                        </li>
                        <li>
                            <h4>Số sản phẩm: <span><?= $so_sp_mua ?></span></h4>
                        </li>
                        <li>
                            <h4>Voucher: <span><?= $hoadon['ten_voucher']; ?></span></h4>
                        </li>
                        <li>
                            <h4>Tổng tiền: <span style="color: red; font-weight: 900; "> <?= number_format($hoadon['tong_tien']); ?>VNĐ</span></h4>
                        </li>
                        <li>
                            <h4>Thanh toán: <span><?= $hoadon['PTTT']; ?></span></h4>
                        </li>
                        <li>
                            <h4>Ngày đặt: <span><?= $hoadon['ngay_dat']; ?></span></h4>
                        </li>
                        <li>
                            <h4>Trạng thái: <?php if ($hoadon['trang_thai'] == "đã xác nhận") {
                                                echo "<span style='color: purple; font-weight:700'>" . $hoadon['trang_thai'] . "</span>";
                                            } else {
                                                echo "<span style='color: red;font-weight:700; text-decoration:underline' >" . $hoadon['trang_thai'] . "</span>";
                                            } ?> </h4>
                        </li>
                        <li>
                            <h4>Tình trạng: <span><?= $hoadon['tinh_trang']; ?></span></h4>
                        </li>
                <?php break;
                    }
                } ?>
            </ul>
        </div>
    </div>
    <style>
        .thongtindonhang ul li h4 span {
            margin-left: 50px;
            font-weight: 400px;
            font-size: 20px;
            font-family: cursive;
        }
    </style>
    <div class="container" style="margin-top: 50px;">
        <h3>Chi tiết đơn hàng:</h3>
        <table class="table">
            <thead>
                <tr>
                    <th> # </th>
                    <th> Tên </th>
                    <th> Hình </th>
                    <th> Phân loại </th>
                    <th> Tiền ban đầu </th>
                    <th> Số lượng </th>
                    <th> Tổng tiền </th>
                </tr>
            </thead>
            <tbody style="color:black">
                <?php
                $tongtien = 0;
                foreach ($listhdct as $hd) {
                    $tongtien = $tongtien + ($hd['tien'] * $hd['so_luong']);
                ?>
                    <tr>
                        <td width="5%"><?= $hd['id']; ?></td>
                        <td><?= $hd['ten_sp']; ?></td>
                        <td><img src="/DUAN1_N1/image/<?= $hd['hinh'] ?>" alt="anh" width="200px"></td>
                        <td> <?= $hd['mau'] ?> - <?= $hd['size'] ?> </td>
                        <td style="color: red;"> <?= $hd['tien'] ?></td>
                        <td> <?= $hd['so_luong']; ?> </td>
                        <td style="color: red; font-weight: 900; "> <?= number_format($hd['tien'] * $hd['so_luong']); ?>VNĐ </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
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