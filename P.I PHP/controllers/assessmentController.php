<?php

class assessmentController{

    function all()
    {
        render('/assessments/all.php');
    }

    function create()
    {
        render('/assessments/create.php');
    }

    function store()
    {
        $assessment = new Assessment(connection());

        $assessment->save("INSERT INTO assessments(name,description,course) VALUES ('".$_POST['name']."','".$_POST['description']."','".$_POST['course']."')"); 
        
        redirect('/dash');
    }
}