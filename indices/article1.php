<?php
session_start();
// Si le tableau $_POST existe alors le formulaire a été envoyé
?>
<html>
<head>
  <title>DDHC-GAME : Article 1</title>
</head>
<body>
  <p>Si tu as lu le texte clique sur le bouton</p>
  <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
  <input type="submit" name="Submit" value="OK">
  </form>
  <?php
  if (isset($_POST['Submit'])) {
     $_SESSION['ddhc_user']['0'] = 1;
  }
?>
</body>
</html>
