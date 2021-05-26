<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
// @TODO -Revisar
$username = 'warce';
$password = 'thor2021';
$servername ='localhost';
$dbname = "socialnet";
try {
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e){
    echo $e->getMessage();
}
// FETCH_ASSOC
$stmt = $dbh->prepare("SELECT * FROM Usuarios");
// Especificamos el fetch mode antes de llamar a fetch()
$stmt->setFetchMode(PDO::FETCH_ASSOC);
// Ejecutamos
$stmt->execute();
// Mostramos los resultados
while ($row = $stmt->fetch()){
    echo "GUID: {$row["GUID"]} <br>";
    echo "Nombre: {$row["nombre"]} <br>";
    echo "Apellido: {$row["apellido"]} <br><br>";
}

?>
</body>
</html>