<div> 
<?php
 $prices=[120,130,150,130,100];
$prices[0]=50;
 $prices[]=200;
 $sum=0;
 for ($i=0;$i<count($prices);$i++){
if(isset($prices[$i])){
       $sum+=$prices[$i];
	   }
}
$avg=$sum/count($prices);
echo $avg;
?>
</div>