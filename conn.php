<?php
    // DEFININDO OS PARAMETROS DAS CONSTANTES
        /* 1st - especifica o host */           define ('HOST', 'localhost');
        /* 2nd - especifica o Mysql username */ define ('USER', 'root');
        /* 3rd - especifica a senha do Mysql */ define ('PASS', '');
        /* 4th - especifica o db padrao */      define ('DB', 'cars_db');

    // DEFININDO UMA VARIAVEL PARA FAZER A CONEXAO 
        // Orientado a Objetos 
            $conn = new mysqli(HOST, USER, PASS, DB);

        // Procedural
            // $conn = mysqli_connect(HOST, USER, PASS, DB);
    
?>