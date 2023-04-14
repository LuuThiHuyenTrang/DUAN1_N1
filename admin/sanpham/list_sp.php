<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title"> LIST PRODUCTS </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=addsp"><button class="btn btn-success">ADD PRODUCT</button></a></li>
                </ol>
            </nav>
        </div>
        <h2 style="color: red; font-weight: 700;"><?= isset($mess) ? $mess : ""; ?></h2>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-striped" style="color: black; font-weight: 500;">
                                <thead style="width: 100%; ">
                                    <tr>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 3%;"> # </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 15%;"> Hình </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 30%;"> Tên sản phẩm</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 15%;"> Giá </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 20%;"> Tổng Số Lượng </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 20%;"> Ngày Nhập </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 20%;"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listsp as $sp) { //$listsp: index 
                                        if ($sp['tong_so_luong'] < 1) { ?>
                                            <script>
                                                confirm("Sản phẩm <?= $sp['ten_sp'] ?> đã hết hàng !!!");
                                            </script>
                                        <?php luutruSp($sp['id']);
                                            break;
                                        }
                                        ?>
                                        <tr>
                                            <td><?= $sp["id"] ?></td>
                                            <td class="py-1">
                                                <img src="/DUAN1_N1/image/<?= $sp["hinh"] ?>" alt="image" width="170px" />
                                            </td>
                                            <td style="padding-left: 20px;"> <?= $sp["ten_sp"] ?> </td>

                                            <td style="color:brown; font-weight: 900;"> <?php echo number_format($sp['tien']) ?> VNĐ</td>
                                            <td style="text-align: center;"> <?= $sp["tong_so_luong"] ?> </td>
                                            <td> <?= $sp["ngay_nhap"] ?> </td>
                                            <td class="d-flex justify-content-center align-items-center" style="margin: 100% auto;">
                                                <a href="./index.php?duong_link=luutrusp&id=<?= $sp["id"] ?>"><button class="btn btn-danger" onclick="return(confirm('Bạn có chắc chắn muốn xóa?'))">XÓA</button></a>
                                                <a href="./index.php?duong_link=editsp&id=<?= $sp["id"] ?>"><button class="btn btn-warning">SỬA</button></a>
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