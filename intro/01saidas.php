<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

$texto = "Echo de uma variavel";

echo "Olá Mundo <br>";

echo "<h3>{$texto}, depois desta virgula o texto foi adicionado 
no H3 e não na variável.</h3>";

echo '<span class="tag">' . $texto . '</span>'; 

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

$usuario = "Maria Clara";
print("<h1>Olá Mundo</h1>");
print "<h2>Olá Mundo</h2>";
print "<h3>Hello, " . " World!</h3>";
print "<h4>Olá: " . "{$usuario}</h4>";


/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);


/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);