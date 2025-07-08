

.<?php
    // main dash
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit;
    }
?>

<?php include 'includes/header.php'; ?>
<div class="success-page">
  <div class="success-login-container">
    <p class="success-message">✅ Successfully logged in.</p>
    <a href="tracker_dashboard.php" class="cta-button-alt">Enter Macro Tracker</a>
  </div>
</div>



<?php include 'includes/footer.php'; ?>