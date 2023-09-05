<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link rel="stylesheet" href="test.css">
    <style>
        *{
    margin: 0px;
    padding: 0px;
}
        .container4 {
            display: flex;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }

        h1 {
            color: #7c6c7c;
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

       
    </style>
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.jpg"
                alt="modernCommunity.com">

        </div>
        <ul>
            <li class="item"><a href="home.php">Home</a></li>
            <li class="item"><a href="myunit.php">My Unit</a></li>
            <li class="item"><a href="dues.php">My Dues</a></li> 
            <li class="item"><a href="discover.php">Discover</a></li>
            <li class="item"><a href="gate_update.php">Gate Update</a></li>
            <li class="item"><a href="logout.php">Log Out</a></li> 

        </ul>
    </nav>

    <div class="container4">
        <h1>Dues Details : </h1>
        <?php
include '_dbconnect.php';
session_start();
$username = $_SESSION['username'];
$sql = "select * from `my unit` where username='$username'";
$query = mysqli_query($conn,$sql) or die("Unsucessful");
$row = mysqli_fetch_assoc($query);
$villa = $row['villa no'];
if(true){
    $sql = "select * from `my dues` where `villa no`='$villa'";
$query = mysqli_query($conn,$sql) or die("Unsucessful");

$num=mysqli_num_rows($query);
if($num!=0){
  
    
    echo"<table>";
        echo"<thead>
            <tr>
                <th>Villa N0</th>
                <th>Road No</th>
                <th>Electricity Bill</th>
                <th>Water Bill</th>
                <th>Maintainance</th>
            </tr>

        </thead>";
        echo"<tbody>";
        while($row = mysqli_fetch_assoc($query)){ 
            echo"<tr>";
            echo "<td>" . $row['villa no'] . "</td>";
            echo "<td>" . $row['road no'] . "</td>";
            echo "<td>" . $row['electricity bill'] . "</td>";
            echo "<td>" . $row['water bill'] . "</td>";
            echo "<td>" . $row['maintainance'] . "</td>";

            // echo "<td><a href='admin_delete.php?rn=$row[customer_id]'>Remove</a></td>
            
            
          echo" </tr>";
        }
        echo"</tbody>
    </table>";


}
else{
   echo '<div class = "item4" >Sorry ! No Data Found <br><p>Please Go Back to Home page to Book Your Car and Enjoy Our Services</p></div>';
}
}
?>
    </div class="container4">


</body>

</html>