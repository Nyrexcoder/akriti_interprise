<?php
// contact form submission function 
function contact_sumit($name,$mobile,$email,$city,$msg)
{
    if(check_email($email))
    {
        return false;
    }
    else{
        global $con;
        $sql = mysqli_query($con,"INSERT INTO `contact`(`name`, `email`, `msg`, `city`, `mobile`) VALUES ('$name','$email','$msg','$city','$mobile')");
        if($sql)
        {
            $msg = "Name:- .'$name'.<br>Email:- .'$email'.<br>Mobile:-.'$mobile'.<br>Location:- .'$city'.<br>Message:- '$msg'";
            $receiver = 'sunnykrdbg2002@gmail.com';
            if (smtp_mailer($receiver, 'Contact Form Submisison', $msg)) {
                return true;
            }
        }
        else
        {
            return false;
        }
    }
}

function check_email($email)
{
    global $con;
    $sql = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `contact` WHERE `email`='$email' LIMIT 1"));
    if($sql == 1)
    {
        return true;
    }
    else{
        return false;
    }
}


// php mailer smtp server function
function smtp_mailer($to, $subject, $msg)
{
    include('../smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->IsSMTP();
    // $mail->SMTPDebug = 1;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'TLS';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "nyrexdeveloper@gmail.com";
    $mail->Password = "lexmewrhuyykkjhh";
    $mail->SetFrom("nyrexdeveloper@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if (!$mail->Send()) {
        return false;
    } else {
        return true;
    }
}



?>