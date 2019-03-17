 <?
 $server = "localhost";
 $login = "root";
 $pass = "Q123";
 $db = "Lesson05";

 $connect = mysqli_connect ($server, $login,$pass,$db);
 $dblink = mysqli_connect($server, $login, $pass, $db);
 

if($dblink)

echo 'Соединение установлено.';

else

die('Ошибка подключения к серверу баз данных.');
