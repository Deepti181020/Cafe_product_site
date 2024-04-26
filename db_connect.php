<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $HOSTNAME = "127.0.0.1";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "mca23";

    try{
        $conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DBNAME);
        if($conn->connect_error){
            echo "Connection Error".$conn->connect_error;
        } else {
            echo "Connection Successful";
        }
    } catch (Exception $e){
        echo "Check Credentials<br>";
        echo $e->getMessage()." at line ".$e->getLine();
    }
?>
</body>
</html>