<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<?php if (!in_array($currentPage, ['login.php', 'register.php'])): ?>
  <footer>
    <p>&copy; <?= date("Y") ?> MetaTrack. All rights reserved.</p>
  </footer>
<?php endif; ?>

    <script src="js/scripts.js"></script>
    </body>
</html>
