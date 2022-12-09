<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="?page=novo">Novo cadastro</a>
            <a class="nav-link" href="?page=mostrar">Mostrar cadastros</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col mt-5">
          <?php
          include("config.php");
          switch(@$_REQUEST["page"]){
          case "novo":
            include("novoCadastro.php");
          break;
          case "mostrar":
            include("mostrarCadastro.php");
          break;
          case "salvar":
            include("salvarCadastro.php");
          break;
          case "editar":
            include("editarCadastro.php");
          break;
          default:
            print "Seja bem vind@ ao meu Ateliê.";
          }

          ?>
        </div>
      </div>
    </div>
  </body>
</html>
?>
