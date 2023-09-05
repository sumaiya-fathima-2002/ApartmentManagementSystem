<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link rel="stylesheet" href="unit.css">
    <style>
        .container4 {
            display: flex;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }

        h1{ color: #7c6c7c;
    border: 2px solid black;
    background-color: #c7e7ebe3;
    margin: 32px 572px;
    border-radius: 25px;
        }

        .item4 {
            margin: 20px 0px;
            font-size: 35px;
            color: white;
            font-weight: bold;
        }

        th {
            border: 2px solid #7700ff;
            padding: 13px 0px;
            background-color: rgb(218 217 231);
            color: #0e08f3;
            font-size: 24px;
        }

        td {
            border: 2px solid #7700ff;
            padding: 13px 1px;
            font-size: 18px;
            font-weight: bolder;
            background-color: #74afa3;
            color: #000000;
        }
        body{
        
        background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVuQON0KomocN1MPVq6uwDsbFztgD7dVrVhA&usqp=CAU) no-repeat center center fixed;
        background-size: cover; 
        
    }
   
    p{
        font-size: 22px;
        margin: 34px 0px;
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
            <li class="item"><a href="community.php">Community</a></li> 
            <li class="item"><a href="discover.php">Discover</a></li>
            <li class="item"><a href="contact.php">Contact Us</a></li>
            <li class="item"><a href="logout.php">Log Out</a></li>

        </ul>
    </nav>

    <div class="container4">
        <h1>Discover our Services: </h1>
        <?php
include '_dbconnect.php';
// session_start();
// $username = $_SESSION['username'];
$sql = "select * from `services`";
$query = mysqli_query($conn,$sql) or die("Unsucessful");
if($query){
    $sql2 = "select * from `emergency contact`";
$query2 = mysqli_query($conn,$sql2) or die("Unsucessful");
}

$num=mysqli_num_rows($query);
if($num!=0){
  
    
    echo"<table>";
        echo"<thead>
            <tr>
                <th>Handman</th>
                <th>Handman No</th>
                <th>Laundry</th>
                <th>Laundry No</th>
                <th>Hello Road</th>
                <th>Hello Road No</th>
                <th>Medical Help</th>
                <th>Medical Helpline</th>
                <th>Other Services</th>
                <th>Other Services No</th>
                
            </tr>

        </thead>";
        echo"<tbody>";
        while($row = mysqli_fetch_assoc($query)){ 
            echo"<tr>";
            echo "<td>" . $row['handman'] . "</td>";
            echo "<td>" . $row['handman no'] . "</td>";
            echo "<td>" . $row['laundry'] . "</td>";
            echo "<td>" . $row['laundry no'] . "</td>";
            echo "<td>" . $row['hello road'] . "</td>";
            echo "<td>" . $row['hello road no'] . "</td>";
            echo "<td>" . $row['medical help'] . "</td>";
            echo "<td>" . $row['medical no'] . "</td>";
            echo "<td>" . $row['other services'] . "</td>";
            echo "<td>" . $row['other-services-no'] . "</td>";
            


            // echo "<td><a href='admin_delete.php?rn=$row[customer_id]'>Remove</a></td>
            
            
          echo" </tr>";
        }
        echo"</tbody>
    </table>";


}

else{
   echo '<div class = "item4" >Sorry ! No Data Found <br><p>Please Go Back to Home page to Book Your Car and Enjoy Our Services</p></div>';
}
?>
    </div class="container4">


</body>

</html>