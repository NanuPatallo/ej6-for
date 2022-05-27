<?php
/*Mostrar la tabla de multiplicar del 2, utilizando un for (Hasta el numero 20).
Se debe mostrar al similar a lo siguiente.
2 * 1 = 2
2 * 2 = 4
2 * 3 = 6
...................*/

echo 'Tabla de Multiplicar del 2: ';

echo '<hr>';

for ($i = 0; $i < 21; $i++) {
    $rltdo = 2 * $i;
    echo '2 * ' . $i . ' = ' . $rltdo;
    echo '<hr>';
}
