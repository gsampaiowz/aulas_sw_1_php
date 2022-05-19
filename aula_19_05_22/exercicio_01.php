<?php
$mes = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
$numeroMes = 1;
if($numeroMes<1 || $numeroMes>12){
    echo "Você não digitou um número inválido"
}
echo $mes[$numeroMes - 1]
?>