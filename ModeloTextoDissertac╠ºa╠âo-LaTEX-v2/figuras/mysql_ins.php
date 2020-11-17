<?php
// Incluir o arquivo de conexao com o mysql e o banco de dados
include 'conexao.php';

// inserindo vários registros
mysqli_query($conn, "INSERT INTO user (codigo, nome) VALUES (1, 'João')");
mysqli_query($conn, "INSERT INTO user (codigo, nome) VALUES (2, 'Carla')");
mysqli_query($conn, "INSERT INTO user (codigo, nome) VALUES (3, 'Anna')");
mysqli_query($conn, "INSERT INTO user (codigo, nome) VALUES (4, 'Matheus')");
mysqli_query($conn, "INSERT INTO user (codigo, nome) VALUES (5, 'Laura')");

//encerra conexão com o banco de dados
mysqli_close($conn);
?>
