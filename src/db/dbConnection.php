<?php

$host = getenv('DB_HOST');
$db = getenv("DB_DATABASE");
$user = getenv("DB_USER");
$password = getenv("DB_PASSWORD");
$charset='utf8mb4';
$port = '3308';
$dsn = "psql:host=$host;dbname$db;port=$port;charset=$charset";


try {
  $pdo = new PDO($dsn, $user, $password);
  echo 'Database connexion established';
} catch (\PDOException $error) {
  throw new \PDOException($error->getMessage(), $error->getCode());
}

?>