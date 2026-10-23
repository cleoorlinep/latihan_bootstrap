
<?php
require_once "db.php";

header("Content-Type: application/json; charset=utf-8");

$stmt = $pdo->query(
    "SELECT label, score
     FROM expertise_metrics
     ORDER BY id ASC"
);

echo json_encode($stmt->fetchAll());
?>
