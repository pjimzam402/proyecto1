
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>calcular php</title>
</head>
<body>
    <h1>Resultados</h1>

    <?php
       $radio = $_POST['radio'];
       $Pi = 3.1416;
       $area = ( $radio * 2 ) * ($Pi * $Pi);
       $longitud = 2 * $Pi * $radio;
    ?>
    <p>El radio introducido es <?php echo $radio; ?> cm</p>
    <p>El área de la circunferencia es de <?php echo $area; ?> cm²</p>
    <p>La longitud de la circunferencia es de <?php echo $longitud; ?> cm²</p>
</body>
</html>