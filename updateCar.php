<?php

    include_once 'func.php';

    if ( isset($_POST['updateButton']) )
    {

        $id = $_GET['id'];
        $car['brand']   = $_POST['brand'];
        $car['model']   = $_POST['model'];
        $car['mileage'] = $_POST['mileage'];
        $car['lPlate']  = $_POST['lPlate'];

        if( !empty($id) && !empty($car['brand']) && !empty($car['model']) && !empty($car['mileage']) && !empty($car['lPlate']) )
        {

            editCar($id, $car);

        }
        else
        {
            
            header('location: cars.php?msg=Empty');

        }

    }
    else
    {

        header('location: cars.php?msg=!isset');

    }
?>