<?
include 'connect.php';
$tpl = file_get_contents('block.tpl');
$result = mysqli_query($connect, "SELECT * FROM images");    
$amtrows = mysqli_num_rows($result);
echo $amtrows;
 while ($data = mysqli_fetch_assoc($result)){   
    $patterns = ['{filename}', '{numviews}'];
    $replace = [$data['filename'], $data['numviews']];
    echo preg_replace( $patterns, $replace, $tpl );
};

















