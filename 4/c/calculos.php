<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>calcular php</title>
</head>
<body>
    <h1>Resultados</h1>

    <?php
       $sexo = $_POST['sexo'];
       $edad = $_POST['edad'];
       $altura = $_POST['altura'];
       $peso = $_POST['peso'];
       $imc = ($peso / ($altura * $altura)) * 10000;
       if($sexo === "Hombre"){
           $tmb = ($peso * 10) + (6.25 * $altura) - (5 * $edad) + 5;
       }else{
           $tmb = ($peso * 10) + (6.25 * $altura) - (5 * $edad) - 161;
       }
    ?>

    <p>El sexo introducido es <?php echo $sexo; ?></p>
    <p>La edad del usuario es <?php echo $edad; ?> años</p>
    <p>La altura del usuario es de <?php echo $altura; ?> metros</p>
    <p>El peso del usuario es de <?php echo $peso; ?> kilogramos</p>
    <p>
        El usuario con un imc de <?php echo $imc; ?> está en 
        <?php
            if($imc<18.50){
                echo "bajo peso.";
            }elseif($imc>18.50 && $imc < 25){
                echo "su peso ideal.";
            }elseif(imc>=25 && imc < 30){
                echo "sobrepeso.";
            }else{
                echo "obesidad";
            }
        ?>
    </p>
    <p>La tasa de metabolismo basal del usuario es <?php echo $tmb; ?> kcal/día</p>


</body>
</html>