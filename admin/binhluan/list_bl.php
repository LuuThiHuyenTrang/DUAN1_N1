<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title"> DANH SÁCH BÌNH LUẬN </h1>
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
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Tên sản phẩm </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Số bình luận</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Mới nhất </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Cũ nhất </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listsp as $sp) {
                                        $sumbl = tonghopbl($sp['id']); //sumbl có id và tên của sp, số bình luận của sản phẩm lặp đến, ngày bình luận 
                                        if ($sumbl['So_binh_luan'] > 0) {
                                    ?>
                                            <tr>
                                                <td width="5%"><?= $sumbl['id'] ?></td>
                                                <td class="py-1">
                                                    <?= $sumbl['ten_sp'] ?>
                                                </td>
                                                <td> <?= $sumbl['So_binh_luan'] ?></td>

                                                <td> <?= $sumbl['Ngay_bl_moi_nhat'] ?> </td>
                                                <td> <?= $sumbl['Ngay_bl_cu_nhat'] ?> </td>
                                                <td>
                                                    <a href="./index.php?duong_link=chitietbl&id=<?= $sumbl['id'] ?>"><button class="btn btn-warning">Chi tiết</button></a>
                                                </td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div>
                <canvas id="luotxem"></canvas>
            </div>
            <div>
                <canvas id="luotban"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                const dataxem = {
                    labels: [
                        'NIKE', 'ADIDAS'
                    ],
                    datasets: [{
                        label: 'lượt xem',
                        data: [329, 325],
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4
                    }]
                };
                const config = {
                    type: 'pie',
                    data: dataxem,
                };
                const luotxem = new Chart(
                    document.getElementById('luotxem'), config
                );
                // bans
                const databan = {
                    labels: [
                        'NIKE', 'ADIDAS'
                    ],
                    datasets: [{
                        label: 'lượt bán',
                        data: [124, 216],
                        backgroundColor: [
                            'blue',
                            'yellow',
                            'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4
                    }]
                };
                const configban = {
                    type: 'pie',
                    data: databan,
                };
                const luotban = new Chart(
                    document.getElementById('luotban'), configban
                );
            </script>


        </div>




    </div>