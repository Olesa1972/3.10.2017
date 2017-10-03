<div> 
<?php
 $prices=[120,130,150,130,20];
 $max=0;
 foreach($prices as $price){
 if ($max<$price){
	 $max=$price;
 }
 }
echo $max;
?>
</div>