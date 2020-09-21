<?php
include 'konekcija.php';

$id = $_GET['id'];
$db-> where("id",$id);
$zaIzmenu = $db->getOne('brend');
$poruka = '';
if(isset($_POST["unesi"])){

    include("Brend.php");
    $mp = new Brend($db);

    if($mp->izmeniBrend($id)){
      header("Location: index.php");
    }else{
      $poruka = 'Greska pri izmeni';
    }
}

?>

<!DOCTYPE html>


<html>

<head id="header">
<title><?php print "Izmeni Brend" ?></title>


</head>

	<body background="/iteh/img/ppp.jpg">
	<div class="insert" id="insertdiv" style="background-color:#ead5d5;opacity:0.8;width:30%;margin-left:400px;
	     position:absolute;top:150px;height:270px; border:3px solid black;">
			
		
			
			<form method="post" action="">
				<br>
			<input style="margin-left:100px;"type="text" name="name" Placeholder="Name"/><br></br>
			<input style="margin-left:100px;height:50px;"type="text" name="opis" Placeholder="Description"/><br></br>
			<br></br><input style="margin-left:100px;"type="text" name="zemlja" Placeholder="Country"/><br></br>
			<button style="margin-left:140px; background: #ff8989; opacity: 0.9; height: 40px;" name="unesi" class="sb">Update data</button>
			</form>

			
			
	
	
	
	</div>
	</body>


</html>

