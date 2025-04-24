<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Envio de datos en php</h1>
    <form action = "index1.php" method="POST">
        <input type="text" name="nombre"> <br>
        <input type="text" name="telefono"> <br>
        <input type="submit" value="Enviar datos"> 
    </form>

    <?php 
       //echo "texto base php";
       if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre = $_POST["nombre"];
      $telefono = $_POST["telefono"];
    
      echo "Nombre " . $nombre."<br>";
      echo "Telefono " . $telefono;
      }
    ?>
</body>
</html>