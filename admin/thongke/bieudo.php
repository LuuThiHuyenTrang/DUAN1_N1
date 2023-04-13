<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title"> BIỂU ĐỒ THỐNG KÊ </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=bieudo"><button class="btn btn-warning">Biểu Đồ</button></a></li>
                </ol>
            </nav>
        </div>
        <h2 style="color: red; font-weight: 700;"><?= isset($mess) ? $mess : ""; ?></h2>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <main>
                    <h3>Thống Kê Thu Nhập Từng Tháng: </h3>
                    <div id="bar-chart"></div>

                    <h3 style="margin-top: 50px;">Thống Kê Chi Tiêu Cho Từng Danh Mục Sản Phẩm:</h3>
                    <div id="pie-chart"></div>
                </main>
            </div>
        </div>
    </div>

    <script>
        google.load("visualization", "1", {
            packages: ["corechart"]
        });
        google.setOnLoadCallback(drawCharts);

        function drawCharts() {

            var barData = google.visualization.arrayToDataTable([
                ['Thang', 'Tổng thu'],
                <?php foreach ($list_thu_nhap as $thunhap) { ?>['<?= $thunhap['thang'] ?>', <?= $thunhap['tong_tien_ban_duoc'] ?>],
                <?php } ?>
            ]);
            // set bar chart options
            var barOptions = {
                focusTarget: 'category',
                colors: ['cornflowerblue', 'tomato'],
                fontName: 'Open Sans',
                chartArea: {
                    left: 50,
                    top: 10,
                    width: '100%',
                    height: '70%'
                },
                bar: {
                    groupWidth: '90%'
                },
                hAxis: {
                    textStyle: {
                        fontSize: 11
                    }
                },
                vAxis: {
                    minValue: 0,
                    maxValue: 1500,
                    baselineColor: '#DDD',
                    gridlines: {
                        color: '#DDD',
                        count: 4
                    },
                    textStyle: {
                        fontSize: 10
                    }
                },

            };
            // draw bar chart twice so it animates
            var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
            //barChart.draw(barZeroData, barOptions);
            barChart.draw(barData, barOptions);

            // pie chart data
            var pieData = google.visualization.arrayToDataTable([
                ['danhmuc', 'tien'],
                <?php foreach ($listThong_ke_tien_danh_muc as $dm) { ?>['<?= $dm['ten_loai'] ?>', <?= $dm['tong_tien'] ?>],
                <?php } ?>
            ]);
            // pie chart options
            var pieOptions = {
                backgroundColor: 'transparent',
                pieHole: 0.4,
                colors: ["cornflowerblue",
                    "olivedrab",
                    "orange",
                    "tomato",
                    "crimson",
                    "purple",
                    "turquoise",
                    "forestgreen",
                    "navy",
                    "gray"
                ],
                pieSliceText: 'value',
                tooltip: {
                    text: 'percentage'
                },
                fontName: 'Open Sans',
                chartArea: {
                    width: '100%',
                    height: '94%'
                },
                legend: {
                    textStyle: {
                        fontSize: 13
                    }
                }
            };
            // draw pie chart
            var pieChart = new google.visualization.PieChart(document.getElementById('pie-chart'));
            pieChart.draw(pieData, pieOptions);
        }
    </script>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

        body {
            font-family: "Open Sans", Arial;
            color: red;
        }

        main {
            width: 70%;
            margin: 10px auto;
            padding: 10px 20px 30px;
            background: #FFF;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
        }

        p {
            margin-top: 2rem;
            font-size: 13px;
        }

        #bar-chart {
            width: 100%;
            height: 300px;
            position: relative;
        }

        #line-chart {
            width: 100%;
            height: 300px;
            position: relative;
        }

        #bar-chart::before,
        #line-chart::before {
            content: "";
            position: absolute;
            display: block;
            width: 240px;
            height: 30px;
            left: 155px;
            top: 254px;
            background: #FAFAFA;
            box-shadow: 1px 1px 0 0 #DDD;
        }

        #pie-chart {
            width: 100%;
            height: 250px;
            position: relative;
        }

        #pie-chart::before {
            content: "";
            position: absolute;
            display: block;
            width: 120px;
            height: 115px;
            left: 500px;
            top: 0;
            background: #FAFAFA;
            box-shadow: 1px 1px 0 0 #DDD;
        }

        #pie-chart::after {
            content: "";
            position: absolute;
            display: block;
            top: 300px;
            left: 170px;
            width: 170px;
            height: 2px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            box-shadow: 0 0 3px 4px rgba(0, 0, 0, 0.1);
        }
    </style>

