<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
        <aside>
                 <!-- Slideshow container -->
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="https://images.unsplash.com/photo-1696613036445-0233b0b410fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1931&q=80" style="width:100%">
                    <div class="text">Web page 1</div>
                </div>

                <div class="mySlides fade">
                    <img src="https://images.unsplash.com/photo-1696439400931-895d7a304f4d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1885&q=80" style="width:100%">
                    <div class="text">Web page 2</div>
                </div>

                <div class="mySlides fade">
                    <img src="https://images.unsplash.com/photo-1696311746008-b9557a0c99cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1776&q=80" style="width:100%">
                    <div class="text">Web page 3</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </aside>
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

        <services>
                <div class="service_container">
                     <h2>Our Services Product</h2>   
                    <div class="services_box ">
                        <div class="service_product">
                            <i class='bx bxs-user'></i>
                             <h4>Services Product 1</h4>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, dicta?</p>
                         </div> 
                         <div class="service_product">
                          <i class='bx bxs-user'></i>
                           <h4>Services Product 2</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, dicta?</p>
                       </div> 
                       <div class="service_product">
                          <i class='bx bxs-user'></i>
                           <h4>Services Product 3</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, dicta?</p>
                       </div> 
                       <div class="service_product">
                          <i class='bx bxs-user'></i>
                           <h4>Services Product 4</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, dicta?</p>
                       </div> 
                       <div class="service_product">
                          <i class='bx bxs-user'></i>
                           <h4>Services Product 5</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, dicta?</p>
                       </div>  
                    </div>
                          
                </div>
        </services>

        <product>
            <div class="container_product">
                 <h2>All Products</h2>
                <div class="product_items">
                   
                        <div class="item">
                            <img src="https://th.bing.com/th/id/OIP.R56mc_WXX0pOnFmh0Mw3jgHaFs?pid=ImgDet&rs=1" alt="item">
                            <h5>Computer</h5>
                        </div>
                        <div class="item">
                            <img src=https://th.bing.com/th/id/R.5a8f53199ba46f9e5e03b9607bfcfef9?rik=XRKfSNKHGdc3XQ&riu=http%3a%2f%2fpluspng.com%2fimg-png%2flaptop-png-laptop-notebook-png-image-1358.png&ehk=mDICWHsP9Z2H9vGsbzdmOu9aZdShchqmCECt83MXorU%3d&risl=&pid=ImgRaw&r=0" alt="item">
                            <h5>Laptop</h5>
                        </div>
                        <div class="item">
                            <img src="https://th.bing.com/th/id/R.b3eee2a74f62453c0958bc244535c5da?rik=KjsNlksu270Udw&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fprinter-png-hd-printer-png-image-printer-hd-png-1500.png&ehk=%2fawFnScL41HfI9yr9sD%2bqssan1hb506P%2bkYkSGwgc4Q%3d&risl=&pid=ImgRaw&r=0" alt="item">
                            <h5>Printer</h5>
                        </div>
                        <div class="item">
                            <img src="https://th.bing.com/th/id/OIP.Qx9uyqJEt1_8rfnflBezJwHaFG?pid=ImgDet&rs=1" alt="item">
                            <h5>Software</h5>
                        </div>
                        <div class="item">
                            <img src="https://th.bing.com/th/id/OIP.vG9lshXsLXC8KGPJZX-JcgHaIP?pid=ImgDet&rs=1" alt="item">
                            <h5>UPS</h5>
                        </div>
                        <div class="item">
                            <img src="https://th.bing.com/th/id/OIP.TW7jXvrxzGIqtlTA16ht5wHaFa?pid=ImgDet&rs=1" alt="item">
                            <h5>Networking Router</h5>
                        </div>
                        <div class="item">
                            <img src="https://th.bing.com/th/id/OIP.K6WqcTphk0AEZ4EnF_NFZAHaEU?pid=ImgDet&rs=1" alt="item">
                            <h5>Smart Gadgets</h5>
                        </div>
                </div>
            </div>
        </product>

        
      
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

    </div>
</body>




<script src="script.js"></script>
</html>