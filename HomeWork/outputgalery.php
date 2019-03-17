<?
include 'connect.php';
$tpl = file_get_contents('block.tpl');
$result = mysqli_query($connect, "SELECT * FROM `images` ORDER BY `images`.`numviews` DESC");
while ($data = mysqli_fetch_assoc($result)){   
    $patterns = ['{filename}', '{numviews}', '{idimage}'];
    $replace = [$data['filename'], $data['numviews'], $data ['id']];
    echo preg_replace( $patterns, $replace, $tpl );
};

















