<?php
class courseController{

    function all()
    {
        render('/courses/all.php');
    }

    function create()
    {
        render('/courses/create.php');
    }

    function store()
    {
        $course = new Course(connection());

        $course->save("INSERT INTO courses(name,description) VALUES ('".$_POST['name']."','".$_POST['description']."') ");

        redirect('/dash');
    }
}