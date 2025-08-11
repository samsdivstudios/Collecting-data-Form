<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = htmlspecialchars($_POST['name']); 
    $email = htmlspecialchars($_POST['email']); 
    $message = htmlspecialchars($_POST['message']); 
 
    $dataToSave = "Name: $name, Email: $email, Message: 
$message\n"; 
 
    // Save data to a file 
    $file = 'data.txt'; 
    file_put_contents($file, $dataToSave, FILE_APPEND | 
LOCK_EX); 
 
    echo 'Data saved successfully!'; 
} else { 
    echo 'Invalid request method.'; 
} 
?>