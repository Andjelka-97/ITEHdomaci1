
<!DOCTYPE html>
<html>
<head>
   <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
   <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
   
   <script>

	function brandinfo(name){
    $.post('stores.php',{name:name},function(data){
    if($('div#infohere').is(":hidden")){
    $("div#infohere").slideDown('slow');
    $('div#infohere').html(data);
    $("#close").fadeIn('slow');
    }
    else{
      $('div#infohere').html(data);
    }
  });
  
}


</script>


	<title>Brands</title>
</head>
<body style="  background-image: url(img/2.jpg); ">


	<div class="brendovi">
 
     <div class="brandbody">
     <img onclick="brandinfo('Zara');" src="img/zara2.jpg" style="height: 220px;">
     <img onclick="brandinfo('Bershka');" src="img/bershka.jpg" style="height: 220px;">
      <img onclick="brandinfo('H&M');" src="img/h&m1.png" style="height: 220px;">
       <img onclick="brandinfo('Pull&Bear');" src="img/p&b.png" style="height: 220px;">
        <img onclick="brandinfo('ExtremeIntimo');" src="img/arilje.jpg" style="height: 220px;"><hr>
     </div>
     <div id="infohere" class="brandinfo">
     </div>





	</div>

</body>
</html>