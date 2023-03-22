<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Danh Mục </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=adddm"><button class="btn btn-warning"> Thêm danh mục </button></a></li>
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
                                <thead>
                                    <tr>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> # </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Tên loại</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Tên Thương Hiệu</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> LoGo</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listdm as $dm) { ?>
                                        <tr>
                                            <td><?= $dm["id"] ?></td>
                                            <td> <?= $dm["ten_loai"] ?> </td>
                                            <td> <?= $dm["ten_thuong_hieu"] ?> </td>
                                            <td class="">
                                                <img src="/DUAN1_N1/image/<?= $dm["logo"] ?>" alt="image" style="width: 100%;height: 200px; border-radius: 0;" />
                                            </td>
                                            <td class="d-flex" style="margin: 50% auto;">
                                                <?php if ($dm['id'] == 99) {
                                                    echo "";
                                                } else { ?>
                                                    <a href="./index.php?duong_link=tnyc_deletedm&id=<?= $dm["id"] ?>"><button class="btn btn-danger">Delete</button></a>
                                                    <a href="./index.php?duong_link=editdm&id=<?= $dm["id"] ?>"><button class="btn btn-warning">Update</button></a>
                                                <?php } ?>
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