<?php
    $nome = "vanessa";
    echo "<p>todas em maiusculo: ".strtoupper($nome)."<p/>";
    echo "<p>todas em mainusculo: ".strtolower($nome)."<p/>";
    echo "<p>Qtd de caracter string: ".strlen($nome)."<p/>";
    $posicao = strpos($nome, "e");
    echo "<p>Caractere E na posição: $posicao<p/>";

    $data = date("d");
    $hora = date("H:i:s");

    $valor = -10;
    echo "<p>Valor absoluto: ".abs($valor)."<p/>";
    $valor = 5.9;
    echo "<p>Valor arredondado: ".round($valor)."<p/>";
    $valor = rand(1, 100);
    echo "<p>Valor aleatorio: $valor<p/>";
    echo "<p>Raiz quadrada de 16: ".sqrt(16)."<p/>";
    $valor = 13.5;
    echo "<p>Valor formatado: R$ ". number_format($valor,2,",",".")."<p/>";

    function exibirSaudacao(){
        echo "<p>hello mundo<p/>";
    }
    exibirSaudacao();

    function exibirSauComNome($nome){
        echo"<p>Seja bem vindo $nome <p/>";
    }
    
    exibirSauComNome("Flavio");

    function menorValor($v1, $v2){
        return min($v1, $v2);
    }

    echo "menor valor entre 4 e 8:". menorValor(8,4);

    function somarValores(...$numeros){
        return array_sum($numeros);
    }
    $soma = somaValores(1,2,3,4);
    echo "<p> A soma dos valores é : $soma<p/>";