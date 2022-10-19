<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
    
<body class="text-center">
    
   <div class="container" style="width: 50%; margin-top: 10%;">
   <main class="form-signin">
      <form action="./processador.php" method="post">
        <h1 class="h3 mb-3 fw-normal" style="margin-bottom: 10px;">Cadastro</h1>
    
        <div class="form-floating" style="margin-bottom: 10px;">
          <input type="text" class="form-control" id="nomeUser" name="nomeUser" placeholder="Nome completo">
          <label for="floatingInput">Nome completo</label>
        </div>
        <div class="form-floating" style="margin-bottom: 10px;">
          <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
          <label for="floatingPassword">E-mail</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit" style="margin-bottom: 10px;">Cadastrar</button>
        <a href="./mostraDados.php" class="w-100 btn btn-lg btn-success">Ver cadastrados</a>
      </form>
    </main>
   </div>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>