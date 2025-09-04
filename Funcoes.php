<?php
    $nome = "vanessa";
    echo "<p>todas em maiusculo: ".strtoupper($nome)."</p>";
    echo "<p>todas em mainusculo: ".strtolower($nome)."</p>";
    echo "<p>Qtd de caracter string: ".strlen($nome)."</p>";
    $posicao = strpos($nome, "e");
    echo "<p>Caractere E na posição: $posicao</p>";

    $data = date("d");
    $hora = date("H:i:s");

    $valor = -10;
    echo "<p>Valor absoluto: ".abs($valor)."</p>";
    $valor = 5.9;
    echo "<p>Valor arredondado: ".round($valor)."</p>";
    $valor = round(1, 100);
    echo "<p>Valor aleatorio: $valor</p>";
    echo "<p>Raiz quadrada de 16: ".sqrt(16)."</p>";
    $valor = 13.5;
    echo "<p>Valor formatado: R$ ". number_format($valor,2,",",".")."</p>";