<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" />



    <title>Ger's Garage | Dashboard</title>
</head>

<body>
    <nav>
        <div class="logo"><a href="index.php"> Ger's Garage</a></div>

        <ul class="nav-links">
            <li><a>+353 1 6333444</a> </li>
            <li><a href="about.php">About Us</a></li>
            <?php
            if (isset($_SESSION['userId'])) {

                echo '<li><a href="userdash.php"><i class="fa fa-user-o" aria-hidden="true"></i>My Profile </a></li>';
                echo '<li><a href="includes/logout.inc.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>';
            } else {
                echo '<li><a href="userdash.php"><i class="fa fa-user-o" aria-hidden="true"></i>My Profile </a></li>';
            }

            ?>
            <li><a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <div class="user-prof">
        <img src="img/p4.jpg" alt="" width="90px" style="border-radius: 50%;">
        <h4><?php echo  $_SESSION['userName'] ?></h4>
        <a href="userdash.php" class="home-btn"><i class="fa fa-home" aria-hidden="true"></i></a>
        <a href="profile.php" class="profile-btn">My Profile</a>
        <a href="newbooking.php" class="new-book">+ New Booking</a>

    </div>

    <h3>My Profile</h3>
    <div class="flex-container">
        <div class="details" id="details">
        <h4><?php echo  $_SESSION['userName'] ?></h4>
            <p>E-mail: pam@dundlermifflin.com</p>
            <p>Phone 1: 0832344567</p>
            <p>Phone 2: 0832344567</p>
            <p>Address: Dublin st. 450</p>
            <p>Vehicle Type: Car</p>
            <p>Vehicle Make: Tesla</p>
            <p>Vehicle Engine: Eletric</p>
            <p>Booking Type: Annual</p>


            <div class="btn-dtls">
                <a href="update-profile.php" class="add-comment-btn">Update Profile</a>
                <a href="userdash.php" class="print-order-btn">My Orders</a>
            </div>
        </div>





    </div>






    <div class="footer">
        <h4>Sign-Up to be updated</h4>

        <div class="footer-container">
            <form action="">
                <input type="text" placeholder="Name and Last Surname">
                <input type="text" placeholder="E-mail">
                <button>Submit</button>
            </form>
        </div>
        <ul>
            <li><a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a></li>
        </ul>
        <div class="footer-info">
            <p>CCT College Dublin</p>
            <p> 30 - 34 Westmoreland St. Dublin 2</p>
            <p>Ireland</p>
            <p> +353 1 6333444</p>
            <p> info@cct.ie</p>
        </div>


    </div>

    <script src="script.js"> </script>
</body>

</html>