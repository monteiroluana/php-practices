<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
</head>

<body>

    <form action="" method="post">
        Nome: <input type=text name=nome><br>
        Carro:
        <select name=carro>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
        </select>
        <br>
        <input type=submit value="OK">
    </form>

    <hr>

    <?php
    /*
        isset — Informa se a variável foi iniciada
        Retorna TRUE se var existe; FALSE caso contrário.
    */
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "NOME Ñ DEFINIDO";
    $carro = isset($_POST["carro"]) ? $_POST["carro"] : "CARRO Ñ DEFINIDO";

    echo "Olá $nome! você escolheu um $carro";
    
    ?>


</body>

</html>