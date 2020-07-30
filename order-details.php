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
        <div class="logo"><a href="index.html"> Ger's Garage</a></div>

        <ul class="nav-links">
            <li><a>+353 1 6333444</a> </li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="login.html">Sign Up</a></li>
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
        <h4>Pam Beesley</h4>
        <a href="dashboard.html" class="home-btn"><i class="fa fa-home" aria-hidden="true"></i></a>
        <a href="profile.html" class="profile-btn">My Profile</a>
        <a href="newbooking.html" class="new-book">+ New Booking</a>
        
    </div>


    <h3>Order Details</h3>
    
    <div class="flex-container">
        <div class="details">
            <h4>Flat Tyres</h4>
            <p><b>Order Number:</b> 102</p>
            <p><b>Status:</b> Booked</p>
            <p><b>Booking Date: </b> 10/12/2021 <span>- Time: 13:30pm</span></p>
            <br>

            <h4>More Details</h4>
            <p><b>Car Make:</b> Ford</p>
            <p><b>Car Model:</b> Ka</p>
            <p><b>Engine Type:</b> Hybrid</p>
            <p><b>Licence Details:</b> 102abc</p>
            <p><b>Plan Type:</b> Annual</p>
            <p><b>Car Problem:</b> Flat Tyres</p>
            <p><b>Comments: </b> My car is so cool that it ice-creams</p>
            <p><b>Adtional Repairs:</b> This section can only be added by Ger</p>

            <div class="btn-dtls">
                <a href="#" class="add-comment-btn"> Update Comment</a>
                <a href="#" class="print-order-btn"> Print Order</a>
            </div>


        </div>

    </div>




    <div class="footer">
        <h4>Sign-Up to be updated</h4>

        <div class="footer-container">
            <form action="">
                <input type="text" placeholder="Name and Last Surname">
                <input type="email" placeholder="E-mail">
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