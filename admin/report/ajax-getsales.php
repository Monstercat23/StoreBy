<?php
require_once '../../autoload/Autoload.php';


Auth::mustBeAdmin();

$request_body = file_get_contents('php://input');

$data = json_decode($request_body);

$year = $data->groupYear;

$sql = " SELECT count(id) as data , sum(tongtien) as tongtien , CONCAT_WS('-',MONTH(created_at),YEAR(created_at)) as monthyear
FROM donhang
WHERE YEAR(created_at) = $year
GROUP BY monthyear
ORDER BY monthyear ASC ";


$data = $DB->query($sql);
$data_thu = [];
$i = 1;
while ($i <= 12) {
    $data_thu[] = 0;
    $i++;
}

foreach ($data_thu as $key => $value) {
    if (is_array($data)) {
        foreach ($data as $item) {
            if ($key == substr($item->monthyear, 0, strpos($item->monthyear, '-'))) {
                $data_thu[$key - 1] =  $item->tongtien;
            }
        }
    }
}

header('Content-type: application/json');
echo json_encode($data_thu);
