
<?php
require'config.php';

if (isset($_GET['delete'])) {
    $users_id = $_GET['delete'];

    // Delete the user
    $stmt = $pdo->prepare("DELETE FROM users WHERE users_id = ?");
    $stmt->execute([$user_id]);

    
}
?>