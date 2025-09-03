<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>Exercicio 14</h1>
    <h2>Crie um formulário que permita ao usuário inserir um valor em quilômetros. O script PHP deve
converter esse valor para milhas (1 quilômetro = 0.621371 milhas) e exibir o resultado.</h2>

    <form method="post" action ="exer14resposta.php">   
        <div class="row">        
            <div class="mb-3 col-3">
                <label for="m" class="form-label">Insira valor (km) </label>
                <input type="number" id="km" name="km" class="form-control" required="" placeholder="">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Calcular para Milhas</button>        
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>          