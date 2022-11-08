<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>cadastro</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Tarefas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="?page=nova">nova tarefa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=listar">lista de tarefas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class = "container">
            <div class="row" >
                <div class="col mt-5">
                    <?php
                        include("config.php");
                        switch(@$_REQUEST["page"]){
                            case "nova":
                                include("criar_tarefa.php");
                                break;
                            case "listar":
                                include("listar_tarefas.php");
                                break;
                            case "salvar":
                                include("salvar_tarefa.php");
                                break;
                            case "editar":
                                include("editar_tarefa.php"); 
                                break;   
                            default:
                            
                        }
                    ?>
                </div>
            </div>
        </div>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>