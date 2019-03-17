<?
$id=$_GET['id'];
echo $id;
include 'connect.php';
$result = mysqli_query($connect, "SELECT * FROM `images` WHERE `id` = $id");  
$data = mysqli_fetch_assoc($result);
$views = $data['numviews']+1;
echo $views;
mysqli_query($connect, "UPDATE `images` SET `numviews` = $views WHERE `images`.`id` = $id");
$path = "public/images/".$data['filename'];
echo "<img src='$path' alt = 'car'>";