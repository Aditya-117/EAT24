<html>
<body>

<center><img src="Screenshot 2023-04-29 122949.png" height="180" width="600"></img></center>
<p style="font-size:30px;"><b>Your Address :</b>
<?php
echo $_POST["add"]."</p><hr>";
echo "<h2><u>Showing restaurants near your location:-</u></h2>";
$fil=fopen('Restaurants.txt','r');
echo "<table>";
do
{
$l1=fgets($fil);
$l2=fgets($fil);
$l3=fgets($fil);
$l4=fgets($fil);
echo "<tr>";
echo '<td><img src="https://static.thenounproject.com/png/4084271-200.png" heigth=20 width=20></img></td>';
echo "<td><img src=".$l2."height=120 width=180></img></td>";
echo "<td><a href=$l3><b><font size='+2'>".$l1."</font></b></a></td>";
echo "<td>"."&nbsp;&nbsp;".$l4."</td>";
echo "</tr>";
}
while(!feof($fil));
echo "</table>";
echo "<br>";
fclose($fil);
$fil=fopen('userdetails.txt','w');
fwrite($fil,$_POST['name']."\n");
fwrite($fil,$_POST['con']."\n");
fwrite($fil,$_POST['add']."\n");
fclose($fil);
?>


</body>
</html>
