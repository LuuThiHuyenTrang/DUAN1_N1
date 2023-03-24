<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Hóa Đơn </h3>
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
                                        <th> # </th>
                                        <th> Thông tin khách mua </th>
                                        <th> Số sản phẩm </th>
                                        <th> Voucher </th>
                                        <th> Tổng tiền </th>
                                        <th> Ngày đặt </th>
                                        <th> Trạng thái </th>
                                        <th> Tình trạng </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody style="color:aliceblue">
                                    <?php foreach ($listhd as $hd) { ?>
                                        <tr>
                                            <td width="5%"><?= $hd['id']; ?></td>
                                            <td style="line-height: 20px;"> - <?= $hd['ten_kh']; ?> <br> - <?= $hd['sdt']; ?> <br> - <?= $hd['email']; ?><br> - <?= $hd['dia_chi']; ?></td>
                                            <td>5</td>
                                            <td> <?= $hd['ten_voucher']; ?> </td>
                                            <td style="color: red; font-weight: 900;"> <?= number_format($hd['tong_tien']); ?>VNĐ </td>
                                            <td> <?= $hd['ngay_dat']; ?> </td>
                                            <td> <?= $hd['trang_thai']; ?> </td>

                                            <td>Đang giao</td>
                                            <td>
                                                <a href="./index.php?duong_link=capnhatTT&idhd=<?= $hd['id']; ?>"><button class="btn btn-danger">Cập nhật trạng thái</button></a>
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