<?php
print "Total de rendimentos bancarios: ";

$rendbanc = trim(fgets(STDIN));

print "Total de rendimentos de salarios ou servicos: ";

$rendsala = trim(fgets(STDIN));

print "Total de outros rendimentos: ";

$rendoutros = trim(fgets(STDIN));

print "Servicos medicos pagos: ";

$servmedi = trim(fgets(STDIN));

print "Servicos educacionais pagos: ";

$serveduca = trim(fgets(STDIN));

$rendbanc = $rendbanc * 0.2;


if ($rendsala <= 8000) {
    $rendsala = 0;
} elseif ($rendsala <= 24000){
    $rendsala = rendsala * 0.15;
} else {
    $rendsala = rendsala * 0.20;
}

$rendoutros = $rendoutros * 0.10;

$valortot = ($rendsala + $rendoutros + $rendbanc);

$valormax = $valortot * 0.3;

$servtot = ($serveduca + $servmedi);

if ($valortot >= $valormax) {
    $resultado = $valortot;
} else{
    $resultado = $valormax;
}


print "Total de impostos:\n".
	   "R$   ".number_format($rendbanc, 2, ',', ' ')."  (sobre rendimentos bancarios)\n".
	   "R$   ".number_format($rendsala, 2, ',', ' ')."  (sobre salarios servicos)\n".
	   "R$   ".number_format($rendoutros, 2, ',', ' ')."  (sobre outros rendimentos) \n".
	   "R$   ".number_format($valortot, 2, ',', ' ')."  (total)\n".
	   "--------------------------------------------------------\n".
	   "Maximo a ser abatido:\n".
	   "R$   ".number_format($valormax, 2, ',', ' ')."\n".
	   "--------------------------------------------------------\n".
	   "Total de valores possiveis de abater:\n".
	   "R$   ".number_format($servmedi, 2, ',', ' ')."  (servicos medicos)\n".
	   "R$   ".number_format($serveduca, 2, ',', ' ')."  (servicos educacionais) \n".
	   "R$   ".number_format($servtot, 2, ',', ' ')."  (total)\n".
	   "--------------------------------------------------------\n".
	   "Imposto total:\n".
	   "R$   ".number_format($valortot, 2, ',', ' ')."  (imposto bruto)\n".
	   "R$   ".number_format($valormax, 2, ',', ' ')."  (abatimentos) \n".
	   "R$   ".number_format($resultado, 2, ',', ' ')."  (total)\n";
	   ?> 