// Main Dashboard Part of the Program

.<?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit;
    }
?>

<?php include 'includes/header.php'; ?>

<?php include 'includes/footer.php'; ?>