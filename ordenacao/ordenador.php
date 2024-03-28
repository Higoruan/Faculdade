<?php

include_once 'functions.php';

if (isset($_GET['btn_ordenar'])) {
    $identificador = 1;

    if ($_GET['numeros'] == '' || $_GET['numeros'] == null) {
        $identificador = 0;
        header("location: index.php?identificador=$identificador");
        exit();
    } else {
        $numeros = explode(',', trim($_GET['numeros']));
        if (!Numerico($numeros)) {
            $identificador = 2;
            header("location: index.php?identificador=$identificador");
            exit();
        };
    }
    $numeros = explode(',', trim($_GET['numeros']));

    $numerosInformados = implode(' | ', $numeros);
} else {
    header("location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>

<body style="margin-top: 20px;">
    <div class="container">
        <?php if ($identificador == 1) { ?>
            <div id="modal" class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Sucess:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div class="flex-grow-1">Ação realizada com sucesso!</div>
            </div>
        <?php } ?>
        <h1 class="text">NÚMEROS ORDENADOS!</h1>
        <div class="form-control">
            <div class="mb-3">
                <div class="col-md-03"></div>
                <label class="form-label" for="number">Números informados:</label>
                <input type="text" disabled value="<?php echo isset($numerosInformados) ? $numerosInformados : ''; ?>" class="form-control" name="numeros" id="numeros" type="text">
            </div>
            <div class="col-md-03">
                <label class="form-label" for="number">Números ordenados:</label>
                <input disabled type="text" value="<?php echo OrdenarDecrescente($numeros); ?>" class="form-control" name="numeros" id="numeros" type="text">
            </div>
        </div>
    </div>
</body>
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
    <symbol id="info-fill" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </symbol>
    <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
</svg>

</html>