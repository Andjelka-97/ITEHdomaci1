<?php
      include 'konekcija.php';


      $poruka = '';
      if(isset($_POST["unesi"])){

      include("Korisnici.php");
      $dl = new Korisnik($db);

      if($dl->unesiKorisnika()){
      header("Location: index.php");
      }else{
      $poruka = 'Greska pri dodavanju korisnika';
      }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register on Chic BOHO site!</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<div class="header">
		<h2>Register</h2>
    </div>

    <form method="post" action="">
      
    	
    	<div class="input-group">
          <label>Username</label>
          <input type="text" name="username">

    	</div>
    	<div class="input-group">
          <label>Email</label>
          <input type="text" name="email">

    	</div>
    	<div class="input-group">
          <label>Password</label>
          <input type="password" name="password">

    	</div>
    	
    	<div class="input-group">
          <button type="submit" name="unesi" class="btn">Register</button>

    	</div>

    

    </form>


  <section id="poslednji" style="margin-top: 50px; border: 2px solid black;">
      <div class="container">
        <div class="kutije">
          
              <img src="img/img1.png">
              <p2>TOP BRANDS</p2>
                <br><br>
              <p3>Explore the most popular brands of this week!</p3>

        </div>


            <div class="kutije">
          
              <img src="img/img2.png">
              <p2>TOP CATEGORIES</p2>
              <br><br>
              <p3>Choose the category you need in just one click!</p3>

        </div>

        <div class="kutije">
          
              <img src="img/img3.png">
              <p2>FREE SHIPPING</p2>
                <br><br>
              <p3>Join us and see the posibilities you have!</p3>

        </div>

      </div>

    </section>

<footer>
  
   <br>
  <p>Chic BOHO shop, Copyright 2019</p>
   
</footer>
</body>
</html>