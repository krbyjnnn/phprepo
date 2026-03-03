<?php
require 'config.php';

$sql = "SELECT users.users_id, users.name, users.email, orders.product, orders.amount 
        FROM users 
        LEFT JOIN orders ON users.users_id = orders.users_id";

$stmt = $pdo->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
