
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
    <link rel="stylesheet" href="hotelRent.css">
    <title>Tour Guide</title>
</head>
<style>
        
        th,tr{
            border: 4px solid black;
            background-color:black;
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
            <li><a href="http://localhost/project/userlanding.php">Home</a></li>
              <li><a href="Homepage.html">Logout</a></li>

		</ul>
        <div class="rightNav">
        <a href="TourGuideBook.html">
			<button class="btn btn-sm">Book Now</button></a>
		</div>
</nav>

<section class="background firstsection">
		<div class="box-main">
			<div class="firstHalf">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for City.." title="Type in a name">
				<p class="text-big">Available Tour Guide</p>
				
			 <p class="text-small">

					
<table id ="myTable">
    
<tr>
                        <th>Guide ID</th>
                        <th>Guide Name</th>
                        <th>Area</th>
                        <th>City</th>

                    </tr>
<?php
$sql = "Select GID , GName , Area,City From tourguide";
$result = mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        ?>
  <tr>
            <td><?php echo $row["GID"];?></td>
            <td><?php echo $row["GName"];?></td>
            <td><?php echo $row["Area"];?></td>
            <td><?php echo $row["City"];?></td>
    </tr>
      <?php
    }
    
} 
else 
echo " No Result";


?>

</table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
				
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