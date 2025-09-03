<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container mt-4">
  <h1>Exercicio 16</h1>
  <h2>Crie um formulário que permita ao usuário inserir um preço e um percentual de desconto. O
script PHP deve calcular o preço com desconto e exibir o resultado.</h2>

  <form method="post" action="exer16resposta.php">
    <div class="row">
      <div class="mb-3 col-3">
        <label for="m" class="form-label">Insira PREÇO </label>
        <input type="number" id="km" name="p" class="form-control" required="" placeholder="">
      </div>
      <div class="mb-3 col-3">
        <label for="m" class="form-label">Insira Percentual de desconto </label>
        <input type="text" id="km" name="pd" class="form-control" required="" placeholder="">
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Calcular</button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>