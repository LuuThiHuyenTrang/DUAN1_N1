<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="index.html">Trang Chủ</a></span> / <span>Lịch sử đặt hàng</span></p>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" style="color: black; font-weight: 500;">
                        <thead>
                            <tr>
                                <th style="color: blue; font-size: 16px; font-weight: 700; width: 5%;"> # </th>
                                <th style="color: blue; font-size: 16px; font-weight: 700; width: 20%;"> Thông tin khách mua </th>
                                <th style="color: blue; font-size: 16px; font-weight: 700; width: 13%;"> Số sản phẩm </th>
                                <th style="color: blue; font-size: 16px; font-weight: 700; width: 10%;"> Voucher </th>
                                <th style="color: blue; font-size: 16px; font-weight: 700; width: 10%;"> Tổng tiền </th>
                                <th style="color: blue; font-size: 16px; font-weight: 700; width: 10%;"> Ngày đặt </th>
                                <th style="color: blue; font-size: 16px; font-weight: 700; width: 10%;"> Trạng thái </th>
                                <th style="color: blue; font-size: 16px; font-weight: 700; width: 10%;"> Tình trạng </th>
                                <th style="color: blue; font-size: 16px; font-weight: 700; width: 10%;"> Action </th>
                            </tr>
                        </thead>
                        <tbody style="color:black">
                            <?php foreach ($listhd as $hd) {
                                $so_sp_mua = so_sp_mua($hd["id"]);
                            ?>
                                <tr>
                                    <td width="5%"><?= $hd['id']; ?></td>
                                    <td style="line-height: 20px;"> - <?= $hd['ten_kh']; ?> <br> - <?= $hd['sdt']; ?> <br> - <?= $hd['email']; ?><br> - <?= $hd['dia_chi']; ?></td>
                                    <td><?= $so_sp_mua ?></td>
                                    <td> <?= $hd['ten_voucher']; ?> </td>
                                    <td style="color: red; font-weight: 900; "> <?= number_format($hd['tong_tien']); ?>VNĐ </td>
                                    <td> <?= $hd['ngay_dat']; ?> </td>
                                    <td> <?php if ($hd['trang_thai'] == "đã xác nhận") {
                                                echo "<h5 style='color: purple; font-weight:700'>" . $hd['trang_thai'] . "</h5>";
                                            } else {
                                                echo "<h5 style='color: red;font-weight:700; text-decoration:underline' >" . $hd['trang_thai'] . "</h5>";
                                            } ?>
                                    </td>

                                    <td><?= $hd['tinh_trang']; ?></td>
                                    <td>
                                        <?php
                                        if ($hd['tinh_trang'] != 'Đang giao' && $hd['tinh_trang'] != 'Giao hàng thành công'&& $hd['tinh_trang'] != 'Đã hủy') { ?>
                                            <a href="./index.php?duong_link=huyhang&idhd=<?= $hd['id']; ?>"><button class="btn btn-danger">Hủy hàng</button></a>
                                        <?php } ?>

                                        <a href="/DUAN1_N1/index.php?duong_link=hoadonchitiet&idhd=<?= $hd['id']; ?>"><button class="btn btn-warning " style="margin:20px;">Chi tiết</button></a>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>