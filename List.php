<html>
<body>

<p style="font-size:36px;"><b>Food Delivery	</b></p>
<p style="font-size:24px;">Your Address :
<?php
echo $_GET["add"]."</p><hr>";
echo "<h3>Showing restaurants near your location:-</h3>";
$fil=fopen('Restaurants.txt','r');
echo "<table>";
do
{
$l1=fgets($fil);
$l2=fgets($fil);
$l3=fgets($fil);
$l4=fgets($fil);
echo "<tr>";
echo '<td><img src="https://static.thenounproject.com/png/4084271-200.png" heigth=10 width=10></img></td>';
echo "<td><img src=".$l2."height=120 width=150></img></td>";
echo "<td><a href=$l3><b><font size='+2'>".$l1."</font></b></a></td>";
echo "<td>&nbsp;&nbsp;".$l4."</td>";
echo "</tr>";
}
while(!feof($fil));
echo "</table>";
echo "<br>";
fclose($fil);
?>


</body>
</html>
