<?php

class User{
    protected $conn;

    function __construct(SQLite3 $conn)
    {
        $this->conn=$conn;
    }

    function save(){
        //Salva os dados do usuário - nome, email e senha
        $save_password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $this->conn->exec("INSERT INTO users(email,name,password) VALUES ('".$_POST['email']."','".$_POST['name']."','".$save_password."')");
    }


    function find($sql){
        //Encontra o usuário 
        return $this->conn->query($sql)->fetchArray();
    }

    function all(){
        //Busca todos os usuários do banco
        return $this->conn->query("SELECT * FROM users")->fetchArray();
    }
}