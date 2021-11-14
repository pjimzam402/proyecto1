<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>calcular php</title>
</head>
<body>
    <h1>¡¡ PIEDRA, PAPEL, TIJERA, LAGARTO, SPOCK !!</h1>

    <?php

        $opcion = $_POST['opcion'];
        $azar = 1 + rand()%5;
    ?>
    <p>
        El usuario sacó 
        <?php 
            if($opcion==1){
                echo "piedra.";
            }elseif($opcion==2){
                echo "papel.";
            }elseif($opcion==3){
                echo "tijeras.";
            }elseif($opcion==4){
                echo "lagarto.";
            }else{
                echo "Spock.";
            }
        ?>
    </p>
    <p>
        El ordenador sacó 
        <?php 
            if($azar==1){
                echo "piedra.";
            }elseif($azar==2){
                echo "papel.";
            }elseif($azar==3){
                echo "tijeras.";
            }elseif($azar==4){
                echo "lagarto.";
            }else{
                echo "Spock.";
            }
        ?>
    </p>
    <p>
        <?php
            if($opcion===$azar){
                echo "Empate";
            }elseif(($opcion==1&&$azar==3)||($opcion==2&&$azar==1)||($opcion==3&&$azar==2)||($opcion==3&&$azar==4)||($opcion==4&&$azar==5)||($opcion==4&&$azar==2)||($opcion==1&&$azar==4)||($opcion==5&&$azar==3)||($opcion==2&&$azar==5)){
                echo "¡¡ Enhorabuena,has ganado !!<br>";
            }else{
                 echo "Has perdido, mejor suerte la próxima vez :( ";
            }
        ?>
    </p>

</body>
</html>