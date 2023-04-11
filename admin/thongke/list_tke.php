<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title"> THỐNG KÊ </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=addsp"></a></li>
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
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 19%;">Loại hàng</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 15%;">Số lượng</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 25%;">Giá thấp nhất</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 25%;">Giá cao nhất</th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;width: 30%;">Giá trung bình</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listThongKeLoaiSp as $tke) { ?>
                                        <tr style="line-height: 50px;">
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3">
                                                        <p><?php echo $tke['ten_loai']; ?></p>
                                                    </div>
                                                </div>
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
    <!-- <div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class=""> Thống Kê </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=addsp"></a></li>
                </ol>
            </nav>
        </div>

        <div class="row">

            <div class="p-5">
                <h2>Bảng so sánh lượt xem</h2>
                <canvas id="luotxem"></canvas>
            </div>
            <div class="p-5">
                <h2>Bảng so sánh lượt bán</h2>
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
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Area chart</h4>
                        <canvas id="areaChart" style="height:250px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Doughnut chart</h4>
                        <canvas id="doughnutChart" style="height:250px"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pie chart</h4>
                        <canvas id="pieChart" style="height:250px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Scatter chart</h4>
                        <canvas id="scatterChart" style="height:250px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>