<html>
<body>

<?php
$file=fopen('temp.txt','r');
$r=fgets($file);
$tc=0;
$ic=0;

if($r=="Mc Donald's")
{
	echo "<table>";
	echo "<tr><th>Item Name</th>";
	echo "<th>Quantity</th>";
	echo "<th>Cost</th></tr>";
	for($i=1;$i<=6;$i++)
	{
		$quan=$_GET['num'.$i];
		if($quan>0)
		{
		switch($i)
		{
		case 1:$ic=58;
		$n="Aloo Tikki Burger";
		break;
		case 2:$ic=50;
		$n="Mc Puff Pizza";
		break;
		case 3:
		switch($_GET['what'])
		{
		case 'L':$ic=120;
		$n="Fries(Large)";
		break;
		case 'M':$ic=109;
		$n="Fries(Medium)";
		break;
		case 'R':$ic=70;
		$n="Fries(Regular)";
		break;		
		}
		break;
		case 4:$ic=90;
		$n="Coke";
		break;
		case 5:$ic=145;
		$n="Mc Veggie Burger";
		break;
		case 6:$ic=91;
		$n="Mc Flurry Float";
		break;
		}
			
			echo "<tr>";
			echo "<td>".$n."</td>";
			echo "<td>".$quan."</td>";
			echo "<td>".($quan*$ic)."</td>";
			echo "</tr>";			
			$tc=$tc+($quan*$ic);
		}
	}
	echo "<tr><td><b>Total Cost: </b></td>";
	echo "<td>".$tc."</td></tr>";
	echo "</table>";
}

else if($r=="Pizza Hut")
{
	echo "<table>";
	echo "<tr><th>Item Name</th>";
	echo "<th>Quantity</th>";
	echo "<th>Cost</th></tr>";
	for($i=1;$i<=8;$i++)
	{
		$quan=$_GET['num'.$i];
		if($quan>0)
		{
		switch($i)
		{
		case 1:
		if($_GET['what1']=='PER')
		{
		$ic=129;
		$n="Margherita(PER)";
		}
		else if($_GET['what1']=='MED')
		{
		$ic=279;
		$n="Margherita(MED)";
		}
		switch($_GET['cust1'])
		{
		case "1":
		$ic=$ic+0;
		$n=$n." (Pan Crust)";
		break;
		case "2":
		$ic=$ic+75;
		$n=$n." (Cheese Maxx)";
		break;
		case "3":
		$ic=$ic+99;
		$n=$n." (Kebab Crust)";
		break;
		}
		break;
		case 2:
		if($_GET['what2']=='PER')
		{
		$ic=189;
		$n="Corn & Cheese(PER)";
		}
		else if($_GET['what2']=='MED')
		{
		$ic=379;
		$n="Corn & Cheese(MED)";
		}
		switch($_GET['cust2'])
		{
		case "1":
		$ic=$ic+0;
		$n=$n." (Pan Crust)";
		break;
		case "2":
		$ic=$ic+75;
		$n=$n." (Cheese Maxx)";
		break;
		case "3":
		$ic=$ic+99;
		$n=$n." (Kebab Crust)";
		break;
		}
		break;
		case 3:
		if($_GET['what3']=='PER')
		{
		$ic=239;
		$n="Veggie Tandoori(PER)";
		}
		else if($_GET['what3']=='MED')
		{
		$ic=449;
		$n="Veggie Tandoori(MED)";
		}
		switch($_GET['cust3'])
		{
		case "1":
		$ic=$ic+0;
		$n=$n." (Pan Crust)";
		break;
		case "2":
		$ic=$ic+75;
		$n=$n." (Cheese Maxx)";
		break;
		case "3":
		$ic=$ic+99;
		$n=$n." (Kebab Crust)";
		break;
		}
		break;
		case 4:
		if($_GET['what4']=='PER')
		{
		$ic=289;
		$n="Farmer's Pick(PER)";
		}
		else if($_GET['what4']=='MED')
		{
		$ic=529;
		$n="Farmer's Pick(MED)";
		}
		switch($_GET['cust4'])
		{
		case "1":
		$ic=$ic+0;
		$n=$n." (Pan Crust)";
		break;
		case "2":
		$ic=$ic+75;
		$n=$n." (Cheese Maxx)";
		break;
		case "3":
		$ic=$ic+99;
		$n=$n." (Kebab Crust)";
		break;
		}
		break;
		case 5:
		if($_GET['what5']=='PER')
		{
		$ic=289;
		$n="Country Feast(PER)";
		}
		else if($_GET['what5']=='MED')
		{
		$ic=529;
		$n="Country Feast(MED)";
		}
		switch($_GET['cust5'])
		{
		case "1":
		$ic=$ic+0;
		$n=$n." (Pan Crust)";
		break;
		case "2":
		$ic=$ic+75;
		$n=$n." (Cheese Maxx)";
		break;
		case "3":
		$ic=$ic+99;
		$n=$n." (Kebab Crust)";
		break;
		}
		break;
		case 6:
		if($_GET['what6']=='PER')
		{
		$ic=349;
		$n="Veg Kebab Surprise(PER)";
		}
		else if($_GET['what6']=='MED')
		{
		$ic=599;
		$n="Veg Kebab Surprise(MED)";
		}
		switch($_GET['cust6'])
		{
		case "1":
		$ic=$ic+0;
		$n=$n." (Pan Crust)";
		break;
		case "2":
		$ic=$ic+75;
		$n=$n." (Cheese Maxx)";
		break;
		case "3":
		$ic=$ic+99;
		$n=$n." (Kebab Crust)";
		break;
		}
		break;
		case 7:$ic=119;
		$n="Zesty Paneer Pocket";
		break;
		case 8:$ic=119;
		$n="Masala Lemonade";
		break;
		}	
			echo "<tr>";
			echo "<td>".$n."</td>";
			echo "<td>".$quan."</td>";
			echo "<td>".($quan*$ic)."</td>";
			echo "</tr>";			
			$tc=$tc+($quan*$ic);
		}
	}
	echo "<tr><td><b>Total Cost: </b></td>";
	echo "<td>".$tc."</td></tr>";
	echo "</table>";
}

else if($r=="Xero Degrees")
{
	echo "<table>";
	echo "<tr><th>Item Name</th>";
	echo "<th>Quantity</th>";
	echo "<th>Cost</th></tr>";
	for($i=1;$i<=7;$i++)
	{
		$quan=$_GET['num'.$i];
		if($quan>0)
		{
		switch($i)
		{
		case 1:$ic=169;
		$n="Super Veggie Burger";
		break;
		case 2:$ic=199;
		$n="X-Veg Burger";
		break;
		case 3:$ic=179;
		$n="Pizza in a jar";
		break;
		case 4:$ic=209;
		$n="Xero Steam Dumplings";
		break;
		case 5:$ic=189;
		$n="Choco Fudge Waffle";
		break;
		case 6:
		switch($_GET['cust1'])
		{
		case '1':$ic=190;
		$n="Lemon Ice Tea";
		break;
		case '2':$ic=190;
		$n="Peach Ice Tea";
		break;
		case '3':$ic=190;
		$n="Ocean Blue Cooler";
		break;
		case '4':$ic=190;
		$n="Cucumber Mint Cooler";
		break;
		}
		break;
		case 7:
		switch($_GET['cust2'])
		{
		case '1':$ic=249;
		$n="Choco Brownie Shake";
		break;
		case '2':$ic=249;
		$n="Kitkat Shake";
		break;
		case '3':$ic=249;
		$n="Red Velvet Shake";
		break;
		case '4':$ic=249;
		$n="Popcorn Caramel Shake";
		break;
		}
		break;
		}
			
			echo "<tr>";
			echo "<td>".$n."</td>";
			echo "<td>".$quan."</td>";
			echo "<td>".($quan*$ic)."</td>";
			echo "</tr>";			
			$tc=$tc+($quan*$ic);
		}
	}
	echo "<tr><td><b>Total Cost: </b></td>";
	echo "<td>".$tc."</td></tr>";
	echo "</table>";
}

else if($r=="Monginis")
{
	echo "<table>";
	echo "<tr><th>Item Name</th>";
	echo "<th>Quantity</th>";
	echo "<th>Cost</th></tr>";
	for($i=1;$i<=10;$i++)
	{
		$quan=$_GET['num'.$i];
		if($quan>0)
		{
		switch($i)
		{
		case 1:$ic=400;
		$n="Cassata Regular Cakes";
		break;
		case 2:$ic=450;
		$n="Dutch Chocolate Regular Cakes";
		break;
		case 3:$ic=450;
		$n="Fruit Delight Regular Cakes";
		break;
		case 4:$ic=90;
		$n="Premium vanilla Cream Roll";
		break;
		case 5:$ic=80;
		$n="Veg Hot Dog";
		break;
		case 6:$ic=325;
		$n="Vanilla Small Cake";
		break;
		case 7:$ic=40;
		$n="choco Bomb Pastry";
		break;
		case 8:$ic=60;
		$n="Fruit Toast";
		break;
		case 9:$ic=40;
		$n="Dark Bar Chocolate";
		break;
		case 10:$ic=40;
		$n="Red Vel Mousse Cake";
		break;
		
		}
			
			echo "<tr>";
			echo "<td>".$n."</td>";
			echo "<td>".$quan."</td>";
			echo "<td>".($quan*$ic)."</td>";
			echo "</tr>";			
			$tc=$tc+($quan*$ic);
		}
	}
	echo "<tr><td><b>Total Cost: </b></td>";
	echo "<td>".$tc."</td></tr>";
	echo "</table>";
}

else if($r=="Domino's Pizza")
{
	echo "<table>";
	echo "<tr><th>Item Name</th>";
	echo "<th>Quantity</th>";
	echo "<th>Cost</th></tr>";
	for($i=1;$i<=10;$i++)
	{
		$quan=$_GET['num'.$i];
		if($quan>0)
		{
		switch($i)
		{
		case 1:$ic=95;
		$n="Golden Corn";
		break;
		case 2:$ic=75;
		$n="Onion";
		break;
		case 3:
		if($_GET['what1']=='S')
		{
		$ic=149;
		$n="Corn n Cheese Paratha Pizza(S)";
		}
		else if($_GET['what1']=='M')
		{
		$ic=229;
		$n="Corn n Cheese Paratha Pizza(M)";
		}
		else
		{
		$ic=349;
		$n="Corn n Cheese Paratha Pizza(L)";
		}
		break;
		case 4:
		if($_GET['what2']=='S')
		{
		$ic=200;
		$n="Paneer Paratha Pizza(S)";
		}
		else if($_GET['what2']=='M')
		{
		$ic=350;
		$n="Paneer Paratha Pizza(M)";
		}
		else
		{
		$ic=550;
		$n="Paneer Paratha Pizza(L)";
		}
		break;
		case 5:$ic=59;
		$n="Tomato";
		break;
		case 6:$ic=115;
		$n="Cheesy";
		break;
		case 7:
		if($_GET['what3']=='S')
		{
		$ic=249;
		$n="Peppy Paneer Pizza(S)";
		}
		else if($_GET['what3']=='M')
		{
		$ic=389;
		$n="Peppy paneer Pizza(M)";
		}
		else
		{
		$ic=649;
		$n="Peppy Paneer Pizza(L)";
		}
		break;
		case 8:$ic=115;
		$n="Garlic Bread Sticks";
		break;
		case 9:$ic=145;
		$n="Choco Lava Cake";
		break;
		case 10:$ic=103;
		$n="Butterscotch Mousse Cake";
		break;
		}	
			echo "<tr>";
			echo "<td>".$n."</td>";
			echo "<td>".$quan."</td>";
			echo "<td>".($quan*$ic)."</td>";
			echo "</tr>";			
			$tc=$tc+($quan*$ic);
		}
	}
	echo "<tr><td><b>Total Cost: </b></td>";
	echo "<td>".$tc."</td></tr>";
	echo "</table>";
}

else if($r=="Saffron")
{
	echo "<table>";
	echo "<tr><th>Item Name</th>";
	echo "<th>Quantity</th>";
	echo "<th>Cost</th></tr>";
	for($i=1;$i<=9;$i++)
	{
		$quan=$_GET['num'.$i];
		if($quan>0)
		{
		switch($i)
		{
		case 1:$ic=300;
		$n="Shahi Kofta";
		break;
		case 2:$ic=305;
		$n="Kadhai Paneer";
		break;
		case 3:$ic=289;
		$n="Paneer Masala";
		break;
		case 4:$ic=320;
		$n="Palak Kofta";
		break;
		case 5:$ic=275;
		$n="Dal Tadka";
		break;
		case 6:$ic=295;
		$n="Dal Makhani";
		break;
		case 7:$ic=300;
		$n="Veg Jalfrezi";
		break;
		case 8:$ic=50;
		$n="Tandoori Roti";
		break;
		case 9:$ic=60;
		$n="Butter Naan";
		break;
		}
			
			echo "<tr>";
			echo "<td>".$n."</td>";
			echo "<td>".$quan."</td>";
			echo "<td>".($quan*$ic)."</td>";
			echo "</tr>";			
			$tc=$tc+($quan*$ic);
		}
	}
	echo "<tr><td><b>Total Cost: </b></td>";
	echo "<td>".$tc."</td></tr>";
	echo "</table>";
}
?>

</body>
</html>