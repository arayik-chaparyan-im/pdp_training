<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ident";

$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
if($conn){
		
	$sql = 'Select * From registration';
	$result = mysqli_query($conn,$sql);
}else{
    echo 'Connection error:'.mysqli_connect_error(); 
    }
      
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="usersTable.css">
    <title>Users list</title>
</head>
<body>
    <h2>Registered users</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Gender</th>
                <th>Birthdate</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
        <?php
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['birthdate']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email'] ;?></td>
                </tr>
        <?php
            }
    ?>
        <table>
    </body>
    </html>  
                
  

                         
                
                
                
                
            
        



























































