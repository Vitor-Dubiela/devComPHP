<?php
    
    include_once 'conn.php';

    /* cars.php */
    
        /* FUNCTION - INSERT CAR'S INFO INTO TABLE */

            function insertCar ($car) {

                global $conn;

                $brand   = "'".$car['Brand']."'";
                $model   = "'".$car['Model']."'";
                $mileage =     $car['Mileage'];
                $lPlate  = "'".$car['lPlate']."'";

                $insertCommand = "INSERT INTO cars_tb
                                     (brand, model, mileage, license_plate)
                                  SELECT * FROM (
                                      SELECT $brand as brand, $model as model,
                                             $mileage as mileage, $lPlate as license_plate
                                  ) AS tmp
                                  WHERE NOT EXISTS(
                                      SELECT * FROM cars_tb WHERE model = $model
                                  ) LIMIT 1";

                mysqli_query($conn, $insertCommand);

                echo '<p>';
                    
                    if ( mysqli_affected_rows($conn) > 0 )
                    {

                        return "O carro foi registrado!";

                    }
                    else
                    {

                        return "O carro não foi registrado. Para tentar novamente, clique no botão 'Home'.";

                    }
                
                echo '<p>';
                
            }
    
        /* FUNCTION - CHECK CAR LIST  */
    
                function checkCarList()
                {
    
                    global $conn;

                    $selectCommand = "SELECT * FROM cars_tb";

                    mysqli_query($conn, $selectCommand);

                    if ( mysqli_affected_rows($conn) > 0 )
                    {

                        return 1;

                    }
                    else
                    {

                        return 0;

                    }

                }

        /* FUNCTION - SHOW CAR LIST */

            function showCars ()
            {

                global $conn;

                $selectCommand = "SELECT * FROM cars_tb";

                $querySelectResult = mysqli_query($conn, $selectCommand);

                if ( mysqli_affected_rows($conn) > 0 )
                {

                    while ( $car = mysqli_fetch_assoc($querySelectResult) )// it's going to assoc one by one
                    {
                        echo '<p>';

                            foreach ( $car as $index => $value )
                            {

                                echo '<b>' . $index . ': </b>' . $value . '<br>';
                                
                                if ( $index == 'id' )
                                {
                                    $id = $value;
                                }

                            }    
                            echo '<a href="editCar.php?id=' . $id . '"> Editar </a>';
                            
                        echo '</p>';

                    }

                }
            }


    /* delAllCars.php */

        /* FUCNTION - EMPTY CARS FROM LIST */

            function emptyList ()
            {

                global $conn;

                $deleteCommand = "DELETE FROM cars_tb";

                mysqli_query($conn, $deleteCommand);

                if ( mysqli_affected_rows($conn) > 0 )
                {

                    header('location: cars.php?msg=empOk');

                }
                else
                {

                    header('location: cars.php?msg=empError');

                }
            }


    /* editCar.php */

        /* FUNCTION - VERIFY CAR */

            function checkCar ($id)
            {

                global $conn;

                $selectCommand = "SELECT * FROM cars_tb WHERE id= $id";

                $querySelectResult = mysqli_query($conn, $selectCommand);

                if ( mysqli_affected_rows($conn) > 0 )
                {

                    $car = mysqli_fetch_assoc($querySelectResult);
                    return $car;

                }
                else
                {

                    return null;

                }

            }
        
        
    /* updateCar.php */

        /* FUNCTION - UPDATE CAR */

            function editCar ($id, $car)
            {

                global $conn;

                $brand   = "'" . $car['brand']  . "'"; 
                $model   = "'" . $car['model']  . "'"; 
                $mileage = $car['mileage']; 
                $lPlate  = "'" . $car['lPlate'] . "'"; 

                $updateCommand = "UPDATE cars_tb
                                  SET brand = $brand, model = $model, mileage = $mileage, license_plate = $lPlate
                                  WHERE id = $id";

                mysqli_query($conn, $updateCommand);

                if( mysqli_affected_rows($conn) > 0 )
                {

                    header('location: cars.php?msg=upOk');

                }
                else
                {

                    header('location: cars.php?msg=upError');

                }

            }   

?>