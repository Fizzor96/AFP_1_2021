<?php 
function getConnection(){
    $server = 'localhost'; 
    $username = 'root';
    $password = '';
    $database = 'projectlabor_short';
    $connection = mysqli_connect($server,$username,$password, $database);
    return $connection;
}

?>