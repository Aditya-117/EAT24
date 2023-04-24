<html>
    <head>
        <title>Mc Donalds</title>
        </head>
        <body>

            <b><font size="+7" color="red">Mc Donald's</font></b>       
<h2>Aloo Tikki Burger</h2>
<table>
<tr>
<td><img src="https://mcdonaldsblog.in/wp-content/uploads/2018/04/McAloo-tikki.jpg" height="100" width="100" ></img></td>
	<form action="Cart.php" method="GET"></br>
	<td><b><font size="+1"color="green">ADD: </front></b></td>
	<td><input type="number" name="num1" min="0" value="ADD" style="height:20px;width:70px" ></td>
</tr>
</table>
<fieldset>
<b><font size="+1" color="green">Rs58</font></b>
</fieldset>
	</br>
          

            <h2>Mc Puff</h2>
<table>
<tr>
            <td><img src="https://scontent.fdel29-1.fna.fbcdn.net/v/t31.18172-8/15724722_1192618047458763_1500712067629883225_o.jpg?stp=cp0_dst-jpg_e15_p240x240_q65&_nc_cat=106&ccb=1-7&_nc_sid=2d5d41&_nc_ohc=Mw40CjOW6JUAX_S-sYo&_nc_ht=scontent.fdel29-1.fna&oh=00_AfBpnenbLHoV58iBmD3rVLMryQPA_dI-v8vetr6UDlBcng&oe=646629D5" height="100" width="100"></td>
	
	</br>
		<td><b><font size="+1"color="green">ADD: </front></b></td>
	<td><input type="number" name="num2" min="0" style="height:20px;width:70px"></br></td>
</tr>
</table>
<fieldset>
<b><font size="+1" color="green">Rs50</font></b>
</fieldset>
	</br>

		<h2>Fries</h2>
<table>
<tr>
	 	<td><img src="https://th.bing.com/th/id/OIP.rx4Ijpkxn3-qN6VcANpllAHaFu?pid=ImgDet&rs=1" height="100" width="100"></br></td>
		<td><b><font size="+1"color="green">ADD: </front></b></td>
		<td><input type="number" name="num3" min="0" style="height:20px;width:70px"></td>
</tr>
</table>
<fieldset>
		<input type="radio" name="what" value="L"><b><font size="+1"color="green">Rs120(L)</font></b>
		<input type="radio" name="what" value="M" ><b><font size="+1"color="green">Rs109(M)</font></b>
		<input type="radio" name="what" value="R" ><b><font size="+1"color="green">Rs70(R)</font></b>
	
</fieldset>

	
<h2>Coke</h2>
<table>
<tr>
<td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRst_ki8Wpm8HvbMw2FfLZ4mXDmaBq3JGeP3w&usqp=CAU height="100" width="100" ></img></td>
	</br>
	<td><b><font size="+1"color="green">ADD: </front></b></td>
	<td><input type="number" name="num4" min="0" style="height:20px;width:70px"></td>
</tr>
</table>

<fieldset>
<b><font size="+1" color="green">Rs90</font></b>

</fieldset>

</br>

<h2>Mc Veggie Burger</h2>
<table>
<tr>
<td><img src="https://mcdonaldsblog.in/wp-content/uploads/2021/08/McVeggie-burger-1.jpg" height="100" width="100" ></img></td>
</br>
	<td><b><font size="+1"color="green">ADD: </front></b></td>
	<td><input type="number" name="num5" min="0" style="height:20px;width:70px"></td>
</tr>
</table>

<fieldset>
<b><font size="+1" color="green">Rs145</font></b>
</fieldset>
	</br>

<h2>Mc Flurry Oreo</h2>
<table>
<tr>
<td><img src="https://lh3.googleusercontent.com/a3RNN5zxT39dWz_Qcx7HpqLvhST9riLXj0CU-FCvkZvQ_g91Ko5iCfirPXydtDl-YCQx9LXqwW7lCXJ4FOPibg3DqsDF5Gi2fn0MPnfD=w512-rw" height="100" width="100" ></img></td>
	</br>
	<td><b><font size="+1"color="green">ADD: </front></b></td>
	<td><input type="number" name="num6" min="0" style="height:20px;width:70px"></td>
</tr>
</table>
<fieldset>
<b><font size="+1" color="green">Rs91</font></b>
</fieldset>
<br>
<br>
<?php
$file=fopen('temp.txt','w');
fwrite($file,"Mc Donald's");
fclose($file);
?>
<input type="submit" value="ADD TO CART" style="height:50px;width:200px;color:green">
		</form></br>

             </body>
</html>
