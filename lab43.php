<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratorio 4.3</title>
</head>
<body>
   <?php
        
       
        if(array_key_exists('enviar', $_POST)){7u8
            $arreglo=$_POST['valor'];
            $alto=$arreglo[0];
            foreach($arreglo as $valor){
                
                if($alto<=$valor){
                    $alto=$valor;
                }
                
            }
            echo "El valor mas alto introducido es: ".$alto;
            
        }
        else{
    ?>
        <form action="lab43.php" method="post">
            <?php
                for($i=1;$i<=20;$i++){
                    echo "Ingrese el numer ".$i." <input type=\"text\" name=\"valor[]\" value\"\"><br>";
                }
            ?>
            <input type="submit" name="enviar" value="enviar dato">
        </form>
    <?php
        }
    ?>
</body>
</html> 