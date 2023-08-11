<!-- <?php
// $serverHost ="http://192.168.1.140";
// $user = "root";
// $password ="";
// $database ="clothes_app";
// $connectNow= new mysqli($serverHost,$user,$password,$database);
// <?php -->

// Database Source Name
$dsn = 'mysql: host=http://127.0.0.1; dbname=clothes_app';

$username = 'root';
$password = '';

// to support arabic
$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');

try {
    $connect = new PDO($dsn, $username, $password, $option);
    $connect->setAttribute(PDO::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
    header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
} catch (PDOException $e) {

    echo $e->getMessage();}