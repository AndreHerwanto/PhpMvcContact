<?php
// models/Contact.php

class Contact {
    private $name;
    private $email;
    private $message;
    private $pdo;

    public function __construct($name, $email, $message) {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;

        $config = require 'config.php';
        $this->pdo = new PDO(
            "mysql:host={$config['host']};dbname={$config['dbname']}",
            $config['username'],
            $config['password']
        );
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function save() {
        $stmt = $this->pdo->prepare('INSERT INTO form (name, email, message) VALUES (:name, :email, :message)');
        $stmt->execute([
            ':name' => $this->name,
            ':email' => $this->email,
            ':message' => $this->message
        ]);
    }
}
?>
