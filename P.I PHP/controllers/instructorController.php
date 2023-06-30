<?php
class instructorController{

    function all()
    {
        render('/instructores/all.php');
    }

    function create()
    {
        render('/instructores/create.php');
    }

    function store()
    {
        $instructor = new Instructor(connection());

        $instructor->save("INSERT INTO instructors(name,number,description) VALUES ('".$_POST['name']."','".$_POST['number']."','".$_POST['description']."')"); 
        
        redirect('/dash');
    }
}