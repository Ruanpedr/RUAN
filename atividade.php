<?php
$nota1 = 2; 
$nota2 = 12; 
$nota3 = 4; 
$nota4 = 7;
$resultado = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if ($resultado >= 7 && $resultado != 10) {
    $mensagem = "O aluno foi aprovado.";
} else {
    if ($resultado == 0) {
        $mensagem = "Estude mais, você não acertou nada.";
    } else {
        if ($resultado == 10) {
            $mensagem = "Parabéns! Aprovado com nota máxima.";
        } else {
            $mensagem = "O aluno foi reprovado.";
        }
    }
}


echo "Resultado: $resultado. $mensagem";
?>
