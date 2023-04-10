<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title"> Thống Kê </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=addsp"></a></li>
                </ol>
            </nav>
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