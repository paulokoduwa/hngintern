<!doctype html>
<html lang="en">

<head>
    <title>hnginter</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>


   
    <nav>
            <ul>
                    
                    <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>    
                <li><a href="Home.php">Home</a></li>
                   
        
                  </ul> 

<ul>
    <li style="float:left; padding:0px; margin:0px; color:white; display:block;">
<?php

    $today = "Todays date is ";
    $date = date ("d/m/y");

    echo $today.$date;

?>
</li>
</ul>
        </nav>
      

<section>
    <img src="pic2.jpg" alt="this is a picture" style="width:100%; height:404px;">

</section>

<section>
        <h1 style="color:#2F80ED;">Services</h1>

</section>

        


<div class="row">
    <div class="column">
 <h2>Column</h2>
 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit
nec neque ultricies, eget elementum magna tristique
<a href="url"><l>Read more</l></a>

</p>


    </div>
    <div class="column">

            <h2>Column</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit
           nec neque ultricies, eget elementum magna tristique <a href="url"><l>Read more</l></a></p>
           
        </div>
        <div class="column">
                <h2>Column</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit
               nec neque ultricies, eget elementum magna tristique <a href="url"><l>Read more</l></a></p>
               
            </div>
            

</div>

<div class="footer">
    <p>copyright@hngintern</p>
</div>

    

</body>










</html>