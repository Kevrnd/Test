 <?
 include "config.php";

 $sql = "SELECT* FROM shop";
 $res = mysqli_query($connect,$sql);
 $form = "<table border='1' width = '500'>"; 

 while ($data = mysqli_fetch_assoc($res)){
 	$form .= "<tr><td>".$data['title']."</td>";
 	$form .= "<td><input type='text' value = ".$data['title']."></td>";
 	$form .= "<td> <button> Сохранить</button></td></tr>";

 }
$form .= "</table ";
echo $form;
print_r ($_SERVER);
