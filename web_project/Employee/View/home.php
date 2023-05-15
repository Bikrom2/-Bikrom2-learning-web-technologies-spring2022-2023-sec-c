<?php 
if(isset($_COOKIE['status'])){
    session_start();

?>
<html>

<head>
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        div{
            background-color: white;
            width:100%
            margin-left: 30%;
            background-image: url("View/cox.jpeg");
            }
        .button{
            text-decoration: none;
             background-image: linear-gradient(green,green);
            padding: 10px 40px;
            color: white;
            font-weight: 700;
            border-radius: 5px;
             }
    </style>
</head>


<body>
    <form method="POST" action="" enctype="">

        <div class="homepage" >
            <center>

        <h3>WELCOME, <?php 
                    $_SESSION['name'];?></h3>

            <u>
                <a href="eventbooking.html">
                    <h3>EVENT BOOKING</h3>
                </a>
            </u>

            <u>
                <a href="newsandmedia.html">
                    <h3>NEWS AND MEDIA </h3>
                </a>

            </u>
            <u>
                <a href="visaprocessing.html">
                    <h3>VISA PROCESSING</h3>
                </a>
            </u>
            <u>
                <a href="photocontest.html">
                    <h3>PHOTO CONTEST</h3>
                </a>
            </u>
            <u>
                <a href="searchhotel.html">
                    <h3>HOTEL BOOKING </h3>
                </a>
            </u>
            
            <a class="button" href="../Controller/logout.php"> Logout </a><br>
            </center>
        </div>
     
    </form>
</body>

</html>
<?php } else{

echo "invalid request";
} ?>