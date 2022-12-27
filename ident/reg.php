<?php
    
    $firstname = ($_POST['firstname']);
    $lastname = ($_POST['lastname']);
    $gender = ($_POST['gender']);
    $birthdate = ($_POST['date']);
    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $hashpwd = password_hash($_POST['password'],PASSWORD_DEFAULT);
            
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "ident";

    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

    if (! $conn) {
        die('Connection error:'.mysqli_connect_error());

    }
    //need to be enhanced
    // if (isset($_POST['username_check'])) {
    //     $username = $_POST['username'];
    //     $sql = "SELECT * FROM registration WHERE username='$username'";
    //     $results = mysqli_query($conn, $sql);
    //     if (mysqli_num_rows($results) > 0) {
    //       echo "taken";	
    //     }else{
    //       echo 'not_taken';
    //     }
    //     exit();
    // }
    // if (isset($_POST['email_check'])) {
    //     $email = $_POST['email'];
    //     $sql = "SELECT * FROM registration WHERE email='$email'";
    //     $results = mysqli_query($conn, $sql);
    //     if (mysqli_num_rows($results) > 0) {
    //       echo "<script>alert('Thwe username is already being used')</script>";	
    //     }else{
    //       echo 'not_taken';
    //     }
    //     exit();
    // }
    $sql = "INSERT INTO registration (firstname, lastname, gender, birthdate, username, email, password) values(?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(! mysqli_stmt_prepare($stmt, $sql)){
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param( $stmt,"sssssss",
                            $firstname,
                            $lastname,
                            $gender,
                            $birthdate,
                            $username,
                            $email,
                            $hashpwd);

    mysqli_stmt_execute($stmt);
    echo "<script>location.replace('ident.html')</script>"; 
               