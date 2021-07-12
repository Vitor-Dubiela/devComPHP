<?php include_once 'func.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Vitor Dubiela">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Editar Carro</title>
</head>

<body>

    <div id="content">

        <div>

            <h2>Editar Carro:</h2>        

        </div>
    
        <?php
        
            if ( empty($_GET['id']) )
            {

                header('location: cars.php?msg=emp');
                
            }
            else
            {
                
                $id = $_GET['id'];
                //echo $id;

                $car = checkCar($id);

                if ( $car != null )
                {

                    foreach ( $car as $index => $value )
                    {

                        echo '<b>' . $index . ':</b> ' . $value . '<br>';

                    }

                    echo '<form action="updateCar.php?id=' . $id . '" method="POST">';
                    
                        echo '<p>';

                            echo '<input type="text"   name="brand"   id="brand"   maxlength="30" value="' . $car['brand']   . '"> <br>';
                            echo '<input type="text"   name="model"   id="model"   maxlength="50" value="' . $car['model']   . '"> <br>';
                            echo '<input type="number" name="mileage" id="mileage" maxlength="25" value="' . $car['mileage'] . '" min="1"> <br>';
                            echo '<input type="text"   name="lPlate"  id="lPlate"  maxlength="15" value="' . $car['license_plate']  . '"> <br>';
                            
                        echo '</p>';

                        echo '<p>';
                        
                            echo '<button type="submit" name="updateButton"> Update </button>';
                        
                        echo '</p>';

                    echo '</form>';
                    
                }
                else
                {

                    echo 'The car isn\'t able anymore. ';

                }

            }

        ?>
    </div>

</body>

</html>