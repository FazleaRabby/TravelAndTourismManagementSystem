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
    <link rel="stylesheet" href="employeelanding.css">
    <title>Empolyeelanding</title>
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
        table{
        
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
#myInput1 {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
#myInput2 {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
#myInput3{
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
      <li><a href="userlanding.html">Home</a></li>
            <li><a href="logout.php">Logout</a></li>

		</ul>
        <div class="rightNav">
        <a href="http://localhost/project/readreview.php">
			<button class="btn btn-sm">Feedback</button></a>
		</div>
</nav>

<section class="background firstsection">
		<div class="box-main">
			<div class="firstHalf">
      <p class="text-big">Orders for Hotel Room </p>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Hotel Name.." title="Type in a name">
			
				
			 <p class="text-small">

					
<table id ="myTable">
    
<tr>
                        <th>Name</th>
                        <th>Hotel Name</th>
                        <th>Phone </th>
                        <th>Email</th>
                        <th>Arrival Date</th>
                        <th>Departure Date</th>
                        <th>Number of Adults</th>
                        <th>Number of Child</th>
                        <th>Comments</th>
                        <th> Delete Order<th>
                    </tr>
<?php
$sql= "Select fname , hName,phone,email, Adate,departure,noa,noc,question From hotelbook";
$result = mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        ?>
      
  <tr>
            <td><?php echo $row["fname"];?></td>
            <td><?php echo $row["hName"];?></td>
            <td><?php echo $row["phone"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["Adate"];?></td>
            <td><?php echo $row["departure"];?></td>
            <td><?php echo $row["noa"];?></td>
            <td><?php echo $row["noc"];?></td>
            <td><?php echo $row["question"];?></td>
            <td> <a href="http://localhost/project/deletehotelorder.php?I1=<?php  echo $row["phone"] ?>& I2=<?php echo $row["Adate"] ?>"> <button type="button"> Delete</button></a></td>


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
    td = tr[i].getElementsByTagName("td")[1];
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





<p class="text-big">Orders for Restaurant Reservation </p>
            <input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search for Restaurant Name.." title="Type in a name">
			
				
			 <p class="text-small">

					
<table id ="myTable1">
    
<tr>
                        <th>Name</th>
                        <th>Restaurant Name</th>
                        <th>Phone </th>
                        <th>Email</th>
                        <th>Reservation Date</th>
                        <th>Preferred Time</th>
                        <th>Number of Adults</th>
                        <th>Number of Child</th>
                        <th>Comments</th>
                        <th>Delete Reservation</th>
                    </tr>
<?php
$sql1= "Select fname, resName,phone,email, Adate,Ptime,noa,noc,question From resrestaurant";
$result1 = mysqli_query($db,$sql1);
if(mysqli_num_rows($result1)>0){
    while ($row1 = mysqli_fetch_assoc($result1)){
        ?>
  <tr>
            <td><?php echo $row1["fname"];?></td>
            <td><?php echo $row1["resName"];?></td>
            <td><?php echo $row1["phone"];?></td>
            <td><?php echo $row1["email"];?></td>
            <td><?php echo $row1["Adate"];?></td>
            <td><?php echo $row1["Ptime"];?></td>
            <td><?php echo $row1["noa"];?></td>
            <td><?php echo $row1["noc"];?></td>
            <td><?php echo $row1["question"];?></td>
            <td> <a href="http://localhost/project/deleterestaurantres.php?I3=<?php  echo $row1["phone"] ?>& I4=<?php echo $row1["Adate"] ?>& I5=<?php echo $row1["Ptime"] ?>"> <button type="button"> Delete</button></a></td>

    </tr>
      <?php
    }
    
} 
else 
echo " No Result";


?>

</table>
<script>
function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
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













<p class="text-big">Orders for Tour Guide Booking</p>
            <input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search for Name.." title="Type in a name">
			
				
			 <p class="text-small">

					
<table id ="myTable2">
    
<tr>
                        <th>Customer Name</th>
                        <th>Preferred Guide ID</th>
                        <th>Phone </th>
                        <th>Email</th>
                        <th>Required Date</th>
                        <th>Comments</th>
                         <th>Delete Booking</th>
                    </tr>
<?php
$sql2= "Select fname, Gid,phone,email,Adate,question From booktourguide";
$result2 = mysqli_query($db,$sql2);
if(mysqli_num_rows($result2)>0){
    while ($row2 = mysqli_fetch_assoc($result2)){
        ?>
  <tr>
            <td><?php echo $row2["fname"];?></td>
            <td><?php echo $row2["Gid"];?></td>
            <td><?php echo $row2["phone"];?></td>
            <td><?php echo $row2["email"];?></td>
            <td><?php echo $row2["Adate"];?></td>
            <td><?php echo $row2["question"];?></td>
            <td> <a href="http://localhost/project/deletetourguideorder.php?I6=<?php  echo $row2["phone"] ?>& I7=<?php echo $row2["Adate"] ?>"> <button type="button"> Delete</button></a></td>

    </tr>
      <?php
    }
    
} 
else 
echo " No Result";


?>

</table>
<script>
function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
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











<p class="text-big">Orders for Featured Packages</p>
            <input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Search for Package ID.." title="Type in a name">
			
				
			 <p class="text-small">

					
<table id ="myTable2">
    
<tr>
                        <th>Customer Name</th>
                        <th>Package ID</th>
                        <th>Phone </th>
                        <th>Email</th>
                        <th>Preferred Date</th>
                        <th>Number of Adults</th>
                        <th>Number of child</th>
                        <th>Delete Booking</th>
                        

                    </tr>
<?php
$sql3= "Select fname, Pid , phone,email,Adate,noa,noc From packagebook";
$result3 = mysqli_query($db,$sql3);
if(mysqli_num_rows($result3)>0){
    while ($row3 = mysqli_fetch_assoc($result3)){
        ?>
  <tr>
            <td><?php echo $row3["fname"];?></td>
            <td><?php echo $row3["Pid"];?></td>
            <td><?php echo $row3["phone"];?></td>
            <td><?php echo $row3["email"];?></td>
            <td><?php echo $row3["Adate"];?></td>
            <td><?php echo $row3["noa"];?></td>
            <td><?php echo $row3["noc"];?></td>
            <td> <a href="http://localhost/project/deletefeaturedtourpackageorder.php?I8=<?php  echo $row3["phone"] ?>& I9=<?php echo $row3["Adate"] ?>"> <button type="button"> Delete</button></a></td>

    </tr>
      <?php
    }
    
} 
else 
echo " No Result";


?>

</table>
<script>
function myFunction3() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable3");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
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