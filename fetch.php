<?php



$connect = mysqli_connect("localhost", "root", "1234", "bohobaza");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM brend
  WHERE name LIKE '%".$search."%'
 
 ";
}
else
{
 $query = "
  SELECT * FROM brend ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
 
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Brand name</th>
     <th>Brand description</th>
     <th>Country</th>
   
    </tr>
   
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name"].'</td>
    <td>'.$row["opis"].'</td>
    <td>'.$row["zemlja"].'</td>
   
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>