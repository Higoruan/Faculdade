<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Soma</title>
</head>

<body style="margin-top: 20px;">
    <form action="somador.php" method="post">
        <div class="container">
            <h1 class="text">SOMA DOS NÚMEROS</h1>
            <div class="form-control">
                <div class="mb-3">
                    <label class="form-label" for="n1">Informe o primeiro número:</label>
                    <input type="number" class="form-control" required value="<?php echo isset($_GET['n1']) ? $_GET['n1'] : ''; ?>" name="n1" id="n1" placeholder="Digite aqui..." type="text">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="n2">Informe o segundo número:</label>
                    <input type="number" class="form-control" required value="<?php echo isset($_GET['n2']) ? $_GET['n2'] : ''; ?>" name="n2" id="n2" placeholder="Digite aqui..." type="text">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="n2">Soma:</label>
                    <input value="<?php echo isset($_GET['soma']) ? $_GET['soma'] : '' ?>" disabled type="number" class="form-control" type="text">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="n2">Resultado:</label>
                    <input value="<?php echo isset($_GET['resultado']) ? $_GET['resultado'] : '' ?>" disabled type="number" class="form-control" type="text">
                </div>
            </div>
            <div class="form-container">
                <div class="form-control">
                   <b>Regras:</b>
                    <br>
                    Caso o valor da soma seja maior que 10, este deverá ser apresentando somando-se a ele mais 8;
                    <br>
                    Se o valor da soma seja menor ou igual a 10, este deverá ser apresentado subtraindo-se 5.
                </div>
            </div><br>
            <div class="form-container col-mb-03">
                <button name="btn_somar" class="btn btn-success">Somar</button>
            </div>
    </form>
</body>

</html>