<?php

class Assessment{
    protected $conn;

    function __construct(SQLite3 $conn)
    {
        $this->conn=$conn;
    }

    function save($sql){
        $this->conn->exec($sql);
    }


    // function find($sql){
    //     //Encontra o usuário 
    //     // return $this->conn->query($sql)->fetchArray();
    // }

    function all(){
        //Busca todos os cursos do banco
        return $this->conn->query("SELECT * FROM assessments")->fetchArray(); 
    }
}