<?
$host= "localhost"; //These 7 lines to connect to database
$user= "root";
$pass= "";
$db="law_enforcement";

$connect= mysql_connect($host,$user,$pass);
if (!$connect)die ("Cannot connect!");
mysql_select_db($db, $connect);

$file = fopen("criminal.txt","r");  // Open the txt file for reading

while(! feof($file))
{
$line = fgets($file);
$sql = "INSERT INTO criminal VALUES ('$line')"; //Insert every read line from txt to mysql database
mysql_query($sql);
}
fclose($file);
?>