<?php      
    include 'connection.php';  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  

        $password = password_hash($password, PASSWORD_BCRYPT);
      
        $sql = "insert into login (username, password) values ('$username','$password');";  
        $result = mysqli_query($con, $sql);  
        if ( false===$result ) {
            printf("error: %s\n", mysqli_error($con));
        }
        else {
            echo 'done.';
        }
       
        header("Location: http://localhost:3000");
        die();

?>  