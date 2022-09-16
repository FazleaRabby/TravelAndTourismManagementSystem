
<?php


$db = mysqli_connect("localhost","root","","project");

if(!$db)
{
    die("Database Not Connected");
}
else
    {
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="readreview.css">
    <title>Reviews</title>
</head>
<style>
        
        th,tr{
            border: 4px solid black;
            background-color:#351C75;
        }
        td{
            border: 2px solid black;
            border-radius: 5px;
            
        }
        #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

       
    </style>
<body>
    
<nav class="navbar background">
		<ul class="nav-list">
			<div class="logo"><img src="logo.jpg"></div>
            <li><a href="http://localhost/project/logout.php">Logout</a></li>

		</ul>
        <div class="rightNav">
        <a href="restaurantReservation.html">
			<button class="btn btn-sm">Book Now</button></a>
		</div>
</nav>

<section class="background firstsection">
		<div class="box-main">
			<div class="firstHalf">
        	<p class="text-big">Reviews</p>
			 <p class="text-small">

					
<table id ="myTable">
    
<tr>
                        <th>Name</th>
                        <th>Review</th>

                    </tr>
<?php
$sqlr = "Select RName , review  From reviewindex";
$result = mysqli_query($db,$sqlr);
if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        ?>
  <tr>
            <td><?php echo $row["RName"];?></td>
            <td><?php echo $row["review"];?></td>
            
    </tr>
      <?php
    }
    
} 
else 
echo " No Result";


?>

</table>

				
			</div>
		</div>
	</section>

	<footer class="background">
		<p class="text-footer">
			Copyright ©-All rights are reserved
		</p>

	</footer>



</body>
</html>