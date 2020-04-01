<?php
$discount_size = round(get_field('price_old') * get_field('discount_size')/100);
$discount_assembly = round(get_field('cost_assembly') * get_field('assembly_discount')/100);
echo $final_discount = $discount_size + $discount_assembly;
?>
