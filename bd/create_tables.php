<?php

include "../include/bd.php";

$sql = "CREATE TABLE Usuarios (
      user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(30) NOT NULL,
      firstname VARCHAR(30) NOT NULL,
      lastname VARCHAR(30) NOT NULL,
      email VARCHAR(50) NOT NULL,
      user_pwd VARCHAR(30) NOT NULL,
      user_role VARCHAR(30) NOT NULL,
      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
     )";

if ($connection->query($sql) === TRUE) {
  echo "tabela 1 criada!!";
} else {
  echo "problemas na criação da tabela 1";
}

$sql2 = "CREATE TABLE Posts (
      post_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      post_category_id INT(6) NOT NULL,
      post_title VARCHAR(255) NOT NULL,
      post_author VARCHAR(50),
      post_date date,
      post_image TEXT,
      post_content TEXT,
      post_tag VARCHAR(255),
      post_status VARCHAR(30)
     )";

if ($connection->query($sql2) === TRUE) {
  echo "tabela 2 criada!!";
} else {
  echo "problemas na criação da tabela 2";
}

$sql3 = "CREATE TABLE Categorias (
      cat_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      cat_title VARCHAR(255) NOT NULL
     )";

if ($connection->query($sql3) === TRUE) {
  echo "tabela 3 criada!!";
} else {
  echo "problemas na criação da tabela 3";
}

$sql4 = "CREATE TABLE Comentarios (
      comm_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      comm_post_id INT(6) NOT NULL,
      comm_date date,
      comm_author VARCHAR(50),
      comm_email VARCHAR(50) NOT NULL,
      comm_status VARCHAR(30),
      comm_content TEXT
     )";

if ($connection->query($sql4) === TRUE) {
  echo "tabela 4 criada!!";
} else {
  echo "problemas na criação da tabela 4";
}
