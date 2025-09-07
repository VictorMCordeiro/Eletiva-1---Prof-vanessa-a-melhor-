<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="content mt-4">
    <h1>Resposta do exercicio 15</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') // ESSE VAI TER EM TODOS OS EXERCICIOS
        {
            try {
                $kg = $_POST['kg'];
                $a = $_POST['al'];
                $imc = $kg / (float)$a**2;
                $imc_f = number_format($imc, 2, ',', '.');
              echo "<div class='alert alert-success'><strong>Resultado:</strong><br>";
                echo "Para o poso $kg e altura $a, o IMC é $imc_f<br>";
                echo '<button type="button" onclick="history.go(-1)" class="btn btn-primary">Voltar</button>';
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>