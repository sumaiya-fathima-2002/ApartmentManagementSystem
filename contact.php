<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="test.css">
    <style>
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

        /* th {
            border: 2px solid red;
            padding: 13px 42px;
            background-color: #66f448;
            color: #0e08f3;
            font-size: 24px;
        }

        td {
            border: 2px solid red;
            padding: 13px 42px;
            font-size: 18px;
            font-weight: bolder;
            background-color: #1efafc;
            color: #000000;
        }
        body{
        
        background: url(https://wallpaperaccess.com/full/195879.jpg) no-repeat center center fixed;
        background-size: cover; 
        
    }
    table a{
        text-decoration: none;
    color: #fffdfc;
    border: 4px solid white;
    padding: 7px 11px;
    border-radius: 24px;
    background-color: #f50c3d
    }
    table a:hover{
        color: black;
    background-color: navajowhite;
    border-color: red;
    }
    p{
        font-size: 22px;
        margin: 34px 0px;
    } */
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
        <h1> Contact Details : </h1>
        <?php
include '_dbconnect.php';
// session_start();
// $username = $_SESSION['username'];
$sql = "select * from `emergency contact`";
$query = mysqli_query($conn,$sql) or die("Unsucessful");


$num=mysqli_num_rows($query);
if($num!=0){
  
    
    echo"<table>";
        echo"<thead>
            <tr>
                <th>E-No</th>
                <th>Roles</th>
                <th>Mobile No</th>
                <th>Other No</th>
                
                
            </tr>

        </thead>";
        echo"<tbody>";
        while($row = mysqli_fetch_assoc($query)){ 
            echo"<tr>";
            echo "<td>" . $row['E-no'] . "</td>";
            echo "<td>" . $row['roles'] . "</td>";
            echo "<td>" . $row['mobile no'] . "</td>";
            echo "<td>" . $row['other no'] . "</td>";
        
            


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