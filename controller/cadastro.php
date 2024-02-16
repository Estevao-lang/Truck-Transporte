<?php

include_once("../model/db_connection.php");

try {
    // Database connection setup (Ensure db_connection.php is correctly configured)
    // $conn = ... (your database connection code here)

    $nome = $_POST['name'];
    $quantidade = $_POST['quantity'];
    $descricao = $_POST['description'];
    $preco = $_POST['price'];
    $tipo = $_POST['type'];

    $arquivo = $_FILES['arquivo']['name'];

    // ... (file upload configuration)

    // Insert data into the database using prepared statements
    $query_products = "INSERT INTO products (name, quantity, description, price, type, created, image) 
                       VALUES (?, ?, ?, ?, ?, CURRENT_TIMESTAMP, ?)";
    $result_products = $conn->prepare($query_products);
    $result_products->execute([$nome, $quantidade, $descricao, $preco, $tipo, $nome_final]);

    // If no exception is thrown, the query was successful
    echo "<script type=\"text/javascript\">alert(\"Imagem cadastrada com Sucesso.\");</script>";
} catch (PDOException $e) {
    // Handle database errors
    echo "<script type=\"text/javascript\">alert(\"Erro ao cadastrar imagem.\");</script>";
    // Optionally, display more information about the error
    echo "Error Code: " . $e->getCode() . "<br>";
    echo "Error Message: " . $e->getMessage() . "<br>";
}

// Omit the closing PHP tag to avoid issues with extra whitespace after it
// ?>
