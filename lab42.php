<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratorio 4.2</title>
</head>
<body>
   <?php
        $fact=1;
        if(array_key_exists('enviar', $_POST)){
            for($i=1;$i<=$_REQUEST['valor'];$i++){
                $fact=$i*$fact;
            }
          
            echo "el numero factorial es: ".$fact;
        }
        else{
    ?>
        <form action="lab42.php" method="post">
            Ingrese el numero <input type="text" name="valor" value="">
            <input type="submit" name="enviar" value="enviar dato">
        </form>
    <?php
        }
    ?>

</body>
</html> 