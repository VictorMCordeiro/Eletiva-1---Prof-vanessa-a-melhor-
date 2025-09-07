<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="content mt-4">
    <h1>Resposta do exercicio 16</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') // ESSE VAI TER EM TODOS OS EXERCICIOS
        {
            try {
                $p = $_POST['p'];
                $pd = $_POST['pd'];
                $d = $p * ($pd / 100);
                $r = $p - ($p * ($pd / 100));
                echo "<div class='alert alert-success'><strong>Resultado:</strong><br>";
                echo "Para o preço R$$p seu desconto é de $d, Preço final = R$$r <br>";
                echo '<button type="button" onclick="history.go(-1)" class="btn btn-primary">Voltar</button>';
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>