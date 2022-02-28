PHP 8 testing base

Run: composer install

-El primer if sirve para tener en cuenta la condición de introducir separadores personalizados, y completar así el test de los custom_separator.
Como siempre empezamos por // en ese caso, lo que hacemos es acortar con la funcion substr desde donde empieza la operación en si hasta el final del string introducido.
Una vez hecho eso, sustituimos los separadores customizados por comas y llamamos a la propia función add pero pasándole el string input utilizando comas como separadores.

-El else if de ~~~~debajo se basa en devolver un cero cuando el string introducido está vacío (primer test)

-El siguiente else if checkea si el string No tiene comas para entonces devolver el único número introducido(segundo test)

-Después viene un else que incluye varios casos:
    -El caso en el que se encuentran números negativos y hay que devolver el mensaje de error correspondiente
    -El caso en el que se suman los elementos de manera correcta

Todo esto viene precedido por una función preg_split que separa el string de entrada por los caracteres '\n' y ',' , formando así un array de varias posicioners.

Tengo que decir que no me ha dado tiempo a implementar el paso de Multiple Errors, porque durante el finde no pude trabajar porque no supe configurar mi entorno de trabajo sin las capturas y durante el día de hot (lunes) he tenido varios problemas con la máquina virtual.
También me gustaría haber repasado el código y separado igual por funciones, aunque creo que he usado algunas funciones propias de php que hacen que el código no sea del todo largo ni complejo.