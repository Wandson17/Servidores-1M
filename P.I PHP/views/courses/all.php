<!doctype html>
<html lang="pt-br">

<head>
  <title>Recanto Federal</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Instituto_Federal_Marca_2015.svg/640px-Instituto_Federal_Marca_2015.svg.png"> 

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">


</head>

<body>
<div class="container-fluid bg-success p-3 d-flex justify-content-between ">
  
  <a class="navbar-brand d-flex justify-content-center" href="#">
        <img src="/library/ifrn.png" class="rounded-circle bg-white w-25 ">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <h1 class="text-light" style="font-family: 'Fjalla One', sans-serif;">Recanto Federal</h1>

    <div class="me-5 d-flex">
  
                <button class="btn btn-light " style="height: 35px;">  
                  <a href="/dash" class="text-decoration-none text-dark">Voltar</a>
              </button>
         
        </div>
  </div>
<nav class="navbar navbar-expand-lg bg-success ">

    <div class="container-fluid">
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dados usuário
            </a>
            <ul class="dropdown-menu">
              
              <li> <a href="/instructores/all" class="text-decoration-none dropdown-item">Dados dos Instrutores</a></li>
             <li> <a href="/assessments/all" class="text-decoration-none dropdown-item ">Dados das Avaliações</a></li>
              <li><a href="/courses/all" class="text-decoration-none dropdown-item"> Dados dos Cursos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sobre </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Acesso usuário
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/login">Login</a></li>
              <li><a class="dropdown-item" href="/register">Cadastrar</a></li>
            </ul>
          </li>
        
          <li class="nav-item">
            <a class="nav-link text-white" href="https://portal.ifrn.edu.br/ifrn/tec-da-informacao/lateral/servicos/novo-webmail">Email</a>
          </li>
        </ul>
        <form class="d-flex justify-content-center w-100" role="search">
          <input class="form-control me-2 w-50 h-75 " type="search" placeholder="Pesquise no IFRN" aria-label="Search">
          <button class="btn btn-light rounded btn-sm" type="submit ">Procura</button>
        </form>
      
      </div>
    </div>
  </nav>
  <div class="container p-4">
          <div class="row">
            <span class="display-5">Informações dos cursos | Salvas </span>
          </div>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

    <?php
        $conn = connection();

        $query = $conn->query("SELECT * FROM courses");

        echo "<hr>";
        while($row = $query->fetchArray()){
          echo "|Id do curso: ".$row['id']." |Nome do curso: ".$row['name']." |Descrição do Curso: ".$row['description'];
          echo "<br>";
          echo "<hr>";
        }

    ?>


  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>