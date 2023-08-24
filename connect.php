<?php
$aa=$_POST['username'];
$bb=$_POST['course'];
$cc=$_POST['email'];
$dd=$_POST['password'];
mysql_connect("localhost","root","");
mysql_select_db("data1");
$query="INSERT INTO registration VALUES('$aa','$bb','$cc','$dd')";
mysql_query($query);
echo "database update ho gaya";
?>
