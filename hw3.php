<?php
$item_cost = $_POST["item_cost"];
$discount = 0.0;
$discount_price = 0.0;

If ($item_cost<=10) {
	$discount = 10;
}
else {
	$discount=20;
	}

$discount_price = $item_cost * (100 - $discount) * 0.01;	

$item_cost_formatted = "$".number_format($item_cost, 2);
$discount_formatted = $discount."%";
$discount_price_formatted = "$".number_format($discount_price, 2);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Buncha kewl stuph</title>
<body>
<h1>Your Personalized Calculated Results</h1>

<label>Item Cost</label>
<span><?php echo $item_cost_formatted ?></span><br />

<label>Discount</label>
<span><?php echo $discount_formatted ?></span><br />

<label>Discount Price</label>
<span><?php echo $discount_price_formatted?></span><br />


</body>



</html>