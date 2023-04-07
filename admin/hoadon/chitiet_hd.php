<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title"> CHI TIẾT HÓA ĐƠN </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=addsp"></a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="tien" style="color: black;">
                        <li>
                            <h5>- Voucher: <span><?= $hoadon['ten_voucher']; ?></span></h5>
                        </li>
                        <li>
                            <h5>- Tiền hàng: <span><?= $hoadon['tongtienhang']; ?> VNĐ</span></h5>
                        </li>
                        <li>
                            <h5>- Giảm giá: <span> - <?= $hoadon['giamgiasanpham']; ?> VNĐ</span></h5>
                        </li>
                        <li>
                            <h4>=> Tổng tiền: <span style="color: red; font-weight: 900; "> <?= number_format($hoadon['tong_tien']); ?>VNĐ</span></h4>
                        </li>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" style="color: black;">
                                <thead>
                                    <tr>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> # </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Tên </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Hình </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Phân loại </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Tiền ban đầu </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Số lượng </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Tổng tiền </th>
                                    </tr>
                                </thead>
                                <tbody style="color:black">
                                    <?php foreach ($listhdct as $hd) { ?>
                                        <tr>
                                            <td width="5%"><?= $hd['id']; ?></td>
                                            <td> <?= $hd['ten_sp']; ?></td>
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
                </div>
            </div>
        </div>
    </div>

    <style>
        .tien li {
            list-style: none;
            margin: 20px 30px;
        }

        .tien li h5 {
            font-weight: 300;
        }

        .tien li h5 span {
            font-weight: 500;
        }
    </style>