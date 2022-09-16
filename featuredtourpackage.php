<?php


$db = mysqli_connect("localhost","root","","project");

if(!$db)
{
    die( "Database not connected");
}
else
    {
      
    }

?>
        <html>
            <style>
        * {
    margin:0;
    padding:0;
    overflow-x: hidden;
    box-sizing: border-box;
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
    height: 40vh;
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



/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 50px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.Explore{
    background-color:grey;
}
.content{
    background-color:white;
    
  opacity: 0.65;
}
</style>




</style>
            <body>
            <nav class="navbar background">
		<ul class="nav-list">
			<div class="logo"><img src="logo.jpg"></div>
			<li><a href="http://localhost/project/homepage.html">Home</a></li>
		</ul>
		</div>
	</nav>
            <section class="background firstsection">
		<div class="box-main">
			<div class="firstHalf">
				<p class="text-big">Featured Tour Packages</p>
			
			</div>
		</div>
	</section>
<div class="row">
  <div class="column" style="background-image:url(p1.png); ">
  <div class="content">
    <center><h2>Coxs Bazaar</h2></center>
    <p>
     <center><b>  Package Code : pck10122</b></center>   <br> <br>

    <b> What we will see:</b> <br>
* Cox's Bazar (World's longest beach.) <br>
* Fragrance point <br>
* Lavani Point <br>
* Kalatali Point <br>
*Snowball <br>
*Inani Beach <br>
*Marine Drive <br> <br>
<b>The package includes: </b><br>
*Dhaka - Cox's Bazar - Dhaka non-AC bus. <br>
*Himchari Inani travel expenses. <br>
*All types of guide expenses. <br>
* Breakfast <br>
*Lunch and dinner. <br>
*Room to freshen up. <br> <br>
 
<b>What is not included in the package:</b> <br>
<br>*Cost of journey breaks during to and fro.
<br>*No entry fee and ride fee.
<br>*Any expenses not mentioned in the package. <br> <br>

 <h1> Price: 9000 Taka </h1>
 </p>
</div>
  </div>
  <div class="column" style="background-image:url(p2.jpeg);">
  <div class="content">
    <center><h2>Bandarban</h2></center>
    <p>
     <center><b>  Package Code : pck10222</b></center>   <br> <br>
    <b> All the facilities that are included in this package:</b><br>
* Commuting by bus <br>
* Stay in AC room <br>
* Hilltop Swimming Pool <br>
* Buffet breakfast <br>
* 5 main meals <br>
* Bar-B-Q  <br>
* Traditional food <br>
* Sightseeing <br>
* Reserve Jeep <br>
* Entry fee <br>
* Guidance <br>

<b>*All types of Transportation in Sightseeing Area.</b><br>

Sightseeing: <br>
* Nilgiris <br>
* Nilachal <br>
* Golden Temple (subject to permission) <br>
* Rock falls <br>
* Cloudy <br>
* Chimbuk <br>

 <b>Food Menu:</b> <br>
Day 1: <br>
Breakfast: paratha, vegetables, egg omelette, tea, mineral water <br> 

Lunch: White Rice, Roo Fish/Chicken, Bharta, Vegetables/Shutki, Dal, Mineral Water <br>

Dinner: (Traditional Meal) Batabi Rice, Coral Fish Bar-B-Q, Chicken Chutney (Specially Prepared Chicken), Grilled Vegetables, Dal, Mineral Water <br>

Day 2: <br>
Breakfast: (Buffet Breakfast) Parata, Vegetables, Eggs both types, Butter Dal, Fruits, Halwa, Cake, Bread, Jelly, Butter, Tea, Coffee <br>

Lunch: (Traditional & Desi Food-Hill Style) White Rice, Potato Bharta, Tomato Bharta, Eggplant Bharta, Vegetables, Mountain Vegetables, Shutki, Banana Chicken, Small Fish Fry, Salad, Mineral Water. <br>
    

 <h1> Price: 10000 Taka </h1>
</p>
 
</div>
  </div>
  
<div class="column" style="background-image:url(p3.jpeg);">
<div class="content">
    <center><h2>Sajek & Khagchari</h2></center>
    <p>
     <center><b>  Package Code : pck10322</b></center>   <br> <br>
  
    <b>What will we see:</b> <br>
1. Lusai village. <br>
2. Risang fountain <br>
3. Buddhist temple. <br>
4. Stone Garden. <br> 
5. Sunset at Kanglak Hill. <br> 
6. Mysterious Alutila Cave. <br>
8. Sunrise at Sajek Helipad. <br>
9. Ruilui neighborhood and Kanglak neighborhood. <br>
10. Zilla Parishad Park and Hanging Bridge. <br>
<br>
<b>Tour plan:</b><br>

Day-1: Khagrachari journey by night bus from Dhaka. <br>

Day-2: After reaching Khagrachari in the morning, We will travel to Sajek peak from Baghairhat at 10 am by Chander car under army escort (army security). In the afternoon, climb the Kanglak hill and watch the sunset from Kanglak. In the evening We will visit the helipad and Sajek Peak. There will be a barbecue party at night. We will stay at Sajek's cottage at night. <br>
We will wake up early to watch the sunrise from Sajek's helipad. After checking out the cottage, We will leave for Khagrachari with army escort (army security) at 10 am. On reaching Khagrachari we will see hanging bridge, Alutila cave and Risang spring. After that we will have a traditional bamboo chicken dinner at Khagrachari and leave for Dhaka. <br>

<br>

<br>
<b>This amount will include:</b> <br>
1. Dhaka-Khagrachari-Dhaka non-AC bus (but if someone wants to travel by AC bus, extra bill will be added for AC bus) <br>
2. Breakfast on the morning of the two days of the trip. Lunch on both days. A barbecue party one night and dinner the next. <br>
3. One night stay at Sajek Resort. <br>
4. Reserve Chander's car for two days.  <br>
5. Entrance fee and experienced guide for each tour place. <br>

<b>☑️Food menu:</b> <br> 
▶️ 1st day: <br>
🔹 In the morning Parta, dal bhaji, fried egg, tea, mineral water. <br>
Afternoon rice, bamboo chicken, potato filling, dal, vegetables, mineral water. <br>
🔹Night Chicken BBQ, Parotta, Salad, Coldrings, Mineral Water. <br>

▶️ 2nd day: <br>
🔹 In the morning fried khichuri, fried eggs, mineral water. <br>
🔹At noon rice, beef/chicken, potato bharta, dal, vegetables, mineral water. <br>
🔹At night rice, beef/chicken, potato bharta, dal, vegetables, mineral water. <br>


</p>


 <h1> Price: 9500 Taka </h1>
  </div>
</div>
</div>


<div class="row">
  <div class="column" style="background-image:url(p4.jpg);">
  <div class="content">
    <center><h2>Rangamati</h2></center>
    <p>
     <center><b>  Package Code : pck10422</b></center>   <br> <br>
  
    
     <b>What we will see:</b> <br> 
1) Rangamati <br>
2) Rajban Bihar <br>
3) House of Chakma king <br>
4) Buddhist statues <br>
5) Shublong Jharna 1 and 2 <br>
6) Barkal Tila <br>
7) Hanging bridge and Paulwell Park and Cottage. <br>


<b>What you will get in this Package:</b> <br> 

1. Dhaka-Rangamati-Dhaka Non AC bus fare <br>
2. Reserve boat hire for Kaptai Lake tour for whole day <br>
3. Breakfast,Lunch and Dinner. <br> 
4. All guide expenses. <br>

<b>What is not included : <b> <br>
★Any personal expenses <br>
★Food on the highway. <br>
★Local transport service and entry fee. <br>
★ If you want to eat something outside the fixed food menu of each meal, that is the cost. <br>

<b>Food List :</b> <br> 
Breakfast: paratha, vegetables, egg omelette, tea, mineral water <br>

Lunch: White Rice, Roo Fish/Chicken, Bharta, Vegetables/Shutki, Dal, Mineral Water <br>

Dinner: (Traditional Meal) Batabi Rice, Coral Fish Bar-B-Q, Chicken Chutney (Specially Prepared Chicken), Grilled Vegetables, Dal, Mineral Water <br>




</p>


 <h1> Price: 10500 Taka </h1>
  </div>
  </div>
  <div class="column" style="background-image:url(p5.jpg);">
  <div class="content">
    <center><h2>Sylhet</h2></center>
    <p>
     <center><b>  Package Code : pck10522</b></center>   <br> <br>
  
    

    <b> What You'll See: </b> <br><br>

1.Bisnakandi <br>
2.Jaflong <br>
3.Ratargul Swamp Forest <br>
4.Lovachora <br>
5.Shrine of Hazrat Shahjalal (R) <br>
6.Tamabil <br>
7.Sylhet Shahi Eidgah <br>
8.Panthumai fountain <br>

<b>Description:</b><br>
Day 1 <br>
Pickup from train or bus station <br>
Breakfast at River Queen Restaurant at Lalakhal <br>
Check-in at Lalakhal Tent Resort <br>
One hour boat ride on the Sari river <br>
Trekking in the tea garden <br>
Lunch at River Queen Restaurant <br>
Canoe, Kayaking, ATV Ride in the afternoon <br>
BBQ party in the evening by the bank of Sari river <br>
Stay in tent at night <br>
<br>
Day 2 <br>
Breakfast at River Queen Restaurant <br>
Check-out and visit to Ratargol <br>
Lunch at Ratargol <br>
Trekking at Khadimnagar Rain Forest <br>
Dinner with live music at Surma River Cruise <br>

<b>Special Arrangments:</b><br>

1 nights accommodation in Tent at Nazimgarh Tent Resort <br>
2 complimentary breakfast at River Queen Restaurant at Lalakhal <br>
Transport by air-conditioned vehicle from bus/train station-Tent Resort-destinations-Tent Resort (car/micro depends on group’s size), 
Canoe, Kayaking, ATV Ride, BBQ <br>
Visit to Ratargol with boat ride and lunch in rural environment <br>
Trekking at Khadimnogor Rain Forest <br>
Dinner with live music at Surma River Cruise <br>
<br><br>
All Days foods and transportation are included in the package <br>
<br>
<b>Foods:  </b><br>
Breakfast: paratha, vegetables, egg omelette, tea, mineral water <br>
Lunch: White Rice, Roo Fish/Chicken, Bharta, Vegetables/Shutki, Dal, Mineral Water <br>
Dinner: (Traditional Meal) Batabi Rice, Coral Fish Bar-B-Q, Chicken Chutney (Specially Prepared Chicken), Grilled Vegetables, Dal, Mineral Water.
<br> <br>


</p>


 <h1> Price: 10500 Taka </h1>
  </div>
  </div>
  <div class="column" style="background-image:url(p6.jpg);">
  <div class="content">

  <center><h2>Sundarban</h2></center>
    <p>
     <center><b>  Package Code : pck10622</b></center>   <br> <br>
  
    <b> Our package:</b> <br>
1. Jungle tour on house boat / launch. <br>
2.Tribal dance. <br>
3. Government guide. <br> 
4.Experienced tour manager. <br>
5. Rural and wild life attraction. <br>
6. Overnight stay at hotel/resort. <br>
7.  Dhaka to Khulna Bus then Sundarban.All kinds of transportation are included. <br>



<b>Tour Details:</b> <br>

Day 1 :- Canning / Sonakhali Boat / Launch, Gosba, Rabindranath's Bacon Bungalow Hamilton Bungalow, Pakhir Jungle, Pakhiralaya Night Bus Hotel / Launch.
<br>
 Day 2 :- Sajne Khali (W.T), Sudhanyakhali (W.T), Dobaki (W.T). Sidescene Peer Khali, Ghazikhali, Bon Bibi Bharani, Deul Kharani, Back Pakhiraloy.
<br>
Day 3 :- Dayapur, Jatirampur, Local Sidescene Back Sonakhali.
<br>
         
<b>Foods:</b> <br>
<br>
First Day Morning:- Tea, Biscuits, Luchi/Kachuri, Alur Dum, Sweets. <br>
11 am:- Amude fish fry. <br>
Afternoon :- Rice, Murighant, fried, vegetables [raw vegetables with hilsa head], hilsa steamed, hilsa in sarresh, chutney, papad. Afternoon :- fruit.
<br> Evening:- Chowmin, tea/coffee. <br>
<br> Night:- Rice, dal, fried, vegetables, mutton curry, salad.
<br>
<br> Second day morning :- Bed, Biscuit. Luchi/kachuri, chana masala.
<br> 11 am:- Mashed potatoes.
<br> Afternoon:- Rice, dal, fried potatoes, fried hilsa, pui hilsa, curd hilsa, chutney, papad.
<br> Evening:- Chicken Pokra Coffee.
<br> Night:- Fried rice, chili chicken, salad.
<br>
<br> Third day morning:- Bedti, biscuits, puri, potato vegetable.
<br> Noon:- Rice, dal, chips, hilsa biryani, chicken kasha, salad.
<br>
<br> 🔴 One night Jhumur dance is organized in the hotel.
     

</p>
<h1> Price: 10500 Taka </h1>


  </div>
</div>
</div>
<div class="Explore">
                <br>
                <center><a href="bookfeaturedtourpackage.html"><button type="button">Book Now</button></a></center>
<br> <br> 
</div>
<footer class="background">
		<p class="text-footer">
			Copyright ©-All rights are reserved
		</p>

	</footer>
            </body>
        
        </html>
      