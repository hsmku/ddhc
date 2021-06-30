<?php
session_start();
// Si le tableau $_POST existe alors le formulaire a été envoyé
?>
<html>
<head>
  <title>DDHC-GAME : Article 2</title>
</head>
<body>
  <p>Si tu as lu le texte 2 clique sur le bouton</p>
  <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
  <input type="submit" name="Submit" value="OK">
  </form>
  <?php
  if (isset($_POST['Submit'])) {
     $_SESSION['ddhc_user']['1'] = 1;
  }
?>
</body>
</html>
