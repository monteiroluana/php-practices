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
    $nome = $_POST["nome"];
    $carro = $_POST["carro"];



    if ($nome) echo "Olá $nome! você escolheu um $carro";
    ?>


</body>

</html>