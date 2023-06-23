<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    form {
        padding: 15px;
        border: 1px solid black;
        text-align: center;
    }
    span {
        border: 1px solid red;
    }
    form  * {
        padding:  0 10px;
    }
    </style>
</head>
<body>

    <h1>TP3 Roberto Zitto</h1>

    <?php 

        include("funciones.php");

        //echo count($_POST);

        dirigirFormulario();

    ?>

    <h2>Ejercicio 1</h2>
    <form action="#" method="post">
        <input type="text" name="formulario_1" value="formulario_1" id="" readonly>
        <input type="text" name="valor_1" id="valor_1" placeholder="valor_1">
        <input type="text" name="valor_2" id="valor_2" placeholder="valor_2">
        <input type="submit" value="Enviar">
    </form>

    <h2>Ejercicio 2</h2>
    <form action="#" method="post">
        <input type="text" name="formulario_4" value="formulario_4" id="" readonly>
        <input type="number" name="nro" id="nro"  step="1">
        <input type="submit" value="Enviar">
    </form>

    <h2>Ejercicio 3</h2>
    <form action="#" method="post">
        <input type="text" name="formulario_5" value="formulario_5" id="" readonly>
        <input type="number" name="nro" id="nro"  step="1">
        <input type="submit" value="Enviar">
    </form>

    <h2>Ejercicio 4</h2>
    <form action="#" method="post">
        <input type="text" name="formulario_6" value="formulario_6" id="" readonly>
        <input type="text" name="testo" id="testo">
        <input type="submit" value="Enviar">
    </form>

    <h2>Ejercicio 5</h2>
    <form action="#" method="post">
        <input type="text" name="formulario_7" value="formulario_7" id="" readonly>
        <input type="number" name="lado" min="0" id="" step="1" placeholder="lado">
        <input type="submit" value="Enviar">
    </form>    

    <h2>Experimentos adicionales</h2>
    <form action="#" method="post">
        <input type="text" name="formulario_2" value="formulario_2" id="" readonly>
        <input type="number" name="nro_de_campos" min="0" id="" step="1">
        <input type="submit" value="Enviar">
    </form>    

    <br>




</body>
</html>