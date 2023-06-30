<?php

//importação das bibliotecas
include_once __DIR__ . '/../library/direction.php';
include_once __DIR__ . '/../library/http.php';
include_once __DIR__ . '/../library/auth.php';



//importação dos controladores
include_once __DIR__ . '/../controllers/authController.php';
$authController = new authController();
include_once __DIR__ . '/../controllers/courseController.php';
$courseController = new courseController();
include_once __DIR__ . '/../controllers/assessmentController.php';
$assessmentController = new assessmentController();
include_once __DIR__ . '/../controllers/instructorController.php';
$instructorController = new instructorController();




//importação dos modelos
include_once __DIR__ . '/../database/modelos/user_model.php'; 
include_once __DIR__ . '/../database/modelos/course_model.php'; 
include_once __DIR__ . '/../database/modelos/assessment_model.php'; 
include_once __DIR__ . '/../database/modelos/instructor_model.php'; 

//informações corrente do servidor
$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];


switch ($uri) {
    case '/':
        isGet($method);
        $authController->login();
        break;

    case '/dash':
        isGet($method);
        authenticate(); //verifican0do se o usário está autenticado
        render('/content/dash.php');
        break;

    // Autenticação
    case '/login':
        isGet($method); 
        $authController->login();
        break;
    case '/logar':
        isPost($method);
        $authController->logar();
        break;

    case '/register':
        isGet($method);
        $authController->register();
        break;
    case '/registrar':
        isPost($method);
        $authController->registrar();
        break;
    // ------------------------------- 

    case '/logout':
        isGet($method);
        $authController->logout();
        break;

    case '/cadastrados':
        isGet($method);
        render('/content/cadastrados.php');
        break;

    // ------------------------------- 

    case '/courses/create':
        isGet($method);
        $courseController->create();
        break;

    case '/courses/all':
        isGet($method);
        $courseController->all();
        break;


    case '/courses/store':
        isPost($method);
        $courseController->store();
        break;

    // ------------------------------- 


    // ------------------------------- 

    case '/assessments/create':
        isGet($method);
        $assessmentController->create();
        break;

    case '/assessments/all':
        isGet($method);
        $assessmentController->all();
        break;

    case '/assessments/store':
        isPost($method);
        $assessmentController->store();
        break;

    // ------------------------------- 


    // ------------------------------- 

    case '/instructores/create':
        isGet($method);
        $instructorController->create();
        break;

    case '/instructores/all':
        isGet($method);
        $instructorController->all();
        break;

    case '/instructores/store':
        isPost($method);
        $instructorController->store();
        break;

    // ------------------------------- 

    default:
        render('/errors/undefined.php');
        break;
}
