<?php


// Multiplica dois números e divide o resultado por um terceiro número.
// Retorna "Grande" se o resultado for maior que 100, senão retorna "Pequeno".

function calcularProporcao($multiplicando, $multiplicador, $divisor) {
    $produto= $multiplicando * $multiplicador; // Multiplica os dois primeiros números
    $resultado= $produto / $divisor; // Divide pelo terceiro número
    
    // Verifica se o resultado é maior que 100 e retorna o texto correspondente
    if ($resultado > 100) {
        return "Grande";
    } else {
        return "Pequeno";
    }
}

// Gerar três números aleatórios
$numero1= rand(1, 150);
$numero2= rand(2, 150);
$numero3= rand(3, 150);

// Chamar a função e exibir o resultado
$resultado1 = calcularProporcao($numero1, $numero2, $numero3);
echo "Resultado: " . $resultado1 . "<br>";

// Gerar outro conjunto de números aleatórios
$valor1= rand(5, 150);
$valor2= rand(3, 150);
$valor3= rand(2, 150);

// Chamar a função novamente e exibir o segundo resultado
$resultado2 = calcularProporcao($valor1, $valor2, $valor3);
echo "Resultado 2: " . $resultado2;
echo "hahahah";

// Soma dois números e verifica se a soma é par ou ímpar.
// Retorna "Par" se a soma for par, senão retorna "Ímpar".
 
function verificarParidade($primeiroNumero, $segundoNumero) {
    $soma= $primeiroNumero + $segundoNumero; // Soma os dois números
    
     // Verifica se a soma é par ou ímpar
    if ($soma % 2 === 0) {
        return "Par";
    } else {
        return "Ímpar";
    }
}

// Gerar dois números aleatórios
$numeroA= rand(10, 30);
$numeroB= rand(5, 20);

// Chamar a função e exibir o resultado
$resultadoSoma= verificarParidade($numeroA, $numeroB);
echo "<br>Resultado da soma: " . $resultadoSoma;
?>
