<div> 
<?php
 $prices=[120,130,150,130,20];
 $maxindex=-1;
 $max=0;
 foreach($prices as $index=>$price){
 if ($max<$price){
	 $max=$price;
	 $maxindex=$index;
 }
 }
echo "max элемент № $index равен $max";
?>
</div>