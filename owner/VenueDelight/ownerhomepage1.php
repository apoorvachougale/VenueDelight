<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ownerhomepage1.css">
   <!--  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
    
/*html
{
    font-size: 10px;

}*/
body
{
    background-color: #000;

}
.slideshow
{
    width: 100%;
    height: 100vh;
    position: relative;
    overflow: hidden;

}
.slideshow-item
{
    width: inherit;
    height: inherit;
    position: absolute;
    opacity: 0;
    animation:cycleImage 31s infinite;
}



.slideshow-item img
{
    width: 100%;
    height: 100%;
    object-fit: cover;
    animation: zoom 31s infinite;
}
.slideshow-item:nth-child(1),
.slideshow-item:nth-child(1) img

{
    animation-delay: 0s;

}
.slideshow-item:nth-child(2),
.slideshow-item:nth-child(2) img

{
    animation-delay: 5s;
    
}
.slideshow-item:nth-child(3),
.slideshow-item:nth-child(3) img

{
    animation-delay: 10s;
    
}
.slideshow-item:nth-child(4),
.slideshow-item:nth-child(4) img

{
    animation-delay: 15s;
    
}
.slideshow-item:nth-child(5),
.slideshow-item:nth-child(5) img

{
    animation-delay: 20s;
    
}
.slideshow-item:nth-child(6),
.slideshow-item:nth-child(6) img

{
    animation-delay: 25s;
    
}



.slideshow-item-text
{
    max-width: 65%;
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    background-color: rgba(0,0,0,.5);
    color: #fff;
    padding: 3rem 1rem;

}


.slideshow-item-text h5
{
    font-size: 3.5rem;
    font-family: 'Raleway', sans-serif;
    letter-spacing: 1px;
    font-weight: 250;

}
@keyframes cycleImage
{
    25%
    {
        opacity: 1;

    }
    40%
    {
        opacity: 0;
    }
}
@keyframes zoom
{ 100%
    {
        transform: scale(1.3);
    }

}
@media screen and (max-width: 1000px)
{
    .slideshow-item-text
    {
        max-width: 70%;
        padding: 5rem 1rem;
    }
    .slideshow-item-text h5
    {
        font-size: 4rem;
    }
}
@media screen and (max-width: 767px)
{
    .slideshow-item-text
    {
        max-width: 100%;
        padding: 2rem;
        top: initial;
        bottom: 0;
        transform: initial;
    }
    .slideshow-item-text h5
    {
        font-size: 3rem;
    }
    .slideshow-item-text p
    {
        font-size: 1.4rem;
    }
}
 </style>
    <title>Owner Home Page</title>
</head>

<body>
    <header>
        <div class="container" style="max-width: 100%;">
            <input type="checkbox" name="" id="check">

            <div class="logo-container">
                <h2 style="color: #fff;"><strong>VENUE DELIGHT</strong></h2>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: 1.30s">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="venue.php">Venue</a>
                        </li>
                       
                       
                         <li class="nav-link" style="--i: 1.40s">
                            <a href="#">Bookings</a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="acceptedbookings.php">Accepted Bookings</a>
                                    </li>
                                   
                                   
                                    <li class="dropdown-link">
                                        <a href="rejectedbookings.php">Rejected Bookings</a>
                                    </li>
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>    
             
                       <!--  <li class="nav-link" style="--i: 1.40s">
                            <a href="#">Reports</a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="customerreport.php">Customer Report</a>
                                    </li>
                                  
                                    <li class="dropdown-link">
                                        <a href="eventreport.php">Event Report</a>
                                        
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="facilityreport.php">Facility Report</a>
                                    </li>
                                   
                                    <li class="dropdown-link">
                                        <a href="enquiryreport.php">Enquiry Report</a>
                                    </li>
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>     -->
                        <li class="nav-link" style="--i: 1.45s">
                            <a href="myaccount.php">My Account</a>
                        </li>

                         <li class="nav-link" style="--i: 1.50s">
                            <a href="changepassword.php">Change Password</a>
                        </li>
                        <li class="nav-link" style="--i: 1.55s">
                            <a href="logout.php">Logout</a>
                        </li>
                        <li class="nav-link" style="--i: 1.55s;">
                            <a href="notifications.php" style="background-color:#c7004c"><i class="fa fa-bell" style="font-size:24px; color:white" ></i></a>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>

    </header>
    <main>
       <div class="slideshow">
         <div class="slideshow-item">
            <img src="images\8.jpg" alt="">
              <div class="slideshow-item-text">
                 <h5>VENUE DELIGHT</h5>
                 <p>-aims to make every occasion unforgettable!</p>
              </div>
         </div>
          <div class="slideshow-item">
            <img src="images\12.jpg" alt="">
              <div class="slideshow-item-text">
                 <h5>VENUE DELIGHT</h5>
                 <p>-Our business is making memories more beautiful.</p>
              </div>
         </div>
          <div class="slideshow-item">
            <img src="images\3.jpg" alt="">
              <div class="slideshow-item-text">
                 <h5>VENUE DELIGHT</h5>
                 <p>-arrange exclusive events to have priceless memories.</p>
              </div>
         </div>
         <div class="slideshow-item">
            <img src="images\5.jpg" alt="">
              <div class="slideshow-item-text">
                 <h5>VENUE DELIGHT</h5>
                 <p>-People look for beautiful places.We make it.</p>
              </div>
         </div>
          <div class="slideshow-item">
            <img src="images\9.jpg" alt="">
              <div class="slideshow-item-text">
                 <h5>VENUE DELIGHT</h5>
                 <p>-wants to work with you to create something exceptional!</p>
              </div>
         </div>
          <div class="slideshow-item">
            <img src="images\10.jpg" alt="">
              <div class="slideshow-item-text">
                 <h5>VENUE DELIGHT</h5>
                 <p>-whatever we do, we do it with Love!!</p>
              </div>
         </div>
     </div>
</main>

</body>

</html> 