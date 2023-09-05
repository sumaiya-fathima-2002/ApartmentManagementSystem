<?php
if(isset($_POST['name'])){
    include '_dbconnect.php';
    session_start();
$name = $_POST['name'];
$vila = $_POST['vila'];
$issue = $_POST['issue'];
$_SESSION['vila'] = $vila;
$sql="INSERT INTO `complaints` ( `villa no`, `name`, `issue`, `date`, `status`, `reply`) VALUES ( '$vila', '$name', '$issue', current_timestamp(), 'Submitted', 'Thank you for contacting us.');";
header("location: status.php");
$result = mysqli_query($conn,$sql);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .text-center {
            align-items: center;
        }

        #navbar {
            display: flex;
            align-items: center;
            position: relative;
        }

        #logo {
            margin: 10px 34px;
        }

        #logo img {
            height: 59px;
            width: 59px;
            margin: 3px 6px;

        }

        #navbar ul {
            display: flex;
        }

        #navbar ul li {
            list-style: none;
            font-size: 1.3rem;
        }

        #navbar ul li a {
            color: white;
            display: block;
            padding: 3px 22px;
            text-decoration: none;
            border-radius: 18px;
        }

        #navbar ul li a:hover {
            color: black;
            background-color: white;
        }

        #navbar::before {
            content: "";
            background-color: black;
            position: absolute;
            height: 100%;
            width: 100%;
            z-index: -1;
            opacity: 0.4;
        }

        .container {

            display: flex;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }

        .form-group input {
            font-family: 'Raleway', sans-serif;
            display: inline;
            border: 2px solid green;
            margin: 28px auto;
            padding: 14px 33px;
            font-size: 33px;
            width: 495px;
            border-radius: 34px;
        }

        .form-group label {
            font-size: 30px;

            padding: 65px 17px;
        }

        .form-group select {
            font-family: 'Raleway', sans-serif;
            display: inline;
            border: 2px solid green;
            margin: 28px auto;
            padding: 14px 33px;
            font-size: 33px;
            width: 495px;
            border-radius: 34px;
        }

        .btn {
            font-family: 'Raleway', sans-serif;
            margin: 0px auto;
            padding: 10px 25px;
            background-color: red;
            color: white;
            font-size: 25px;
            cursor: pointer;
            border-radius: 44px;
        }
        .btn a{
            text-decoration: none;
        }

        .btn :hover {
            color: black;
            
        }
    </style>
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.jpg"
               >
        </div>
        <ul>
            <li class="item"><a href="home.php">Home</a></li>
            <li class="item"><a href="myunit.php">My Unit</a></li>
            <li class="item"><a href="contact.php">Contact Us</a></li>
            <li class="item"><a href="#logout.php">Log Out</a></li>

        </ul>
    </nav>
    <div class="container">

        <form action="complain.php" method="post">
            <div class="form-group">
                <label for="name">Name : </label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="age">Villa No. : </label>
                <input type="number" class="form-control" id="villa" name="vila">
            </div>
            <div class="form-group">
                <label for="issue">Issue : </label>
                <input type="text" class="form-control" id="issue" name="issue">
            </div>
               <button type="submit" class="btn">Register</button>
        </form>
    </div>
    
</body>

</html>