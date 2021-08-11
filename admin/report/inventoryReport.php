<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$sql = "SELECT donhang.*, khachhang.hoten, khachhang.phone FROM donhang  join  khachhang on donhang.khachhang_id = khachhang.id";
$data = $DB->query($sql);

$title = "Báo cáo tồn kho";
require_once '../../layouts/admin/header.php';

?>
<div class="d-flex justify-content-between mb-4">
    <h4>Báo cáo tồn kho </h4>
</div>
<div class="col-md-6">
    <div class="col-md-12 showcase_content_area px-0">
        <select class="custom-select">
            <option selected="">Chọn thời gian</option>
            <option value="1">5/2020</option>
            <option value="2">4/2020</option>
            <option value="3">3/2020</option>
        </select>
    </div>
    <div class="grid">
        <div class="grid-body">
            <h2 class="grid-title">Doughnut Chart</h2>

            <div class="item-wrapper">
                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>
                <canvas id="chartjs-doughnut-chart" width="637" height="425" class="chartjs-render-monitor" style="display: block; height: 340px; width: 510px;"></canvas>
            </div>
        </div>
    </div>
</div>
<?php
require_once '../../layouts/admin/footer.php';
?>

<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable({
            "order": [
                [0, "desc"]
            ]
        }, );
        $('.dataTables_length').addClass('bs-select');
    });
</script>
