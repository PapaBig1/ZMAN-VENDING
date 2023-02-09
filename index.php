<!--

    Created by: Zachary Post
    Use: Homepage for ZV
    11/11/2022

-->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Z-Man's Private Reserve</title>
<meta charset="utf-8">
<link href="main.css?id=22" rel="stylesheet">
</head>
<body>
  <div id="wrapper">

  <header><h1>Z-Man's Private Reserve</h1></header>

  <main>
<br>
 
 
 <h3>Select your item: </h3>
 <div class="show">
 <?php
 $images = array("coke.png","pepsi.png","sprite.png","gum.png","kitkat.png","maui.png","twix.png","lindor.png","lays.png","gas.png","reeses.png");
    
    // Loop through array to create image gallery
    echo '<div name="img">';
    foreach($images as $image){
        #echo '<div name="img">';
            echo '<a href="show.php?varname=' . $image . '"><img src="images/' . $image . '" width="200" alt="' .  pathinfo($image, PATHINFO_FILENAME) .'"></a>';
            #echo '<p><a href="vend.php?file=' . urlencode($image) . '">Download</a></p>';
        #echo '</div>';
    }
    echo '</div>';
?>
</div>
<br>



  </main>
  <!--<footer>zz</footer> -->
  
<footer>
Z-Man's Private Reserve, Created by <a href="mailto:zpost@mail.mccneb.edu">Zachary Post</a>
</footer>
</div>
</body>
</html>