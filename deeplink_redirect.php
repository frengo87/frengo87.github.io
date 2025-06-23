<?php
$username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : '';
$deeplink = "uikli://search?username=" . $username;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Apri Uikli...</title>
  <script>
    // Prova ad aprire il deep link
    window.location.href = "<?php echo $deeplink; ?>";
  </script>
</head>
<body>
  <p>Se l'app non si apre automaticamente, <a href="<?php echo $deeplink; ?>">clicca qui</a>.</p>
</body>
</html>
