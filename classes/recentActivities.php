<?php
include __DIR__ . '/../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT || MYSQLI_REPORT_ERROR);


$start = 0;
$rows_per_page = 5;

$stmt = $conn->prepare("SELECT * FROM logs");
$nr_of_rows = $stmt->num_rows();

$pages = ceil($nr_of_rows / $rows_per_page );

if(isset($_GET['page-nr'])){

$page = $_GET['page-nr'] - 1;
$start = $page * $rows_per_page;

}

$stmt = $conn->prepare("SELECT * FROM logs LIMIT $start, $rows_per_page");
$stmt->execute();
$result = $stmt->get_result();
