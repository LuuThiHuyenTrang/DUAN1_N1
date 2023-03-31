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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
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
                                <tbody style="color:aliceblue">
                                    <?php $tongtien = 0;
                                    foreach ($listhdct as $hd) {
                                        $tongtien = $tongtien + ($hd['tien'] * $hd['so_luong']);
                                    ?>
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
        <h1 style="text-align: right;">Tổng tiền: <span style="color: red;"><?= number_format($tongtien) ?> VNĐ</span></h1>
    </div>