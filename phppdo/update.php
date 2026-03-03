<?php
require 'config.php';

if (isset($_POST['update'])) {
    $users_id = $_POST['users_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $amount = $_POST['amount'];

    $stmt1 = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE users_id = ?");
    $stmt1->execute([$name, $email, $users_id]);

    $stmt2 = $pdo->prepare("UPDATE orders SET product = ?, amount = ? WHERE users_id = ?");
    $stmt2->execute([$product, $amount, $users_id]);

    header("Location: landing.php");
    exit;
}
?>
