<?php

$con=mysql_connect("localhost","root","root");
if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
mysql_select_db('test', $con);
$sql = "select * from pizzas;";
$result = mysql_query($sql,$con);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
    $rows[] = $r;
}
print_r($rows);


?>
