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
    $connection = getConnection();
    $statement = mysqli_prepare($connection,$query);
    $success = mysqli_stmt_execute($statement);
    $result = [];
    if($success === TRUE)
    {
        $temp = $statement->get_result();
        $result = $temp->fetch_assoc();
    }
    else{
        die('Sikertelen végrehajtás');
    }
    
    mysqli_stmt_close($statement);

    mysqli_close($connection);

    return $result;

}
?>