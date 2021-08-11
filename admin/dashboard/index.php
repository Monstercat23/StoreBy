<?php
require_once "../../autoload/Autoload.php";

Auth::mustBeAdmin();

$currentMonth = date('m');
$currentYear = date('Y');

$sql = "SELECT count(id) as khachhangmoi from khachhang where YEAR(created_at) = $currentYear and MONTH(created_AT) = $currentMonth";
$newCustomer = $DB->query($sql);

$sql = "SELECT count(id) as donhangmoi from donhang where YEAR(created_at) = $currentYear and MONTH(created_AT) = $currentMonth ";
$newOrder = $DB->query($sql);

$sql = "SELECT count(id) as donhangcho from donhang where YEAR(created_at) = $currentYear and MONTH(created_AT) = $currentMonth and donhang.trangthai = 0";
$orderPending = $DB->query($sql);

$sql = "SELECT count(id) as donhangdaxuly from donhang where YEAR(created_at) = $currentYear and MONTH(created_AT) = $currentMonth and donhang.trangthai = 1";
$orderSuccess = $DB->query($sql);

$sql = "SELECT count(id) as sanphammoi from sanpham where YEAR(created_at) = $currentYear and MONTH(created_AT) = $currentMonth ";
$newProduct = $DB->query($sql);

$sql = "SELECT count(id) as baivietmoi from sanpham where YEAR(created_at) = $currentYear and MONTH(created_AT) = $currentMonth ";
$newPost = $DB->query($sql);

$title = "Dashboard";
require_once "../../layouts/admin/header.php";
?>

<div class="page-content-wrapper-inner">
	<div class="content-viewport">
		<div class="row">
			<div class="col-12 py-5">
				<h4>Dashboard</h4>
				<p class="text-gray mt-3">
					Xin chào ,
					<?= Auth::user()->name ?>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 col-sm-6 col-6 equel-grid">
				<div class="grid">
					<div class="grid-body text-gray">
						<div class="d-flex justify-content-around">
							<span>
                                <?= $newCustomer[0]->khachhangmoi ?>
                            </span>
                            <span class="text-black">Khách hàng mới</span>
						</div>
						<div class="wrapper mt-4">
							<canvas height="45" id="stat-line_1"></canvas>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-6 equel-grid">
				<div class="grid">
					<div class="grid-body text-gray">
						<div class="text-center">
							<?php if ($newOrder[0]->donhangmoi != 0) :?>
								<div>
                                    <?php
                                        $result = $orderPending[0]->donhangcho / $newOrder[0]->donhangmoi * 100;
                                        echo sprintf("%.2f", $result);
                                    ?>
                                    % đang chờ
								</div>
								<div>
                                    <?php
                                        $result = $orderSuccess[0]->donhangdaxuly / $newOrder[0]->donhangmoi * 100;
                                        echo sprintf("%.2f", $result);
                                    ?>
                                    % đã xử lý
								</div>
							<?php endif?>
                        </div>
                        <div class="d-flex justify-content-around">
                            <span>
                                <?= $newOrder[0]->donhangmoi ?>
                            </span>
                            <span class="text-black">Đơn hàng mới</span>
                        </div>
						<div class="wrapper mt-4">
							<canvas height="45" id="stat-line_2"></canvas>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-6 equel-grid">
				<div class="grid">
					<div class="grid-body text-gray">
						<div class="d-flex justify-content-around">
							<span>
                                <?= $newProduct[0]->sanphammoi ?>
                            </span>
                            <span class="text-black">Sản phẩm mới</span>
						</div>
						<div class="wrapper mt-4">
							<canvas height="45" id="stat-line_3"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 equel-grid">
				<div class="grid">
					<div class="grid-body text-gray">
						<div class="d-flex justify-content-around">
							<span>
                                <?= $newPost[0]->baivietmoi ?>
                            </span>
                            <span class="text-black">Bài viết mới</span>
						</div>
						<div class="wrapper mt-4">
							<canvas height="45" id="stat-line_4"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
    require_once '../../layouts/admin/footer.php';
?>
