<?php

declare(strict_types=1);

$connection = new PDO(
    'mysql:dbname=blog;host=127.0.0.1',
    'root@localhost',
    '',
    array(
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    
    )
);

$statement = $connection->prepare('INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :role)');
$statement->execute([
    'name' => 'Lukas',
    'email' => 'xlukas3@gmail.com',
    'password' => password_hash('123456789', PASSWORD_BCRYPT),
    'role' => 2
]);

function createUser(): void{
    global $connection

$statement = $connection->prepare('INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :role)');
$statement->execute([
    'name' => 'Novak',
    'email' => 'novak@gmail.com',
    'password' => password_hash('123456789', PASSWORD_BCRYPT),
]);
}

