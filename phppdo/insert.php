
<?php

require 'config.php';

if (isset($_POST['add'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$product = $_POST['product'];
$amount = $_POST['amount'];


if (isset($_POST['add'])){
    $stmt = $pdo->prepare("INSERT INTO users (name, email)
    VALUES (?,?)");
    $stmt->execute([$name, $email]);

    //Get the last inserted id
    $users_id = $pdo->lastInsertId();
    
    //
    $stmt2 = $pdo->prepare("INSERT INTO orders (users_id, product, amount) 
    VALUES (?, ?, ?)");
    $stmt2->execute([$users_id, $product, $amount]);

    echo "User and order added successfully!";

}
}
?>