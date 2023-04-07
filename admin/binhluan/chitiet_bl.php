<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title"> CHI TIẾT BÌNH LUẬN </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=listbl">TỔNG HỢP BÌNH LUẬN</a></li>
                </ol>
            </nav>
        </div>
        <h1 style="color: red; font-weight: 700; text-align: center;"><?= isset($mess) ? $mess : ""; ?></h1>

        <h2><?= $spOne['ten_sp'] ?></h2>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" style="color: black; font-weight: 500;">
                                <thead>
                                    <tr>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> # </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Nội Dung </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Ngày Bình Luận</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Người Bình Luận </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listbl as $bl) {

                                    ?>
                                        <tr>
                                            <td width="5%"><?= $bl['id'] ?></td>
                                            <td class="py-1">
                                                <?= $bl['noi_dung'] ?>
                                            </td>
                                            <td> <?= $bl['ngay'] ?></td>

                                            <td> <?= $bl['ten_kh'] ?> </td>
                                            <td>
                                                <a href="./index.php?duong_link=xoabl&idbl=<?= $bl['id'] ?>&idsp=<?= $spOne['id'] ?>"><button class="btn btn-warning" onclick="return(confirm('Bạn có chắc chắn muốn xóa?'))">Xóa</button></a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>