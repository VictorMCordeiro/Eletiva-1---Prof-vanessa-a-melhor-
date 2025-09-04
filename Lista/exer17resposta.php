<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>Resposta do exercicio 17    JUROS SIMPLES</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') // ESSE VAI TER EM TODOS OS EXERCICIOS
        {
            try {
                $c = $_POST['capital'];
                $p = $_POST['periodo'];
                $j = $_POST['juros'];

                $jtotal = $c * (($j / 100) * $p);
                $m = $c + $jtotal;
                
                echo "Para um capital de R$$c com juros a $j% por $p mese(s), seu juros é de R$$jtotal montante é R$$m<br>";
                echo '<button type="button" onclick="history.go(-1)" class="btn btn-primary">Voltar</button>';
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>