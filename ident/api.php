<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ident";
$response = array();

$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
if($conn){
        
    $sql = 'Select * From registration';
    $result = mysqli_query($conn,$sql);
    if($result){
        header('Access-Control-Allow-Origin:*');
        header('Content-type: application/json');
        $i = 0;

        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row['ID'];
            $response[$i]['firstname'] = $row['firstname'];
            $response[$i]['lastname'] = $row['lastname'];
            $response[$i]['gender'] = $row['gender'];
            $response[$i]['birthdate'] = $row['birthdate'];
            $response[$i]['gender'] = $row['gender'];
            $response[$i]['username'] = $row['username'];
            $response[$i]['email'] = $row['email'];
            $i++;

        } 
            echo json_encode($response,JSON_PRETTY_PRINT);
            
    }
} else{
    echo 'Connection error:'.mysqli_connect_error();

}
        
        