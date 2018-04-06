
<html>
<body>
<?php
$nombre = $_POST['Nombre'];
$descripcion = $_POST['descripcion'];
$lugar = $_POST["lugar"];
$correo = $_POST['correo'];

$mailsend = mail ('carloscarmonaperes44@gmail.com','consulta de eventos',"Nombre: $nombre\r\nDescripcion: $descripcion\r\nLugar: $lugar\r\nCorreo: $correo);

if ($mailsend){
   echo "<p>Hola $nombre.Hemos recibido su correo electronico, en breve nos comunicsremos con usted gracias..<p>";
}

else{

    echo "Lo siento su correo no fue enviado";
}

?>
</body>
</html>