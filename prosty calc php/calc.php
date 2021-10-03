<html lang ="pl">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<form method="GET" action=".\calc.php">
			<label>
				Liczba 1
				<input type="number" name="num1" placeholder="Wprowadz pierwsza liczbe"><br>
			</label>
			<label>
				Liczba 2
				<input type="number" name="num2" placeholder="Wprowadz drugą liczbe"><br>
			</label>
			<label>
				Dodawanie
			<input type="radio" name="operacja" value="dodawanie" checked="true"><br>
			</label>
			<label>
				Odejmowanie
			<input type="radio" name="operacja" value="odejmowanie"><br>
			</label>
			<br>
			<input type=submit value="przelicz"><br><br>
		</form>
	</body>
<?php
if(!empty($_GET['num1']) && !empty($_GET['num2']))
{
	if($_GET['operacja'] == "dodawanie")
	{
		$result = $_GET['num1'] + $_GET['num2'];
		echo "wynik dodawania to: $result";
	}
	else if ($_GET['operacja'] == "odejmowanie")
	{
		$result = $_GET['num1'] - $_GET['num2'];
		echo "wynik odejmowania to: $result";
	}
	else
	{
		echo "nieznany błąd";
	}
}
else
{
	echo "uzupełnij wszystkie pola";
}
?>