<?php

if (isset($_GET['btn_enviar'])) {
    $mes = $_GET['mes'];
    $identificador = 1;
    if ($mes == '' || $mes == null) {
        $identificador = 2;
    } else if (!is_numeric($mes) || $mes < 1 || $mes > 12) {
        $identificador = 0;
    } else {
        switch ($mes) {

            case '1':

                $mes = 'Jeneiro';

                break;
            case '2':

                $mes = 'Fevereiro';

                break;
            case '3':

                $mes = 'Março';

                break;
            case '4':

                $mes = 'Abril';

                break;
            case '5':

                $mes = 'Maio';

                break;
            case '6':

                $mes = 'Junho';

                break;
            case '7':

                $mes = 'julho';

                break;
            case '8':

                $mes = 'Agosto';

                break;
            case '9':

                $mes = 'Setembre';

                break;
            case '10':

                $mes = 'Outubro';

                break;
            case '11':

                $mes = 'Novembro';

                break;
            case '12':

                $mes = 'Dezembro';

                break;
        }
    }
} else {
    header("Location: index.html");
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
    <title>Document</title>
</head>

<body style="margin-top: 20px;">

    <div class="container">
        <?php if ($identificador == 0) { ?>
            <div id="modal" class="alert alert-warning alert-dismissible fade show d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div class="flex-grow-1">Mês não existente! Informe um mês de 1 a 12.</div>
            </div>
        <?php } else if ($identificador == 2) { ?>
            <div id="modal" class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div class="flex-grow-1">Mês não fornecido</div>
            </div>
        <?php } else { ?>
            <div id="modal" class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Sucess:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div class="flex-grow-1">Ação realizada com sucesso!</div>
            </div>
        <?php } ?>
        <div class="form-control">
            <label class="form-label" for="mes">Seu mês escolhido:</label>
            <input value="<?php echo $mes ?>" disabled class="form-control" id="mes" type="text">
        </div><br>
        <?php if ($identificador == 0 || $identificador == 2) { ?>
            <button class="btn btn-info" onclick="redirecionarParaOutraPagina()">Voltar</button>
        <?php } else { ?>
            <button class="btn btn-success" onclick="redirecionarParaOutraPagina()">Finalizar</button>
        <?php } ?>
    </div>
    <script>
        function redirecionarParaOutraPagina() {
            window.location.href = "index.html";
        }
    </script>
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