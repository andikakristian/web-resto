<?php
header("Content-Type: application/json");

include "koneksi.php";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the database
    $sql = "INSERT INTO messages (name, email, message) VALUES (?, ?, ?)";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);

    
    if ($stmt->execute()) {
        header('Location: contact.php?message=Pesan terkirim');
        exit; 
    } else {
        http_response_code(500); // Server error
        echo json_encode(["message" => "Gagal mengirim pesan"]);
    }
    

}


?>
