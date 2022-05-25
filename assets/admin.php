<?php

// Verificação da variável setada
if(isset($_GET['ordem'])) {
    $ordem = $_GET['ordem'];
}

if(isset($_GET['tipo'])) {
    $tipo = $_GET['tipo'];
}

$tipo = "nome";


$games["PUBG"] = 0.045;
$games["Counter-Strike: Global Offensive"] = 0.027;
$games["Call of Duty Warzone"] = 0.114;
$games["GTA IV"] = 0.101;
$games["ZULA"] = 0.021;
$games["Rocket League"] = 0.101;
$games["Scape From Tarkov"] = 0.087;
$games["The Last of Us"] = 0.197;
$games["Red Dead Redemption"] = 0.186;
$games["God of War"] = 0.071;
$games["Grand Theft Auto: San Andreas"] = 0.012;
$games["Forza Horizon 5"] = 0.035;
$games["Call of Duty 4: Modern Warfare"] = 0.076;
$games["Shadow of the Colossus - PS2"] = 0.009;
$games["Battlefield 2042"] = 0.049;
$games["Gran Turismo 3: A-Spec - PS2"] = 0.014;


// arsort, asort, ksort, krsrot
if($tipo == 'nome' && $ordem =='desc') {
    krsort($games);
}

elseif($tipo == 'sigla' && $ordem == 'desc') {
    arsort($games);
}

elseif($tipo == 'nome' && $ordem == 'asc') {
    ksort($games);
}
else {
    asort($games);
}

?>