<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Vitor Dubiela">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Home</title>
</head>

<body> 
    
</body>

    <div id="content">
        <div id="container">

            <div id="index-nav-bar">

                <h2> HOME - REGISTRO DE CARROS </h2>

                <a href="cars.php">Carros Registrados</a>

            </div>

            <div id="index-form">

                <h4>Preencha os seguintes campos para registrar o Carro: </h4>

                <div class="form-box">

                    <form action="cars.php" method="POST" onsubmit="return confirm('Você tem certeza que deseja enviar o formulário?');">
    
                        <p>
                            <label for="brand">Marca: </label> <br>
                            <input type="text"   name="brand"   id="brand"   maxlength="30" placeholder="Ex: Peugeot">
                        </p>
                        
                        <p>
                            <label for="model">Modelo: </label> <br>
                            <input type="text"   name="model"   id="model"   maxlength="50" placeholder="Ex: 307 1.6, 2018">
                        </p>
    
                        <p>
                            <label for="mileage">Quilometragem: </label> <br>
                            <input type="number" name="mileage" id="mileage" maxlength="25" placeholder="Ex: 10000" min="1">
                        </p>
    
                        <p>
                            <label for="lPlate">Placa de Identificação: </label> <br>
                            <input type="text"   name="lPlate"  id="lPlate"  maxlength="15" placeholder="Ex: AAA 0000">
                        </p>
    
                        <p>
                            <button type="submit" name="submit" class="index-button"> 
                                Enviar 
                            </button>
                            <button type="reset"  name="reset"  class="index-button"> 
                                Resetar  
                            </button>
                        </p>
                    </form>

                </div>

            </div>
            
        </div>
    </div>

</html>