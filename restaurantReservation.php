<?php


$db = mysqli_connect("localhost","root","","project");

if(!$db)
{
    die( "Database not connected");
}
else
    {
      
    }

    $book_fname =$_POST['fname'];
    $book_resName =$_POST['resName'];
    $phone=$_POST['phone'];
    $email =$_POST['email'];
    $arrival =$_POST['Adate'];
    $departure =$_POST['Ptime'];
    $noa = $_POST['noa'];
    $noc=$_POST['noc'];
    $question=$_POST['question'];
    


    $sql1="INSERT INTO resrestaurant( fname,resName,phone,email,Adate,Ptime,noa,noc,question) VALUES('$book_fname','$book_resName',$phone, '$email','$arrival', '$departure','$noa','$noc','$question')";

    if(mysqli_query($db,$sql1)){
        
        ?>
        <html>
            <style>
        * {
    margin:0;
    padding:0;
    overflow-x: hidden;
}

html {
    scroll-behaviour: smooth;
}

:root {
    --navbar-height: 59px;
}
.logo {
    width: 20%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.logo img {
    width: 33%;
    border: 2px solid white;
    border-radius: 50px;
}

.navbar {
    display: flex;
    align-items: center;
    justify-content: center;
    position: sticky;
    top: 0;
    cursor: pointer;
}

.nav-list {
    width: 70%;
    display: flex;
}

.nav-list li {

    list-style: none;
    padding: 20px;
    
}

.nav-list li a {

    text-decoration: none;
    color: white;
   
}

.nav-list li a:hover {
    color: grey;
}

.rightNav {
    width: 50;
    text-align: right;
}

#search {
    padding: 5px;
    font-size: 17px;
    border: 2px solid grey;
    border-radius: 9px;
}

.background {
    background: grey;
    background-blend-mode: darken;
    background-size: cover;
}

.firstsection {
    height: 100vh;
}

.box-main {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    max-width: 50%;
    margin: auto;
    height: 80%;
}

.firstHalf {
    width: 75%;
    display: flex;
    flex-direction: column;
    justify-content: center
}

.firstHalf img {
    display: flex;
    border-radius: 9050px;
}

.text-big {
    font-family: 'Piazzolla', serif;
    font-weight: bold;
    font-size: 41px;
    text-align: center;
    padding: 30px;
}

.text-small {
    font-family: 'Sansita Swashed', cursive;
    font-size: 18px;
    text-align: center;
}

#service {
    margin: 34px;
    display: flex;
}

#service .box {
    padding: 100px;
    margin: 3px 6px;
    border-radius: 28px;
}

#service .box img {
    margin-top: 10px;
    height: 150px;
    margin: auto;
    display: block;
    border-radius: 200px;
}

#service .box p {

    font-family: sans-serif;
    text-align: center;
}

#services {
    margin: 34px;
   
    display: flex;
}

#services .box {

    padding: 100px;
    margin: 3px 6px;
    border-radius: 28px;
}

#services .box img {
    margin-top: 10px;
    height: 150px;
    width: 125px;
    margin: auto;
    display: block;
    border-radius: 100px;
}

#services .box p {

    font-family: sans-serif;
    text-align: center;
}

.btn {
    padding: 8px 20px;
    margin: 7px 0;
    border: 2px solid white;
    border-radius: 8px;
    background: none;
    color: white;
    cursor: pointer;
}

button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.center {
    text-align: center;
}

.text-footer {
    text-align: center;
    padding: 10px 0;
    font-family: 'Ubuntu', sans-serif;
    display: flex;
    justify-content: center;
}
@media screen and (max-width: 650px) {
.column {
width: 100%;
display: block;
}
}
</style>
            <body>
            <nav class="navbar background">
		<ul class="nav-list">
			<div class="logo"><img src="logo.jpg"></div>
			<li><a href="#Home">Home</a></li>
			<li><a href="#AboutUs">AboutUs</a></li>
		</ul>
		</div>
	</nav>
            <section class="background firstsection">
		<div class="box-main">
			<div class="firstHalf">
				<p class="text-big">Your Order has been registered. Our team will contact with you soon.</p>
				<br>
                <br>
                <center><a href="userlanding.php"><button type="button">Go back to Exploring</button></a></center>
			
			</div>
		</div>
	</section>
            </body>
        
        </html>
        <?php
    }
    else{
        echo " There is an error".mysqli_error($db);
    }


?>