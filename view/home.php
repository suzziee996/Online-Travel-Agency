<?php 
     include "config.php";
     include "connect.php";

?>



<html>
    <head>
    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="css/footer.css">
   
        
    <div class="body">
<script>
	var i = 0; //Starting point
	var images = [];
	var time = 2000;

	//Image List
	images[0] = 'css/image1.jpg';
	images[1] = 'css/image2.jpg';
	images[2] = 'css/image3.jpg';
	images[3] = 'css/image4.jpg';

	//Change Image
	function changeImg(){
		document.slide.src = images[i];

		if(i < images.length){
			i++;
		} else {
			i = 0;
		}

		setTimeout("changeImg()", time);
	}

	window.onload = changeImg;

</script>

<img name="slide" width="100%" height="100%">
</div>

        
        
        
        
    <div class="home" ><h1>Online Travel Agency</h1>
        <div class="search">
        <form action="scr.php" method="POST">
            <input type="text" name="id6" placeholder="Hotel ... ">
            <input type="submit" name="search" value="Search">
            
        </form>
            </div>
        </div>
    </head>
    <body>
        
       
        
        <div id="home1">
        <section class="intro" style="margin-left:100px;">
            <div class="work">
                <button type="button" class="myButton" onclick="location.href='register.php'">ADD Your Hotel</button>
                <button type="button" class="myButton" onclick="location.href='view.php'"> Hotels </button>
                <button type="button" class="myButton" onclick="location.href='courses.php'">Restaurants</button>
                
                <button type="button" class="myButton" onclick="location.href='advise.php'">Around The Globe</button>
    
                  </div>
            
 
        </section>
 
                              
            </div>


    
       
  
            <div id="main" style="margin-top:4in;">
  <div class="header"><br>
    <img src="http://triphackr.com/wp-content/uploads/2015/10/Travel_Channel_logo.png" />
  </div>
  <div class="content">
    <img src="css/image1.jpg"/><br><br><a href="#">Hotels</a><a href="#">Flights</a><a href="#">Car Rental</a>
    <p><span>Sydney,</span> City in New South Wales, Australia<br>Sydney, capital of New South Wales and one of Australia's largest cities, is best known for its harbourfront Opera House, with a distinctive sail-like design. Massive Darling Harbour and Circular
      Quay are hubs of waterside life, with the towering, arched Harbour Bridge and esteemed Royal Botanic Gardens nearby. Sydney Tower’s 268m glass viewing platform, the Skywalk, offers 360-degree views of the city, harbour and suburbs.</p><a href="#">More...</a>
  </div>
  <div class="content">
    <img src="css/image2.jpg" />
    <br><br><a href="#">Hotels</a><a href="#">Flights</a><a href="#">Car Rental</a>
    <p><span>New York City</span>, City in United States<br>Home to the Empire State Building, Times Square, Statue of Liberty and other iconic sites, New York City is a fast-paced, globally influential center of art, culture, fashion and finance. The city’s
      5 boroughs sit where the Hudson River meets the Atlantic Ocean, with the island borough of Manhattan at the “Big Apple's" core.<br><br><br><br>
    </p><a href="#">More...</a>
  </div>
  <div class="content">
    <img src="css/image3.jpg" />
    <br><br><a href="#">Hotels</a><a href="#">Flights</a><a href="#">Car Rental</a>
    <p><span>Austria</span>, Country in Europe<br>Austria is a German-speaking country in Central Europe, characterized by its mountain villages, baroque city architecture, Imperial history and rugged alpine terrain. Vienna, its Danube River capital, is
      home to the Schonbrunn and Hofburg palaces, and has counted Mozart, Strauss and Sigmund Freud among its residents. The country’s other notable regions include the northern Bohemian Forest, Lake Traun and eastern hillside vineyards.</p><a href="#">More...</a>
  </div>
</div>


<div><br>
    <img src="http://triphackr.com/wp-content/uploads/2015/10/Travel_Channel_logo.png" />
  </div>
  
  

         
            

       
        
   </body>
    
</html>





