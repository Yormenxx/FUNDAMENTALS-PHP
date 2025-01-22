<?php 
echo round(3.14159, 2);
echo ceil(4.3);
echo floor(4.8);


$number1 = 5.75;
$number2 = 2.25;

// Operaciones
$sum = $number1 + $number2;
$product = $number1 * $number2;

// Redondear
$rounded = round($sum, 2);

// Formatear
$formatted = number_format($product, 3);

echo "Suma: $sum\n";
echo "Producto (formateado): $formatted\n";
?>