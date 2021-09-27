<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h4>kwadrat</h4>
  <form method="POST">
    <input type="text" name="side" placeholder="podaj bok a"></input><br>
    <input type="submit" value="oblicz"></input><br>
  </form>

  <?php
    $pole = $_POST['side'] * $_POST['side'];
    $obwod = $_POST['side'] * 4;
    echo("Pole wynosi: ${pole}");
    echo("Obwód wynosi: ${obwod}");
  ?>

</body>
</html>