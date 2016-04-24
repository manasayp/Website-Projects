<?php
$hname= $_GET['hotelname'];
echo $hname;
$mysqli = new mysqli("localhost", "dbscu", "desi123", "desi");
    // set the PDO error mode to exception
	$sql = $mysqli->query("SELECT menuname, price FROM  menu where hotelname='$hname'");
	
	//$the_array = objectToArray($sql);
 //print_r($the_array);
	
  
  

	
    echo "Connected successfully"; 
	while ($row = mysqli_fetch_assoc($sql)) {
		
		print "<ol class='ui-list shopping-cart--list' id='shopping-cart--list'>";

     
        print "<li class='_grid shopping-cart--list-item'>";
          print "<div class='_column product-image'>";
           
          print "</div>";
          print "<div class='_column product-info'>";
            print "<h4 class='product-name'>".$row['menuname']."</h4>";
            
            print "<div class='price product-single-price'>".$row['price']."</div>";
          print "</div>";
          print "<div class='_column product-modifiers' data-product-price='".$row['price']."}'>";
            print "<div class='_grid'>";
              print "<button class='_btn _column product-subtract'>&minus;</button>";
              print "<div class='_column product-qty'>0</div>";
              print "<button class='_btn _column product-plus'>&plus;</button>";
            print "</div>";
            print "<button class='_btn entypo-trash product-remove'>Remove</button>";
            print "<div class='price product-total-price'>$0.00</div>";
          print "</div>";
        print "</li>";
    print "</ol>";

		}
	
	
    
?>
