
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>validar php</title>
</head>
<body>
    <h1>CV del usuario</h1>

    <?php

        $name = $_POST['nombre'];
        $correo = $_POST['correo'];
        $numero = $_POST['numero'];
        $dni = $_POST['dni'];
        $experiencia = $_POST['experiencia'];
        $formacion = $_POST['formacion'];
        $idiomas = $_POST['idiomas'];
        $datosinteres = $_POST['datosinteres'];
        
    ?>
    <p>Nombre: <?php  echo $name; ?></p>
    <p>Correo Electrónico: <?php echo $correo; ?></p>
    <p>Teléfono: <?php  echo $numero; ?></p>
    <p>DNI: <?php echo $dni; ?></p>
    <p>Experiencia: <?php echo $experiencia; ?> años</p>
    <p>Formación: <?php  echo $formacion; ?></p>
    <p>Idiomas: <?php  echo $idiomas; ?></p>
    <p><?php echo $datosinteres; ?></p>
</body>
</html>