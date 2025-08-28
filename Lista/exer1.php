<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 1</h1>
    <h2>Crie um formulário que permita ao usuário inserir dois números. O script PHP deve somar
esses números e exibir o resultado.</h2>

    <form method="post" action ="exer1resposta.php">           
        <div class="mb-3">
            <label for="valor1" class="form-label">informe o primeiro valor</label>
            <input type="number" id="valor1" name="valor1" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="valor2" class="form-label">informe o segundo valor</label>
            <input type="text" id="valor2" name="valor2" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Enviar e soma-los</button>        
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>            