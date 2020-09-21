
<?php include('konekcija.php');?>
<?php



$con=mysqli_connect("localhost","root","1234","bohobaza");
$query= "SELECT * FROM `brend`";
$run=mysqli_query($con,$query );

?>

<div class="mostpopular">


<div class="mpbody">
<?php

      while($row=mysqli_fetch_array($run,MYSQLI_BOTH)){
           
           $id=$row['id'];
           $title=$row['name'];
           $description=$row['opis'];
           $country=$row['zemlja'];

?>


<div class="brendpost">

<div class="brendhead" style="margin-left: 30px; float: left; margin-right: 10px; margin-top: 8px; "> <?php echo $title?></div>

<div class="brendbody">



<span><a href="/iteh/izmeniBrend.php?id=<?php echo $id; ?>"> 

<button style="padding:10px;
	font-size: 15px;
	color: white;
	margin-left: 10px;
	background: #ea2d2a;
	border: 1px solid black;
	border-radius: 5px;
	opacity: 0.8;
	margin-top: 3px;
	margin-bottom: 4px;">
	  
	<div>Update</div> 
	 
</button>

 </a></span>

<span><a href="/iteh/obrisiBrend.php?id=<?php echo $id; ?>">
	
	<button style="padding: 10px;
	font-size: 15px;
	color: white;
	margin-left: 10px;
	background: #ea2d2a;
	border: 1px solid black;
	border-radius: 5px;
	opacity: 0.8;
	margin-top: 3px;
	margin-bottom: 4px;">
	  
	<div>Delete</div> 
	 
</button>
</a></span>
		 


</div>

</div>


<?php } ?>

</div>

</div>