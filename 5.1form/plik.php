<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h4>Wybierz jedną z opcji</h4>
  <form action="scripts/script.php" method="POST">
    <input type="text" name="name" placeholder="imie i nazwisko"></input><br>
    <input type="radio" name="geometric" value="kwadrat" checked=true>kwadrat</input><br>
    <input type="radio" name="geometric" value="prostokat">prostokąt</input><br><br>
    <input type="submit" value="zatwierdz opcje"></input><br>
  </form>
</body>
</html>