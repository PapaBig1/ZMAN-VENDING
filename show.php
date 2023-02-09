<?php
    $file = filter_input(INPUT_GET, 'varname');
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Z-Man's Private Reserve</title>
<meta charset="utf-8">
<link href="main.css?id=22" rel="stylesheet">
<style>
</style>
</head>
<body>

<div id="wrapper">
<header><h1>Z-Man's Private Reserve</h1></header>
<main>
<h2>Thank you for your purchase!</h2>

<h3>You purchased: </h3>
<?php echo '<img src="images/' . $file . '" width="400" alt="' .  pathinfo($file, PATHINFO_FILENAME) .' " class="center">' ?>

<h2><a href="vend.php?file=<?php echo $file ?>">click me to vend</a></h2>

<h3><a href="index.php">Back2Home</a></h3>
<!-- </h3>The desired temperature you chose is <?php #echo $temp ?></h3> -->


<footer>
Z-Man's Private Reserve, Created by <a href="mailto:zpost@mail.mccneb.edu">Zachary Post</a>
</footer>
</div>
</main>
</body>
</html>