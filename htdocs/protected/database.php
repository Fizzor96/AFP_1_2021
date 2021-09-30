<?php 
function getConnection(){
    $server = 'localhost'; 
    $username = 'root';
    $password = '';
    $database = 'projectlabor_short';
    $connection = mysqli_connect($server,$username,$password, $database);
    return $connection;
}

function executeQuery($query)
{
    $connection = getConnection();
    if(mysqli_query($connection,$query))
    {
        echo "Sikeres művelet";
    } else {
        echo "Hiba";
    }
    mysqli_close($connection);
}

?>