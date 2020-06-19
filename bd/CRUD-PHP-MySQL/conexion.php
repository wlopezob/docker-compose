<?php  
    session_start(); #Inicia una secion o reanuda una exixtente
    $servername = getenv("servername");   #Localhost o IP
    $username = getenv("username");          #Usuario de la dB
    $password = getenv("password");   #Contraseña de la dB
    $database = getenv("database");       #Nombre de la db
    $port = getenv("port");             #puerto por el que se conecta la dB
    $conn = mysqli_connect($servername, $username, $password, $database, $port);
        if (!$conn) {
        die("Conexion no establecida: " . mysqli_connect_error());
        }
        #mysqli_connect_error()
        #devuelve una cadena con la descripcion del ultimo error de conexión
?>