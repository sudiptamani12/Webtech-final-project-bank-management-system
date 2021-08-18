<?php
		require '../../controllers/customerController.php';

		$key=$_GET["key"];
	
		$customers = searchCustomer($key);
?>

<table>
	<?php
	
			foreach($customers as $customer)
                            {
                              
                                echo "<tr>";
                                echo "<td>".$customer["c_id"]."</td>";
                                echo "<td>".$customer["name"]."</td>";
                                echo "<td>".$customer["dob"]."</td>";
                                echo "<td>".$customer["age"]."</td>";
                                echo "<td>".$customer["mobile"]."</td>";
                                echo "<td>".$customer["address"]."</td>";
                                echo "<td>".$customer["email"]."</td>";
                                echo "<td>".$customer["gender"]."</td>";
                               
                                echo "</tr>";
                             
                                
                            }
		
	?>
</table>