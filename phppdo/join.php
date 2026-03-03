
<?php
require 'config.php';

if (isset($_POST['join'])) {
  $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->execute([$name, $email]);

    header("Location: landing.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Join Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Simple</h2>
    
</body>
</html>





