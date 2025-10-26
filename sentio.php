<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $host = 'localhost';
    $db = 'sentio_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $email, $mensagem]);

        echo "Recebido!";        
    }catch (PDOException $e){
        echo "falha em inserir no banco: ".$e->getmessage();
    }
}
?>