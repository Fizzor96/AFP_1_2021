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

function classList($query)
{
    $connection = getConnection()
    $statement = $connection->prepare($query);
    $statement -> execute();
    $result = $statement->get_result();
    $row = $result->fetch_assoc();

    return $row;

}
?>