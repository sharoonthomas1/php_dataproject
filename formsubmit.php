<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $gender = htmlspecialchars($_POST['gender']);
    $hobbies = htmlspecialchars($_POST['hobbies']);

    echo "<h1>User Registration Details</h1>";
    echo "Full Name: " . $full_name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Hobbies: " . $hobbies . "<br>";

    $targetDir = "uploads/";

    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0755, true);
    }
    
    if (isset($_FILES["image"])) {
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        
        $allowedTypes = ['jpg', 'jpeg', 'png'];
        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                echo "The file " . htmlspecialchars($fileName) . " has been uploaded successfully.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Only JPG and PNG files are allowed.";
        }
    } else {
        echo "No file was uploaded.";
    }
} else {
    echo "No data was submitted.";
}
?>


