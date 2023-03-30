<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> VOUCHER </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=addvc"><button class="btn btn-warning"> Thêm Mã Giảm Giá </button></a></li>
                </ol>
            </nav>
        </div>
        <h2 style="color: red; font-weight: 700;"><?= isset($mess) ? $mess : ""; ?></h2>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" style="color: white;">
                                <thead style="width: 100%;">
                                    <tr>
                                        <th style="width:2%;color: blue; font-size: 20px; font-weight: 700;"> # </th>
                                        <th style="width:8%;color: blue; font-size: 20px; font-weight: 700;"> Tên voucher</th>
                                        <th style="width:10%;color: blue; font-size: 20px; font-weight: 700;"> Mô tả</th>
                                        <th style="width:10%;color: blue; font-size: 20px; font-weight: 700;"> Mức giảm giá </th>
                                        <th style="width:10%;color: blue; font-size: 20px; font-weight: 700;"> Số lượng</th>
                                        <th style="width:20%;color: blue; font-size: 20px; font-weight: 700;"> Ngày tạo</th>
                                        <th style="width:20%;color: blue; font-size: 20px; font-weight: 700;"> Hạn sử dụng</th>
                                        <th style="width:20%;color: blue; font-size: 20px; font-weight: 700;;"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listvc as $vc) { ?>
                                        <tr>
                                            <td><?= $vc["id"] ?></td>
                                            <td> <?= $vc["ten_voucher"] ?> </td>
                                            <td> <?= $vc["mo_ta"] ?> </td>
                                            <td> <?= $vc["muc_giam_gia"] ?> </td>
                                            <td> <?= $vc["so_luong"] ?> </td>
                                            <td> <?= $vc["ngay_tao"] ?> </td>
                                            <td> <?= $vc["hsd"] ?> </td>
                                            <td class="d-flex" style="margin: 50% auto;">

                                                <a href="./index.php?duong_link=tnyc_deletevc&id=<?= $vc["id"] ?>"><button class="btn btn-danger">Delete</button></a>
                                                <a href="./index.php?duong_link=editvc&id=<?= $vc["id"] ?>"><button class="btn btn-warning">Update</button></a>

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