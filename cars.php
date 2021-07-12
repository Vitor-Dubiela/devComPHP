<?php include_once 'func.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Vitor Dubiela">
    <link rel="stylesheet" href="./styles/style.css">
    <style>
        #gaveta {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.466);
            position: fixed;
            display: block;
            float: left;
            z-index: 3;
        }

        #ajuste-gaveta {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .gaveta-popup {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px 100px;
            border: 2px solid black;
            background: white;

        }

        #gaveta .gaveta-cont {
            text-align: center;

        }

        .modal-h1-text {
            margin-top: 0;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 800;

        }

        .modal-a-text {
            -webkit-text-stroke: 1px black;
            display: block;
            color: #fff;
            margin-top: 19.3px;
            cursor: pointer;
        }
    </style>
    <script>
        function returnIndex() {
            confirm
        }
    </script>
    <title>Carros Registrados: </title>
</head>

<body>

    <div>
        <div id="content">

            <div>

                <h2>Carros Registrados: </h2>

            </div>

            <div>

                <p>
                    <a href="index.php">Home</a>
                </p>

            </div>

            <div>

                <div>

                    <?php

                    if (isset($_POST['submit'])) {

                        if (
                            !empty($_POST['brand'])   && !empty($_POST['model']) &&
                            !empty($_POST['mileage']) && !empty($_POST['lPlate'])
                        ) {

                            $car['Brand']   = $_POST['brand'];
                            $car['Model']   = $_POST['model'];
                            $car['Mileage'] = $_POST['mileage'];
                            $car['lPlate']  = $_POST['lPlate'];

                            echo insertCar($car);
                        } else {

                            /* POP UP - CSS or JS */
                            // container WHOLE SCREEN
                            // to call DISPLAY BLOCK

                            echo '<div id="gaveta">';
                                echo '<div id="ajuste-gaveta">';
                                    echo '<div class="gaveta-popup">';
                                        echo '<div class="gaveta-cont">';
                                            echo '<h1 class="modal-h1-text">Alguns campos não foram preenchidos. Por favor, preencha todos os campos para registrar o carro.</h1>';
                                            echo '<button class="modal-a-text"><a href="index.php">Home</a></button>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        }
                    }

                    ?>

                </div>

                <div>

                    <?php

                    if (checkCarList() == 1) {

                        showCars();

                        echo '<p>';
                        echo '<a href="delAllCars.php" onclick="return confirm(\'Você tem certeza que desejar apagar todos registros de carros?\')">Esvaziar Lista</a>';
                        echo '</p>';
                    } else {

                        echo 'Não existem carros registrados.';
                        // DIV POP-UP

                    }

                    ?>

                </div>

            </div>

        </div>
    </div>
</body>

</html>