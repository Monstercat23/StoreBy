<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$sql = "SELECT count(id) as data , sum(tongtien) as tongtien , CONCAT_WS('-',MONTH(created_at),YEAR(created_at)) as monthyear FROM donhang WHERE YEAR (created_at) = 2020 GROUP BY monthyear ORDER BY monthyear ASC";
$data = $DB->query($sql);

$data_thu = [];

for ($i = 1; $i <= 12; $i++) {
    $data_thu[] = 0;
}

if ((is_array($data) || is_object($data))) {
    foreach ($data_thu as $key => $value) {
        foreach ($data as $item) {
            if ($key == substr($item->monthyear, 0, strpos($item->monthyear, '-'))) {
                $data_thu[$key - 1] =  $item->tongtien;
            }
        }
    }
}

$title = "Báo cáo tồn kho";
require_once '../../layouts/admin/header.php';

?>

<div class="d-flex justify-content-between mb-4">
    <h4>Báo cáo doanh thu </h4>
</div>

<div class="col-md-6">
    <div class="col-md-12 showcase_content_area px-0">
        <select class="custom-select" id="order-group">
            <option selected="">Chọn thời gian</option>
            <?php
            $currentYear = date('Y');
            for ($i = 0; $i < 5; ++$i) {
                echo '<option value="' . ($currentYear - $i) . '">' . ($currentYear - $i) . '</option>';
            }
            ?>
        </select>
    </div>
    <div class="grid">
        <div class="grid-body">
            <h2 class="grid-title">Bar Chart</h2>

            <div class="item-wrapper">
                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>
                <canvas id="chartjs-bar-chart" width="637" height="425" class="chartjs-render-monitor" style="display: block; height: 340px; width: 510px;"></canvas>
            </div>
        </div>
    </div>
</div>

<?php
require_once '../../layouts/admin/footer.php';
?>

<script>
    if ($("#chartjs-bar-chart").length) {
        let BarData = {
            labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
            datasets: [{
                label: '# of Votes',
                data: <?= json_encode($data_thu) ?>,
                backgroundColor: chartColors,
                borderColor: chartColors,
                borderWidth: 0
            }]
        };
        let barChartCanvas = $("#chartjs-bar-chart").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: BarData,
            options: {
                legend: false
            }
        });

        let url = "ajax-getsales.php";
        let orderGroup = document.querySelector('#order-group');
        orderGroup.addEventListener('change', function() {
            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        groupYear: orderGroup.value
                    })
                })
                .then(response => response.json())
                .then(data => {
                    let BarData = {
                        labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
                        datasets: [{
                            label: '# of Votes',
                            data: data,
                            backgroundColor: chartColors,
                            borderColor: chartColors,
                            borderWidth: 0
                        }]
                    };
                    let barChartCanvas = $("#chartjs-bar-chart").get(0).getContext("2d");
                    let barChart = new Chart(barChartCanvas, {
                        type: 'bar',
                        data: BarData,
                        options: {
                            legend: false
                        }
                    });
                })
                .catch((err) => {
                    console.error(err);
                })
        })
    }
</script>
