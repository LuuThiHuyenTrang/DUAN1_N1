<?php
    if (isset($_GET["action"]) && isset($_GET["action"]) == "delete" && isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_sanpham($_GET['id']);
        header("Refresh:0; url=index.php?duong_link=xoasp");
    }
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">List Product </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=addsp">Add Product</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th style="width: 17%;"> Hình </th>
                                        <th style="width: 40%;"> Tên sản phẩm</th>
                                        <th style="width: 15%;"> Giá </th>
                                        <th style="width: 20%;"> Ngày Nhập </th>
                                        <th style="width: 20%;"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listsp as $sp) { ?>
                                        <tr>
                                            <td><?= $sp["id"] ?></td>
                                            <td class="py-1">
                                                <img src="/DUAN1_N1/image/<?= $sp["hinh"] ?>" alt="image" width="170px" />
                                            </td>
                                            <td> <?= $sp["ten_sp"] ?> </td>

                                            <td> <?php echo number_format(gia_sp($sp["id"])["gia"]) ?> VNĐ</td>
                                            <td> <?= $sp["ngay_nhap"] ?> </td>
                                            <td class="d-flex" style="margin: 50% auto;">
                                            <!-- <?php var_dump(headers_sent()); ?> -->
                                                <a href="./index.php?duong_link=xoasp&id=<?= $sp["id"] ?>"><button class="btn btn-danger">Delete</button></a>
                                                <a href="./index.php?duong_link=editsp&id=<?= $sp["id"] ?>"><button class="btn btn-warning">Update</button></a>
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

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript">
        function onDelete() {
            $.get(location.origin + location.pathname + "?duong_link=xoasp?id=<?= $sp["id"]?>", function(data, status) {
                console.log(data);
                console.log(status);
            });
            // location.href = location.origin + location.pathname + "?duong_link=test";
        }
    </script> -->