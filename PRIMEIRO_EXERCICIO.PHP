<?php
print "Qual o sexo do cliente? ";

$sexo = trim(fgets(STDIN));

print "Quantas cervejas foram consumidas? ";

$qtdcervejas = trim(fgets(STDIN));

print "Quantos refrigerantes foram consumidos? ";

$qtdrefri = trim(fgets(STDIN));

print "Quantos espetinhos foram consumidos? ";

$qtdespetinhos = trim(fgets(STDIN));

if ($sexo == "F") {
    $valorbasico = 8;
} elseif ($sexo == "H"){
    $valorbasico = 10;
} else {
	$valorbasico = 0;
}

$vlrcomidabebida = (($qtdcervejas * 2.5)+ ($qtdrefri * 2) + ($qtdespetinhos * 4));

if ($vlrcomidabebida >= 15) {
    $cantores = 0;
} else{
   $cantores = 3;
}

$valortot = ($valorbasico + $vlrcomidabebida + $cantores);


$valortotfinal = ($valorbasico + $vlrcomidabebida + $cantores)*1.1;


print "Valor da conta:\n".
	   "R$   ".number_format($valorbasico, 2, ',', ' ')."  (valor básico)\n".
	   "R$   ".number_format($vlrcomidabebida, 2, ',', ' ')."  (bebida e comida)\n".
	   "R$   ".number_format($cantores, 2, ',', ' ')."  (cantores)\n".
	   "R$   ".number_format($valortot, 2, ',', ' ')."  (subtotal sem 10%)\n".
	   "--------------------------------------------------------\n".
	   "R$   ".number_format($valortotfinal, 2, ',', ' ')."  (total)\n";
?> 







