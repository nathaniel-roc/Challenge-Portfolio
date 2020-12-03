<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
<?php require 'includes/menu.php'; ?>
<?php require 'includes/contact.php'; ?>
<div class="row">
  <div class="column left">
  <a href="https://www.instagram.com/nathaniel.de.waal/">
    <img src="img/mij.jpg">
</a>
  </div>
  <div class="column right" >
    <h1>Contact</h1>
      <form action="contact.php" method="get">
      <p>naam: <input type="text" name="naam"></p>
      <p>email: <input type="text" name="email"></p>
      <p>onderwerp: <input type="text" name="onderwerp"></p>
      <p>tekst: <input type="text" name="tekst"></p>
    <div class="centerbutton">
      <button class="verstuur" type="submit" name="submit">verstuur</button>
    </div>
      <p> <?php Verstuurd(); ?> <?php SendEmail(); ?></p>
    </forum>
  </div>
</div>
<?php require 'includes/footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>