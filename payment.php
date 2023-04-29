<html>
<body>

<?php
echo "<p><center>";
echo "<img src='Screenshot 2023-04-28 185336.png' height=300 width=600></img>";
echo "</center></p>";

if($_GET["what"]=="Phone Pe" || $_GET["what"]=="Paytm" ){
echo "<fieldset>";
echo "<font size='+2'>";
echo "<b><u>";
echo "UPI ID:";
echo "</u></b>";
echo "</font>";
echo "<form action='final.php' method='POST'>";
echo "<br>";

echo "<table>";
echo "<tr>";
echo "<td>";
echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShy_5ztvlQ86MlTZcQdt0foo-GpdmNLeqb1n8C4y2zS9xP5X8TEaedJV4MqWuBGnu4eLk&usqp=CAU' height='40px' width='70px'>";
echo "</td>";
echo "<td>";
echo "<input type='text' name='upi' required placeholder='Enter your UPI ID'>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</br>";

echo "<font size='+2'>";
echo "<b><u>";
echo "PIN:";
echo "</u></b>";
echo "</font>";
echo "<table>";
echo "<tr>";
echo "<td>";
echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShy_5ztvlQ86MlTZcQdt0foo-GpdmNLeqb1n8C4y2zS9xP5X8TEaedJV4MqWuBGnu4eLk&usqp=CAU' height='40px' width='70px'>";
echo "</td>";
echo "<td>";
echo "<input type='password' name='upi'required placeholder='Enter your pin' maxlength='5' required>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</br>";

$file=fopen("amount.txt","r");
$a=fgets($file);
echo "<font size='+1' color='green'>";
echo "<b>";
echo "TOTAL AMOUNT=$a";
echo "</b>";
echo "</font>";
echo "</br>";
echo "</br>";
echo "<input type='submit' value='Place Your Order!'style='height:50px;width:200px;background-color:orange; color:white; font-size:larger;'>";
echo "</form>";
fclose($file);
echo "</fieldset>";
}

else if($_GET["what"]=="Credit/Debit Card"){
echo "<fieldset>";
echo "<font size='+2'>";
echo "<b><u>";
echo "CREDIT/DEBIT CARD NUMBER:";
echo "</u></b>";
echo "</font>";
echo "<form action='final.php' method='POST'>";
echo "<br>";
echo "<table>";
echo "<tr>";
echo "<td>";
echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShy_5ztvlQ86MlTZcQdt0foo-GpdmNLeqb1n8C4y2zS9xP5X8TEaedJV4MqWuBGnu4eLk&usqp=CAU' height='40px' width='70px'>";
echo "</td>";
echo "<td>";
echo "<input type='text' name='card' placeholder='Enter your card number' maxlength='16' required>";
echo "</td>";
echo "</tr>";
echo "</table></br>";

echo "<font size='+2'>";
echo "<b><u>";
echo "CVV NUMBER:";
echo "</u></b>";
echo "</font>";
echo "<table>";
echo "<tr>";
echo "<td>";
echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShy_5ztvlQ86MlTZcQdt0foo-GpdmNLeqb1n8C4y2zS9xP5X8TEaedJV4MqWuBGnu4eLk&usqp=CAU' height='40px' width='70px'>";
echo "</td>";
echo "<td>";
echo "<input type='password' name='card'required placeholder='Enter your CVV' maxlength='3' required>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</br>";

$file=fopen("amount.txt","r");
$a=fgets($file);
echo "<font size='+1' color='green'>";
echo "<b>";
echo "TOTAL AMOUNT=$a";
echo "</b>";
echo "</font>";
echo "</br>";
echo "</br>";
echo "<input type='submit' value='Place Your Order!'style='height:50px;width:200px;background-color:orange; color:white; font-size:larger;'>";
echo "</form>";
fclose($file);
echo "</fieldset>";
}
else{
echo "<fieldset>";
$file=fopen("amount.txt","r");
$a=fgets($file);
echo "<font size='+2'>";
echo "<b><u>";
echo "CASH ON DELIVERY:";
echo "</u></b>";
echo "</font><br><br>";
echo "<font size='+1' color='green'>";
echo "<b>";
echo "TOTAL AMOUNT=$a";
echo "</b>";
echo "</font>";
echo "</br>";
echo "</br>";
echo "<form action='final.php' method='POST'>";
echo "<input type='submit' value='Place Your Order!'style='height:50px;width:200px;background-color:orange; color:white; font-size:larger;'>";
echo "</form>";
fclose($file);
echo "</fieldset>";
}

?>
</body>
</html>