<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title"> THỐNG KÊ </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=bieudo"><button class="btn btn-warning">Biểu Đồ</button></a></li>
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
                                <thead style="width: 100%;">
                                    <tr>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 20%; ">Loại hàng</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 17%;">Số lượng</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 25%;">Giá thấp nhất</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 25%;">Giá cao nhất</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 30%;">Giá trung bình</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listThongKeLoaiSp as $tke) { ?>
                                        <tr style="line-height: 50px;">
                                            <td style="padding-left:20px;">
                                                <p><?php echo $tke['ten_loai']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $tke['so_luong']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo number_format($tke['gia_min']); ?> VNĐ</p>
                                            </td>
                                            <td>
                                                <p style="color: red;"><?php echo number_format($tke['gia_max']); ?> VNĐ</p>
                                            </td>
                                            <td>
                                                <p><?php echo number_format($tke['gia_avg']); ?> VNĐ</p>
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
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php?duong_link=addsp"></a></li>
                    </ol>
                </nav>
            </div>
        </div>