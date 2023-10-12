<?php


    include('./db/database.php');

    $user=$_POST['username'];
    $pass=$_POST['password'];

    // echo $user;

    $uu='';
    $pp='';

    $selectQuery=mysqli_query($con,"select * from account where user_name='$user'");
    while($row=mysqli_fetch_assoc($selectQuery))
    {
        $uu=$row['user_name'];
        $pp=$row['password'];
    }
    if($uu==$user && $pp=$pass)
    {
        // print "<h1>Successfully login</h1>";
        // $_SESSION['user']=$user;
         echo "<script>window.location='admin.php';</script>";

    }
    else
    {
        print "<script>alert('invalid userid and password')</script>";
        // echo "<script>window.location='index.php';</script>";
    }

?>