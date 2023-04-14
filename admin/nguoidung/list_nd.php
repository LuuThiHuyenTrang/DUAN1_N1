<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title"> LIST NGƯỜI DÙNG </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=addnd"></a></a></li>
                    <!-- <button class="btn btn-light"> </button> -->
                </ol>
            </nav>
        </div>
        <h2 style="color: red; font-weight: 700;"><?= isset($mess) ? $mess : ""; ?></h2>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" style="color: black; font-weight: 500;">
                                <thead>
                                    <tr>
                                        <th style="width:2%; font-size: 20px; font-weight: 700;"> # </th>
                                        <th style="width:2%; font-size: 20px; font-weight: 700;"> Tên </th>
                                        <th style="width:2%; font-size: 20px; font-weight: 700;"> Hình </th>
                                        <th style="width:2%; font-size: 20px; font-weight: 700;"> Số đt </th>
                                        <th style="width:2%; font-size: 20px; font-weight: 700;"> Email</th>
                                        <th style="width:2%; font-size: 20px; font-weight: 700;"> Mật khẩu</th>
                                        <th style="width:2%; font-size: 20px; font-weight: 700;"> Địa Chỉ </th>
                                        <th style="width:2%; font-size: 20px; font-weight: 700;"> Vai trò </th>
                                        <th style="width:2%; font-size: 20px; font-weight: 700;"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listnd as $nd) { ?>
                                        <tr>
                                            <td width="5%"><?= $nd['id'] ?></td>
                                            <td width="5%"><?= $nd['ten_kh'] ?></td>
                                            <td class="py-1">
                                                <img src="/DUAN1_N1/image/<?= $nd['hinh'] ?>" alt="anh" width='' height=''>
                                            </td>
                                            <td> <?= $nd['sdt'] ?> </td>
                                            <td> <?= $nd['email'] ?></td>
                                            <td><?= $nd['mat_khau'] ?></td>
                                            <td> <?= $nd['dia_chi'] ?></td>
                                            <td> <?= ($nd['vai_tro'] == 1 ? "Admin" : "Khách hàng")  ?></td>
                                            <td>
                                                <?php
                                                if ($nd['vai_tro'] != 1) { ?>
                                                    <a href="./index.php?duong_link=capquyennd&id=<?= $nd['id'] ?>"><button class="btn btn-warning">Cấp quyền admin</button></a>

                                                <?php } ?>
                                                <a href="./index.php?duong_link=xoand&id=<?= $nd['id'] ?>"><button class="btn btn-danger" onclick="return(confirm('Bạn có chắc chắn muốn xóa?'))">Xóa</button></a>

                                            </td>
                                        </tr>
                                    <?php  } ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>