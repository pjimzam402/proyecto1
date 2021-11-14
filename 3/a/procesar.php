
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>validar php</title>
</head>
<body>
    <h1>Datos del usuario</h1>

    <?php

        $name = $_POST['nombre'];
        $correo = $_POST['correo'];
        $numero = $_POST['numero'];
        $sitioWeb = $_POST['sitioweb'];
        $consulta = $_POST['consulta'];

        
    ?>
    <p>Nombre: <?php echo $name; ?></p>
    <p>Correo electrónico: <?php echo $correo; ?></p>
    <p>Teléfono: <?php echo $numero; ?></p>
    <p>Sitio Web: <?php echo $sitioWeb; ?></p>
    <p>Consulta: <?php echo $consulta; ?></p>
</body>
</html>