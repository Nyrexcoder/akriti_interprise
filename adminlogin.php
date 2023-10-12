<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing:border-box;
        }
        .parentbox{
            width:100%;
            height:100vh;
            /* border:1px solid red; */
          position: relative;
        }
        .box{
            width:100%;
            height:100%;
            background-color:#240002;
            padding: 15% 0px;
        }
        form{
            width: 50%;
            height:100%;
            background: rgb(131,58,180);
            background: linear-gradient(115deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 54%, rgba(252,176,69,1) 100%);
            margin: auto;
            padding: 3% 10%;
            border-radius:5px;
        }
        .inputbox{
            width: 100%;
            /* border:1px solid yellow; */
            /* padding: 0px 2%; */
            background-color:#4d0000;
            margin: 4% 0px;
            border-radius:5px;

        }
        input[type="text"]
        {
            width: 80%;
            padding: 2.5% 1%;
            background:transparent;
            font-size:18px;
            outline:none;
            border:none;
            color:#fff;
        }
        label{
            font-size:18px;
            width: 20%;
            margin: 0px 2%;
        }
        label i{
            color: #fff;
            font-size:20px;
        }
        input[type="submit"]{
            padding: 2% 5%;
            font-size:20px;
            outline:none;
            border:none;
            border-radius:5px;
            background-color: #1a0000;
            color:#fff;
        }
    </style>   
</head>
<body>
    <div class="parentbox">
        <div class="box">
            <form action="loginform.php" method="post">
                <div class="inputbox">
                    <label for="username"><i class='bx bxs-user'></i></label>
                    <input type="text" name="username" id="username" placeholder="Username">
                </div>
                <div class="inputbox">
                    <label for="password"><i class='bx bxs-lock-alt'></i></label>
                    <input type="text" name="password" id="password" placeholder="password">
                </div>
                <input type="submit" value="Submit" name='submit'>
            </form>
        </div>
    </div>
   
  
</body>
</html>
<?php
    // if(isset($_post['submit']))
    // {
        // <?php echo $_SERVER['PHP_SELF'];  
    // }



?>