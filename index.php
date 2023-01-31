<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Neonderthaw&family=Playfair+Display&family=Roboto+Slab:wght@500&family=Roboto:wght@500&family=Sedgwick+Ave&display=swap"
        rel="stylesheet">
    <title>Programmer's Store</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="img/logo.png" class="logo">
            <p class="name">PROGRAMMER'S STORE</p>
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Categories</a></li>
                    <li><a href="">Softwares</a></li>
                    <li><a href="">Other Services</a></li>
                </ul>
            </nav>
            <img src="img/menu.png" class="menu-icon">
        </div>

        <div class="row-1">
            <div class="col-1">
                <h2>HP 250<br>Wireless Optical Mouse</h2>
                <h3>( 2.4GHz Wireless, Black )</h3>
                <p>Hurry! Offer closes soon.</p>
                <h4><span class="line-through">999 </span>&nbsp;Rs.749/-</h4>
            </div>
            <div class="col-2">
                <img src="img/mouse.png" class="controller">
                <div class="color-box"></div>
                <div class="add-btn">
                </div>
            </div>
        </div>

    </div>


    <div class="more-items">
        <div class="more-head">
            <h1>
                More exciting deals, Just for you!
            </h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-left">
                    <img src="img/microsoft.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Microsoft 365 Premium Version - <span>Rs.3949/-</span></h4>
                        <p class="card-text">Microsoft Office 365 Home For 6 Users (Windows/Mac Laptop + Tablet) For 12 Month/1 Year - (Activation Key Card)</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-right">
                    <img src="img/samsung970.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Samsung EVO 970 Plus SSD - <span>Rs.7149/-</span></h4>
                        <p class="card-text">Samsung 970 EVO Plus 500GB PCIe NVMe M.2 (2280) Internal Solid State Drive (SSD) (MZ-V7S500)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="bulk">
        <h1>
            Order Now. Pay on Delivery!!!
        </h1>
    </div>
    <div class="bulk">
        <h2>
            Fill the details below to get a call from us!
        </h2>
    </div>
    
    <div class="last">
        <form method="post" action="">
            <div class="form-group">
                Name :<input type="text" name="name" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                Address :<input type="text" name="address" placeholder="Enter Your Address">
            </div>
            <div class="form-group">
                Phone Number :<input type="text" name="phone" placeholder="Enter Your Phone Number">
            </div>
            <div class="form-group">
                Business E-mail :<input type="text" name="email" placeholder="Enter Your E-mail Address">
            </div>
            <div class="form-group">
                GSTIN Number :<input type="text" name="gst" placeholder="Grab Heavy Discount!">
            </div>
            <div class="form-group">
                Product Name :<input type="text" name="product" placeholder="Enter Product Name">
            </div>
            <div class="form-group">
                Quantity :<input type="text" name="quantity" placeholder="Enter Quantity">
            </div>
            <button class="form-sub">Submit</button>
        </form>
    </div>
    
    <div class="follow">
        <p>Follow us at :</p>
    </div>
    <div class="social-links">
        <a href="http://www.facebook.com">
            <img src="img/facebook.png">
        </a>
        <a href="http://www.instagram.com">
            <img src="img/instagram.png">
        </a>
        <a href="http://www.twitter.com">
            <img src="img/twitter.png">
        </a>
    </div>
</body>

</html>

<?php

$con = mysqli_connect('localhost', 'root', '','db_contact');

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gst = $_POST['gst'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO `tbl_contact` (`Name`, `Address`, `Phone`, `Email`, `GST`,`Product`,`Quantity`) VALUES ('$name', '$address', '$phone', '$email', '$gst','$product','$quantity');";

$x=mysqli_query($con, $sql);

echo '<script>alert("Details submitted successfully!")</script>';


?>