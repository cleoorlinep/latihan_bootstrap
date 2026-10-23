<?php
header("Content-Type: application/json; charset=utf-8");

require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode([
        "success" => false,
        "message" => "Metode permintaan tidak diizinkan."
    ]);
    exit;
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "" || $email === "" || $message === "") {
    http_response_code(422);
    echo json_encode([
        "success" => false,
        "message" => "Semua kolom wajib diisi."
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode([
        "success" => false,
        "message" => "Format email tidak valid."
    ]);
    exit;
}

try {
    $stmt = $pdo->prepare(
        "INSERT INTO contacts (name, email, message)
         VALUES (:name, :email, :message)"
    );

    $stmt->execute([
        ":name" => $name,
        ":email" => $email,
        ":message" => $message
    ]);

    echo json_encode([
        "success" => true,
        "message" => "Pesan berhasil disimpan. Terima kasih!"
    ]);
} catch (PDOException $e) {
    error_log($e->getMessage());
    http_response_code(500);

    echo json_encode([
        "success" => false,
        "message" => "Pesan gagal disimpan. Silakan coba lagi."
    ]);
}