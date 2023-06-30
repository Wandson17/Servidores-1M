

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Instituto_Federal_Marca_2015.svg/640px-Instituto_Federal_Marca_2015.svg.png">

    <title>Recanto do Federal </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                <button class="btn btn-sucess d-flex text-white">
                <?php $user = authUser(); print $user['name'] ?>
        
                </button>
                <button class="btn btn-light me-3" style="height: 35px;">  
                  <a href="/register" class="text-decoration-none text-dark">Voltar</a>
              </button>
              <button class="btn btn-light me-3 " style="height: 35px;">  
                  <a href="/cadastrados" class="text-decoration-none text-dark">Cadastros</a>
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

      <div class="container-fluid mb-4 d-flex align-items-center justify-content-center" style="background-color:rgb(151, 255, 182); height: 60px;" >
      <!-- Cursos -->
        <button class="btn btn-outline-success me-5"><a href="/courses/create" class="text-decoration-none text-dark h6">Informe o Curso</a></button>

      <!-- Avaliação -->
      
        <button class="btn btn-outline-success me-5"><a href="/assessments/create" class="text-decoration-none text-dark h6">Formas de avaliaçãos</a></button>

      <!-- Instrutores -->
      
        <button class="btn btn-outline-success me-5"><a href="/instructores/create" class="text-decoration-none text-dark h6">Informe o instrutor</a></button>
      
    </div>

      <div class="container w-75 p-3 bg-success rounded">
        <h1 class="d-flex justify-content-center text-white">Seja bem-vindo ao recanto do federal</h1>
        <p class="text-white">Aqui neste site você vai ficar por dentro de todas as novidades dos Cursos do IFRN Campus Caicó, ficando tão bem informado das novidades do campus.</p>
        </div>

        <div class="container p-4">
          <h3 class="mb-3">Cursos IFRN Campus Caicó.</h3>
        <div class="row mb-3">
          <div class="col d-flex justify-content-center"> <img src="https://i0.wp.com/elitecursos.com.br/wp-content/uploads/2015/10/analiseedesenvdesistemas.jpg?fit=540%2C350&ssl=1" class="w-100"></div>
          <div class="col d-flex justify-content-center"> <img src="https://www.jornalcontabil.com.br/wp-content/uploads/2019/07/textil.jpg"class="w-100" ></div>
          <div class="col d-flex justify-content-center "> <img src="https://blog.maximustecidos.com.br/wp-content/uploads/2020/11/4-dicas-para-conservar-a-maquina-de-costura-1.jpg" class="w-100" ></div>
          <div class="col d-flex justify-content-center"> <img src="https://res.cloudinary.com/practicaldev/image/fetch/s--0Dw98qeg--/c_imagga_scale,f_auto,fl_progressive,h_900,q_auto,w_1600/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/gxxauzyr707eq1w13n5e.jpg" class="w-100"></div>
        </div>
        <div class="row">
        <div class="col fw-bold " style="height: 70px;"> 
          <div class="fw-bold d-flex justify-content-center">
            <span>Informática</span>
          </div>
          <div class="fw-bold d-flex justify-content-center">
            <button class="btn btn-success  btn-sm me-3 m-2" style="height: 35px;"><a class="text-decoration-none text-white">Acessar</a></button>
            <button class="btn btn-success  btn-sm  m-2" style="height: 35px;"><a class="text-decoration-none text-white"> Saiba mais</a></button>
            </div>
          </div>
          <div class="col fw-bold " style="height: 70px;"> 
          <div class="fw-bold d-flex justify-content-center">
            <span>Têxtil</span>
          </div>
          <div class="fw-bold d-flex justify-content-center">
            <button class="btn btn-success  btn-sm me-3 m-2" style="height: 35px;"><a class="text-decoration-none text-white">Acessar</a></button>
            <button class="btn btn-success  btn-sm  m-2" style="height: 35px;"><a class="text-decoration-none text-white"> Saiba mais</a></button>
            </div>
          </div>
          <div class="col fw-bold " style="height: 70px;"> 
          <div class="fw-bold d-flex justify-content-center">
            <span>Vestuário</span>
          </div>
          <div class="fw-bold d-flex justify-content-center">
            <button class="btn btn-success  btn-sm me-3 m-2" style="height: 35px;"><a class="text-decoration-none text-white">Acessar</a></button>
            <button class="btn btn-success  btn-sm  m-2" style="height: 35px;"><a class="text-decoration-none text-white"> Saiba mais</a></button>
            </div>
          </div>
          <div class="col fw-bold " style="height: 70px;"> 
          <div class="fw-bold d-flex justify-content-center">
            <span>Eletrotécnica</span>
          </div>
          <div class="fw-bold d-flex justify-content-center">
            <button class="btn btn-success  btn-sm me-3 m-2" style="height: 35px;"><a class="text-decoration-none text-white">Acessar</a></button>
            <button class="btn btn-success  btn-sm  m-2" style="height: 35px;"><a class="text-decoration-none text-white"> Saiba mais</a></button>
            </div>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html> 