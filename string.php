<?php 

$name = "juan";
var_dump($name);
echo $name[0] ."</br>";


$name = "Juan";
$message = <<<TEXT
Hola, $name.
Este es un mensaje de ejemplo.
Puedes usar "comillas dobles" y 'comillas simples'.
TEXT;

echo $message ."</br>";

$text = <<<'LABEL'
Este es un ejemplo de nowdoc.
No se interpretarán variables como $variable.
Tampoco funcionan las secuencias de escape como \n.
LABEL;

echo $text ."</br>";

$name = "Ana";

//AMBOS NECESITAN UNA ETIQUETA PARA PODER USARSE

// Heredoc se usa para texto más complejos que llevan varaibles etc
$heredoc = <<<EOT
Hola, $name.
Este es un ejemplo de heredoc.
EOT;

// Nowdoc solo se usa para texto literalmente
$nowdoc = <<<'EOT'
Hola, $name.
Este es un ejemplo de nowdoc.
EOT;

echo $heredoc ."</br>";
echo "\n";
echo $nowdoc ."</br>";
?>