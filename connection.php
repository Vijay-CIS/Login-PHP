<?php
 $db_name='loginform';
 $con = mysqli_connect('localhost','root','',$db_name);
 $sql = array(
            "create table if not exists login (username varchar(50), password varchar(255));",
            "create table if not exists products (id int not null auto_increment primary key, name varchar(50), price float, quantity int);"
        );  
  
 for ($i=0; $i < count($sql); $i++) { 
    $result = mysqli_query($con, $sql[$i]); 
    if ( false===$result ) {
        printf("error: %s\n", mysqli_error($con));
    }
    else {
        echo 'done.';
    }
 }
if (mysqli_connect_errno())
{
    die("Failed to connect with MySQL:".mysqli_connect_errno());
}
?>