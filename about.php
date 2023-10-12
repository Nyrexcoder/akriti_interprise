<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <header>
            <div id="header">
                <div class="logo">AAKRITI ENTERPRISE</div>
                <div class="right_header">dsjkgfrjkd</div>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="services.html">Services</a>
                <a href="contact.html">Contact</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class='bx bx-menu'></i>
                </a>
              </div>
        </header>
    </div>

<?php
         include('db/database.php');
    
         $select="Select * from about where about_id='1'";
         $select_query=mysqli_query($con,$select);
         if($row=mysqli_fetch_assoc($select_query))
         {
            $image=$row['about_image'];
            $description=$row['about_description'];


?>

    <about>
        <div class=" about_container">
            <div class="about_container_left">
                <img src="<?php echo $image; ?>" style="width:100%">
            </div>
            <div class="about_container_right">
            <?php echo $description; ?>
            </div>
        </div>
    </about>
      <?php        
         }
        ?>

    <footer>
        <div class="footer_container">
            <div class="footer_parent">
                <div class="footer_child1">
                    <h2>AAKRITI ENTERPRISE</h2>
                    <h5>We Protect and Decorate Your Dreams.</h5>
                </div>
                <div class="footer_child2">
                    <p style="padding: 0px 6%;"> G-4/1, Shakuntala building, parking side nehru place,</p>
                    <p style="padding: 0px 6%;">new delhi- 110019</p>
                    <p> <i class='bx bxs-phone-call'></i> 8368874229, 9811022386</p>
                    <p> <i class='bx bx-envelope'></i> aakritienterprise1@gmail.com</p>
                </div>
                <div class="footer_child3">
                    <i class='bx bxl-facebook'></i>
                    <i class='bx bxl-twitter'></i>
                    <i class='bx bxl-instagram-alt'></i>
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-youtube'></i>

                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    
</body>
</html>