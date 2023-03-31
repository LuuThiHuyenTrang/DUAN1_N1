<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title"> HÓA ĐƠN </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=addsp"></a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> # </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Thông tin khách mua </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Số sản phẩm </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Voucher </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Tổng tiền </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Ngày đặt </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Trạng thái </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Tình trạng </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Action </th>
                                    </tr>
                                </thead>
                                <tbody style="color:aliceblue">
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

                                            <td>Đang giao</td>
                                            <td>
                                                <?php
                                                if ($hd['trang_thai'] != 'đã xác nhận') { ?>
                                                    <a href="./index.php?duong_link=capnhatTT&idhd=<?= $hd['id']; ?>"><button class="btn btn-danger">Cập nhật trạng thái</button></a>

                                                <?php } ?>
                                                <br>
                                                <a href="./index.php?duong_link=chitiethd&idhd=<?= $hd['id']; ?>"><button class="btn btn-warning " style="margin:20px;">Chi tiết</button></a>
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
    </div>