<?php
require_once '../../autoload/Autoload.php';
require_once '../../vendor/phpoffice/phpexcel/Classes/PHPExcel.php';

$id   = Input::get('id');
$order   = $DB->find('donhang', $id);
if (!is_object($order)) {
    die('Không tồn tại đơn hàng');
}

$sql = "SELECT chitietdonhang.*, sanpham.* FROM  donhang
        join chitietdonhang on chitietdonhang.donhang_id = donhang.id 
        join sanpham on chitietdonhang.sanpham_id = sanpham.id 
        WHERE donhang.id = $id";

$data = $DB->query($sql);

$customer = $DB->find('khachhang', $order->khachhang_id);

$objPHPExcel = new PHPExcel();
$objPHPExcel->setActiveSheetIndex(0);

$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Tên sản phẩm');
$objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Số lượng');
$objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Đơn giá(vnđ)');
$objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Thành tiền');

$objPHPExcel->getActiveSheet()->getStyle("A1:C1:D1:E1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth("20");

$rowCount   =   2;

foreach ($data as $item) {
    $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, mb_strtoupper($item->tensanpham, 'UTF-8'));
    $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, mb_strtoupper($item->soluongmua, 'UTF-8'));
    $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, mb_strtoupper(number_format($item->giaban), 'UTF-8'));
    $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, mb_strtoupper(number_format(($item->giaban * $item->soluongmua)), 'UTF-8'));
    $rowCount++;
}

$rowCount += 2;

$objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, 'Tên khách hàng');
$objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $customer->hoten);
$rowCount += 1;
$objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, 'Điện thoại');
$objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $customer->phone);
$rowCount += 1;
$objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, 'Thời gian');
$objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $customer->created_at);
$rowCount += 1;
$objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, 'Tổng tiền');
$objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, number_format($order->tongtien) . ' vnd');



$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
ob_end_clean();
// We'll be outputting an excel file
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="dh-' . $order->created_at . '".xlsx"');
$objWriter->save('php://output');
