<?php
require_once 'conn.php';

if (isset($_GET['id'])) {
    $stm = $conn->prepare("DELETE FROM users WHERE id = :id");
    $stm->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    
    if ($stm->execute()) {
        header('Location: Table.php');
        exit(); 
    } else {
        echo "Error: Could not delete the entry.";
    }
} else {
    echo "Error: Invalid ID.";
}

