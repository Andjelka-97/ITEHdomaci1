<?php


$name=$_POST['name'];

$con=mysqli_connect("localhost","root","1234","bohobaza");
$query= "SELECT * FROM `brend` WHERE `name`='$name'";
$run=mysqli_query($con,$query )or die(mysqli_error($con));
$row=mysqli_fetch_array($run,MYSQLI_BOTH);
$id=$row['id'];
$name=$row['name'];
$opis=$row['opis'];
$country=$row['zemlja'];
?>


<div class="background">
  <div class="transbox">
    <p>Name: <?php echo $name;?> <br></p>
  </div>
</div>

<div class="background">
  <div class="transbox">
    <p>Description: <?php echo $opis;?> <br></p>
  </div>
</div>

<div class="background">
  <div class="transbox">
    <p>Country: <?php echo $country;?> <br></p>
  </div>
</div>


 

<style>
	
div.background {
  background: url("img/sparkle.jpg");
  border: 2px solid black;
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); 
}

div.transbox p {
  margin: 2%;
  font-weight: bold;
  color: #000000;
}
</style>