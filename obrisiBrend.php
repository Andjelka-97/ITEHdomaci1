<?php
include('konekcija.php');
$id = $_GET['id'];
$db-> where("id",$id);
$db -> delete('brend');
header("Location: index.php");

 ?>
