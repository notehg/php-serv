<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
Name: <input type="text" name="n"><br>
E-mail: <input type="text" name="e"><br>
numero de celular: <input type="text" name="t"><br>
<input type="submit" value="enviar">
</form>



<?php
$nome =$_POST["n"];
$telefone =$_POST["t"];
$email =$_POST["e"];

$servername = "localhost";
$username = "root";
$password = "";
$db = "empresa";


// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("falha ao tentar conectar: " . $conn->connect_error);
}
echo "Conectado com sucesso ;) ";


$sql = "INSERT INTO registroclientes (nome, email, numero)
VALUES ('$nome', '$telefone', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "se consegui boy";
} else {
  echo "Errou: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>