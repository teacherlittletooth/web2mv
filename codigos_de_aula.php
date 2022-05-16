<?php

$num1 = 99.9;
$num2 = 99;
$nome = "Ruan";
$sobrenome = "Carlos";

// Operadores aritméticos (+ - * /)
var_dump($num1);
var_dump($nome);

$resultSoma = ($num1 + $num2);
$resultSubtrai = ($num1 - $num2);
$resultMultiplica = ($num1 * $num2);
$resultDivide = ($num1 / $num2);

$n1 = 5.9;
$n2 = 7.5;

$media = ($n1 + $n2) / 2;

echo "<br>" . $resultSoma;
echo "<br>" . $resultSubtrai;
echo "<br>" . $resultMultiplica;
echo "<br>" . $resultDivide;
echo "<br>Média: " . $media;

// Operadores relacionais - de comparação
// "igual" ==
// "diferente" !=
// "maior" >
// "menor" <
// "maior igual" >=
// "menor igual" <=

echo "<hr>";

var_dump($num1 == $num2);
echo "<br>";
var_dump($num1 > $num2);
echo "<br>";
var_dump($num1 <= $num2);
echo "<br>";
var_dump($num1 != $num2);

// Operadores lógicos
// AND ==> &&, and
// OR ==> ||, or
// NOT ==> !, not
// XOR ==> xor

echo "<hr>";

var_dump(
    ($nome == $sobrenome) || (strlen($nome) > 2)
    && ($num1 == 0)
);

// Condicionais (if/ elseif/ else)

echo "<hr>";

$contaCaracteres = (strlen($nome) + strlen($sobrenome));

if($contaCaracteres > 10) {
    print("A soma dos caracteres é maior que 10.");
} elseif($contaCaracteres < 10) {
    print("A soma dos caracteres é menor que 10.");
} else {
    print("A soma dos caracteres é exatamente 10.");
}

echo "<hr>";

$sinal = random_int(1, 3);

if($sinal == 1) {
    echo "<h3 style='background-color: green'>Siga em frente!</h3>";
} elseif($sinal == 2) {
    echo "<h3 style='background-color: yellow'>ATENÇÃO!</h3>";
} else {
    echo "<h3 style='background-color: red'>PARE!</h3>";
}

echo "<hr>";

define('PAIS_DE_ORIGEM', 'França');
define('ESTADO_DE_ORIGEM', 'Córsega');

echo PAIS_DE_ORIGEM ."<br>".ESTADO_DE_ORIGEM;

echo "<hr>";

//Laços de repetição
//FOR = início; condição; incremento
for($i = 1; $i < 10; $i++) {
    echo "5 x $i = " . (5 * $i) . "<br>";
}

echo "<hr>";

//WHILE = condição
$go = true;
$count = 0;

while($go) {
    echo $count . " | ";
    $count += 2;
    if($count > 100) {
        $go = !$go;
    }
}

echo "<hr>";
// FOREACH = lista "as" referência

$paises = [
    "Alemanha",
    "Espanha",
    "Holanda",
    "Brasil",
    "Argentina",
    "Bélgica",
    "Camarões",
    "Nigéria",
    "Japão",
    "Inglaterra",
    "Honduras",
    "China",
    "Nova Zelândia"
];

//echo $paises[5] . "<br>";

foreach($paises as $paisDaVez) {
    echo $paisDaVez . "<br>";
}

echo "<hr>";

for($i = 0; $i < count($paises); $i++) {
    echo $paises[$i] . " / ";
}