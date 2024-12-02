<?Php

$dsn = "mysql:host=localhost;dbname=bd_one";
$dbusername = "root";
$dbpassword = '';

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Error : " . $e->getMessage();
}
