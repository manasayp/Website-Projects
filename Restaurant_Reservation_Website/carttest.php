<?php
error_reporting(0);
// mysqli
$sessid=session_id();

$mysqli = new mysqli("localhost", "dbscu", "desi123", "desi");
$sql = $mysqli->query("SELECT * FROM  cart where sessionid ='$sessid'  ");
print "<a href='menu.php?hotelname=$hotelid'>Continue Shopping</a>";
print "<table id='ctble' border='0' width='30%' align='center'>"; 
 while ($row = mysqli_fetch_assoc($sql)) {
	 
print "<form><tr>";

print"<td> ".$row['ctid']."</td>";
print"<td> ".$row['menuname']."</td>";
print"<td> ".$row['price']."</td>";
print"<td><input type='text' value='".$row['qty']."'> </td>";

print "</tr>";

    } 
	print "</form></table>";   
	
?>

<? mysqli_free_result($sql); ?>