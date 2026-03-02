<?php
session_start();
// If session is not set, redirect to login
if (isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <h2>Welcome Page</h2>

    <p>
        Hi <?php echo $_SESSION['username']; ?>
    </p>

    <a href="logout.php">Logout</a>
</body>
    <script>
        let phpSessionId = "<?php echo $session_id; ?>";
        sessionStorage.setItem("PHP_SESSION_ID", phpSessionId);
        console.log("Session ID:", phpSessionId);
    </script>
</html>