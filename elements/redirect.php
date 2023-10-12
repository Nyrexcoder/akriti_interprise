<?php
// contact form submittion 
include './function.php';
include '../db/database.php';
if(isset($_REQUEST['contact_btn']))
{
    $name = $_REQUEST['name'];
    $mobile = $_REQUEST['mob_no'];
    $email = $_REQUEST['email'];
    $city = $_REQUEST['city'];
    $msg = $_REQUEST['mesg'];

   if(contact_sumit($name,$mobile,$email,$city,$msg))
    {
        echo "<script>alert('Contact form submited successfully.')</script>";
        echo "<script>location.replace('../contact.html')</script>";

    }
    else{
        echo "<script>alert('Someting went wrong, please try again latter.')</script>";
        echo "<script>history.back()</script>";
    }
}


?>