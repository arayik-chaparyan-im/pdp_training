<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password']; 

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ident";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
 
$stmt = $conn->prepare("SELECT * FROM registration WHERE username = ?");
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();
$row = mysqli_fetch_array($result);
if ($row['username'] && password_verify($password, $row['password'])){
    if(is_array($row)){
        $_SESSION['id'] = $row['ID'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];

        if(isset($_SESSION['id'])){
            include('/opt/lampp/htdocs/ident/users.html');
        }else{
                echo "<script>alert('Expired session')</script>";
                echo "<script>location.replace('ident.html')</script>";
        }
    }
}else{
        echo "<script>alert('Check your credentilas')</script>";
        echo "<script>location.replace('ident.html')</script>";
    }


        
    //include('C:\xampp\htdocs\ident\Ident_architecture_diagram.htm');

