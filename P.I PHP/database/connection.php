<?php
// Conexão com o banco de dados

function connection(){
    return new SQLite3('database.db');
}

$db=connection();

//Tabela de usuários
$createUserTable = "CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY NOT NULL,email STRING UNIQUE, name STRING, password STRING)";
$db->exec($createUserTable);


//Tabela de cursos
$createCourseTable = "CREATE TABLE IF NOT EXISTS courses (id INTEGER PRIMARY KEY NOT NULL, name STRING UNIQUE, description TEXT )";
$db->exec($createCourseTable);


//Tabela de instrutores
$createInstructorTable = "CREATE TABLE IF NOT EXISTS instructors (id INTEGER PRIMARY KEY NOT NULL, name STRING UNIQUE,number INTEGER, description TEXT )";
$db->exec($createInstructorTable);


//Tabela de avaliação
$createAssessmentTable = "CREATE TABLE IF NOT EXISTS assessments (id INTEGER PRIMARY KEY NOT NULL, name STRING UNIQUE, description TEXT, course STRING )";
$db->exec($createAssessmentTable);


