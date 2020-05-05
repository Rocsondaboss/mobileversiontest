<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/w3pro.css">
<link rel="stylesheet" href="styles/w3-theme-red.css">

<body>
<?php include 'includes/header.php';?>


<div class="w3-container">

<hr>
<div class="w3-cell-row">
  <div class="w3-cell" style="width:30%">
    <img src="img/taphmeme.jfif" style="width:50%">
  </div>
  <div class="w3-cell w3-container">
    <h3><a href="top-funny-watch.php">Top funny videos you want to watch on YouTube</a></h3>
    <p>These are the list</p>
  </div>
</div>  
<hr>

<div class="w3-cell-row">
  <div class="w3-cell" style="width:30%">
    <img src="data:image/jpeg;base64,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" style="width:50%">
  </div>
  <div class="w3-cell w3-container">
    <h3><a href="mr-bean-synopses.php">Mr. Bean animated episode synopses</a></h3>
    <p>These are the list</p>
  </div>
</div>  
<hr>



</div>


<?php include 'includes/footer.php';?>

</body>
