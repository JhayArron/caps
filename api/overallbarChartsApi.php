<?php
header('Content-Type: application/json');
include('../controller/chartsApiController.php');
$account_id = $_GET['account_id'];
$result = $portCont->appointmentChartOverall($account_id);
$data = [];

foreach ($result as $row) {
    $data[] = [
        'status' => $row['status'],
        'count' => (int)$row['count']
    ];
}

echo json_encode($data);
?>
