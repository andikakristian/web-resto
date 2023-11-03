<?php
header("Content-Type: application/json");

include "koneksi.php";

// Mengecek apakah parameter 'id' telah diterima
if (isset($_GET['id'])) {
    $projectId = $_GET['id'];
    $query = "SELECT * FROM menu WHERE id = $projectId";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $project = $result->fetch_assoc();
        echo json_encode($project);
    } else {
        echo json_encode(["message" => "Proyek tidak ditemukan"]);
    }
} else {
    // Mengecek endpoint
    if (isset($_GET['endpoint'])) {
        $endpoint = $_GET['endpoint'];

        if ($endpoint === "all") {
            $result = $koneksi->query("SELECT * FROM `menu` ORDER BY `judul` ASC");
        } elseif ($endpoint === "makanan") {
            $result = $koneksi->query("SELECT * FROM menu WHERE jenis='Makanan' ");
        } elseif ($endpoint === "minuman") {
            $result = $koneksi->query("SELECT * FROM menu WHERE jenis='Minuman' ");
        }elseif ($endpoint === "snack") {
            $result = $koneksi->query("SELECT * FROM menu WHERE jenis='Snack' ");    
        } else {
            http_response_code(404);
            echo json_encode(["message" => "Endpoint tidak ditemukan"]);
            exit();
        }

        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data);
        } else {
            echo json_encode(["message" => "Data tidak ditemukan"]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Parameter 'endpoint' harus ditentukan"]);
    }
}

$koneksi->close();
?>
