<?php  include "conn.php";  
session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
   {
        header("Location: index.html");
         exit;
   }
?>









<?php






include "coon.php";








	

	
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
<link rel="icon" href="img/icon.ico">




<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>CADASTRO DE COLABORADOR</title>


</head>



<body>








<?php



$cp =$_POST['cp'];
$tipo =$_POST['tipo']; 



?>

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='table-data-table.php?id=<?php echo $cp ; ?>'",1000);
	
	
}
</script> 

<?php




$query = "insert into cp (local,rack_ori,dio_ori,porta_livre,conector,modelo,capacidade,destino,rack_dest,dio_dest,tipo)";

if ($tipo == 'fibra')
{






$query.= "values ( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600197', 'ALICATE DE BICO MEIA CANA CURTO  6 ISOLADO', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600199', 'ALICATE DE CORTE DIAG. 6 ISOLADO', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600211', 'ALICATE UNIVERSAL 8 ӠISOLADO', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600070', 'APARELHO TESTE BADISCO 4 FIOS', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600215', 'ARCO DE SERRA 12', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600126', 'BALDE DE LONA', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4900045', 'BANDEIROLA P/ ESCADA', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600001', 'CADEADO 45MM', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600301', 'CANIVETE PARA CABISTA', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4900056', 'CAPA DE CHUVA C/CAPUZ AMAR.', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600304', 'CARREGADOR VEICULAR', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600133', 'CHAVE CANHď 06MM', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600136', 'CHAVE CANHď 08MM', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600126', 'CHAVE CANHď 10 MM', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4500251', 'CHAVE DE ARMIO TRIANGULAR (PADRAO)', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600159', 'CHAVE DE FENDA 1/4 X 8', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600321', 'CHAVE DE FENDA MʄIA ֠ (3/16 X 3.1/8) /  (4.7 X 80)', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600322', 'CHAVE DE FENDA PEQUENA ֠(1/8 X 3.1/8) /  (3 X 80)', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600364', 'CHAVE PHILIPS GRANDE ֠(5/16 X 6) / (8 X 150)', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600365', 'CHAVE PHILIPS MʄIA', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4500251', 'CHAVE TRIANG. P/ QUADRO INTERNO', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4900075', 'COLETE REFLETIVO EM X', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4900082', 'CONE DE SINALIZACAO 75CM', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600401', 'CONECTADORA BARGOA K10 / M10B', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4900091', 'CORREIA ESCADA ', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600409', 'CORRENTE PARA ESCADA', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600413', 'CORTADOR LONGITUDINAL DE CABOS METICOS', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600422', 'ENROLADOR / DESENROLADOR', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4400082', 'ESCADA DE FIBRA P/ CABISTA 7M ', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600456', 'Ferramenta de insercao para blocos TYCO C5C ou S10', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600455', 'FERRAMENTA DE INSERȃO POUYET', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4900100', 'FITA ZEBRADA (30 M) rolo de 7cm x 200m', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600179', 'GARRAFA TERMICA 5 LTS', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600487', 'GIGA DE TESTE (PEGAS COM PONTAS BANABA-JACARE', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600490', 'GIGA DE TESTE P/ BLOCO M10B', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600492', 'GIGA DE TESTE TYCO C5C', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600100', 'JOGO ALFABETO DE ZINCO 35MM', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600102', 'JOGO ALGARISMO DE ZINCO 35 MM', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600529', 'Lanterna p/ cabe', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600560', 'MALA DE LONA 55 X 45 X 30 - REFORȁDA', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600560', 'MALA DE LONA 55 X 45 X 30 - REFORȁDA', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600770', 'MUINA DE CINTAR (FUSIMEC)', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600027', 'MARTELO PENA 200G', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600603', 'MULT΍ETRO DIGITAL', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600634', 'PRENSA CONECTORA DE BLINDAGEM', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600682', 'TESOURA PARA CABISTA', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600056', 'TRENA DE 50 MT', '0'),
( '$id', '$nome', 'cabista', '$id_ga', '$nome_ga', '4600053', 'Trena de 5 m', '0');";


}

if ($funcao == "dth")

{
  
  $query.= "values 
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600197', 'ALICATE DE BICO MEIA CANA CURTO  6 ISOLADO', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600194', 'ALICATE DE COMPRESSAO RG59/06/11', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600199', 'ALICATE DE CORTE DIAG. 6 ISOLADO', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600201', 'ALICATE DE CRIMPAR RJ 11 E RJ45', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600211', 'ALICATE UNIVERSAL 8 ӠISOLADO', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600221', 'BALDE DE LONA', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4900045', 'BANDEIROLA P/ ESCADA', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600266', 'BROCA CHATA PARA MADEIRA ֠DIAMETRO 3/8', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600246', 'BROCA DE Aȏ RIDO ֠DIÍETRO 9 MM', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600257', 'BROCA DE VIDEA ֠DIAMETRO 10 MM', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600250', 'BROCA DE V΄EA ֠DIAMETRO 10 MM ֠LONGA (30 CM)', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600261', 'BROCA DE V΄EA ֠DIAMETRO 8 MM', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600286', 'BUSSOLA MAGNʔICA', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4900056', 'CAPA DE CHUVA C/CAPUZ AMAR.', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600304', 'CARREGADOR VEICULAR', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600003', 'CHAVE COMBINADA 10 MM', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600004', 'CHAVE COMBINADA 11 MM', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600005', 'CHAVE COMBINADA 12 MM', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600006', 'CHAVE COMBINADA 13 MM', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600339', 'CHAVE DE BIELA  13 MM', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600139', 'CHAVE DE BOCA AJUSTAVEL 10', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600320', 'CHAVE DE FENDA GRANDE ֠(5/16 X 5)/(8 X 125)', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600321', 'CHAVE DE FENDA MʄIA ֠(3/16 X 3.1/8) /  (4.7 X 80)', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600322', 'CHAVE DE FENDA PEQUENA ֠(1/8 X 3.1/8) /  (3 X 80)', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600351', 'CHAVE PHILIPS ֠(1/4 X 4) /  (6 X 100)', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600359', 'CHAVE PHILIPS PEQUENA ֠(3/16 X 3.1/8 /(4.7 X 80)', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600418', 'DESENCAPADOR DE CABO RG-06/59', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600431', 'ESCADA DE ALUMINIO 6 DEGRAUS', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600441', 'ESTILETE COM BASE EMBORRACHADA 18 MM  ( FACA OLFA )', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600446', 'EXTENSď - PADRď 20M', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600499', 'GUIA DE Aȏ COM ENROLADOR', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600511', 'INCLINOMETRO COM BASE MAGNʔICA', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600523', 'JOGO DE SOQUETE ESTRIADO DE 1/2', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600022', 'LANTERNA GRANDE (> 7 CM DIAMETRO)', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600559', 'MAKITA', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600563', 'MALETA PARA ARMAZENAR FERRAMENTAS', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600031', 'MARTELO UNHA (23 MM)', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600600', 'MEDIDOR DE SINAL BANDA L (DVBS E S2) E UHF (ISDB-T)', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600603', 'MULTIMETRO DIGITAL', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600608', 'NIVEL DE BOLHA EM MADEIRA 10 OU MAIOR - HORIZONTAL E VERTICAL', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600617', 'PASSA FIO DE Aȏ REVESTIDO DE POLIPROPILENO 20 MTS', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600053', 'TRENA DE Aȏ 5 M', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600027', 'MARTELO PENA 200G', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600603', 'MULTIMETRO DIGITAL', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600634', 'PRENSA CONECTORA DE BLINDAGEM', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600682', 'TESOURA PARA CABISTA', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600056', 'TRENA DE 50 MT', '0'),
  ( '$id', '$nome', 'dth', '$id_ga', '$nome_ga', '4600053', 'Trena  m', '0');";
  









  
}


if ($funcao == "ftth")

{
  
  $query.= "values 
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600197', 'ALICATE DE BICO MEIA CANA CURTO  6 ISOLADO', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600194', 'ALICATE DE COMPRESSď RG59/06/11', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600199', 'ALICATE DE CORTE DIAG. 6 ISOLADO', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600201', 'ALICATE DE CRIMPAR RJ 11 E RJ45', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600211', 'ALICATE UNIVERSAL 8 ӠISOLADO', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600070', 'APARELHO TESTE BADISCO 4 FIOS', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600221', 'BALDE DE LONA', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4900045', 'BANDEIROLA P/ ESCADA', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600235', 'BOLSA DE LONA A TIRACOLO (PEQ)', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600266', 'BROCA CHATA PARA MADEIRA ֠DIÍETRO 3/8', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600246', 'BROCA DE Aȏ RIDO ֠DIÍETRO 9 MM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600257', 'BROCA DE V΄EA ֠DIÍETRO 10 MM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600250', 'BROCA DE V΄EA ֠DIÍETRO 10 MM ֠LONGA (30 CM)', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600261', 'BROCA DE V΄EA ֠DIÍETRO 8 MM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600253', 'BROCA DE VIDEA 6MM/380MM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600746', 'Broca de Va Longa', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600286', 'BUSSOLA MAGNʔICA', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600001', 'CADEADO 45MM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600298', 'CANETA INDUTIVA', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4900056', 'CAPA DE CHUVA C/CAPUZ AMAR.', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600304', 'CARREGADOR VEICULAR', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600133', 'CHAVE CANHď 06MM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600136', 'CHAVE CANHď 08MM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600126', 'CHAVE CANHď 10 MM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600003', 'CHAVE COMBINADA 10 MM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600004', 'CHAVE COMBINADA 11 MM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600005', 'CHAVE COMBINADA 12 MM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600006', 'CHAVE COMBINADA 13 MM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4500251', 'CHAVE DE ARMIO TRIANGULAR (PADRAO)', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600339', 'CHAVE DE BIELA  13 MM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600139', 'CHAVE DE BOCA AJUSTAVEL 10', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600320', 'CHAVE DE FENDA GRANDE', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600321', 'CHAVE DE FENDA MEDIA', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600322', 'CHAVE DE FENDA PEQUENA ', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600351', 'CHAVE PHILIPS ', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600364', 'CHAVE PHILIPS GRANDE ֠(5/16 X 6) / (8 X 150)', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600365', 'CHAVE PHILIPS MʄIA', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600359', 'CHAVE PHILIPS PEQUENA ', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4900075', 'COLETE REFLETIVO EM X', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4900082', 'CONE DE SINALIZACAO 75CM', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600401', 'CONECTADORA BARGOA K10 / M10B', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4900091', 'CORREIA ESCADA 1', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600409', 'CORRENTE PARA ESCADA', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600418', 'DESENCAPADOR DE CABO RG-06/59', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600422', 'ENROLADOR / DESENROLADOR', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600431', 'ESCADA DE ALUMINIO 6 DEGRAUS', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4400084', 'ESCADA DE EXT. DE FIBRA 3', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600441', 'ESTILETE COM BASE EMBORRACHADA 18 MM ', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600446', 'EXTENSď - PADRď 20M', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600402', 'Ferramenta de insercao para bloco QDF ou BTDG', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600456', 'Ferramenta de insercao para blocos TYCO ', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600474', 'FURADEIRA DE IMPACTO (110/220V)', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600487', 'GIGA DE TESTE', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600490', 'GIGA DE TESTE P/ BLOCO M10B', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600492', 'GIGA DE TESTE TYCO C5C', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600499', 'GUIA DE Aȏ COM ENROLADOR', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600511', 'INCLINՍETRO COM BASE MAGNʔICA', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600523', 'JOGO DE SOQUETE ESTRIADO DE 1/2', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600022', 'LANTERNA GRANDE (> 7 CM DIAMETRO)', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600529', 'Lanterna p/ cabeca', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600559', 'MAKITA', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600560', 'MALA DE LONA 55 X 45 X 30 - REFORȁDA', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600563', 'MALETA PARA ARMAZENAR FERRAMENTAS', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600770', 'MUINA DE CINTAR (FUSIMEC)', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600027', 'MARTELO PENA 200G', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600031', 'MARTELO UNHA (23 MM)', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600600', 'MEDIDOR DE SINAL BANDA L ', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600603', 'MULTIMETRO DIGITAL', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600608', 'NΖEL DE BOLHA EM MADEIRA 10', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600617', 'PASSA FIO DE Aȏ REVESTIDO DE POLIPROPILENO ', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4400142', 'QUALIFICADOR ADSL', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4600053', 'TRENA DE Aȏ 5 M', '0'),
  ( '$id', '$nome', 'ftth', '$id_ga', '$nome_ga', '4400072', 'CLIVADOR', '0');";
  




}


if ($funcao == "multiskil")

{
  
  $query.= "values 
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600197', 'ALICATE DE BICO MEIA CANA CURTO  6  ISOLADO', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600194', 'ALICATE DE COMPRESSď RG59/06/11', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600199', 'ALICATE DE CORTE DIAG. 6  ISOLADO', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600201', 'ALICATE DE CRIMPAR RJ 11 E RJ45', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600211', 'ALICATE UNIVERSAL 8  ISOLADO', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600070', 'APARELHO TESTE BADISCO 4 FIOS', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600221', 'BALDE DE LONA', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4900045', 'BANDEIROLA P/ ESCADA', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600235', 'BOLSA DE LONA A TIRACOLO (PEQ)', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600266', 'BROCA CHATA PARA MADEIRA ֠DIÍETRO 3/8', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600246', 'BROCA DE Aȏ RIDO ֠DIÍETRO 9 MM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600257', 'BROCA DE V΄EA ֠DIÍETRO 10 MM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600250', 'BROCA DE V΄EA ֠DIÍETRO 10 MM ֠LONGA (30 CM)', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600261', 'BROCA DE V΄EA ֠DIÍETRO 8 MM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600253', 'BROCA DE VIDEA 6MM/380MM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600746', 'Broca de Va Longa', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600286', 'BUSSOLA MAGNʔICA', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600001', 'CADEADO 45MM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600298', 'CANETA INDUTIVA', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4900056', 'CAPA DE CHUVA C/CAPUZ AMAR.', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600304', 'CARREGADOR VEICULAR', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600133', 'CHAVE CANHď 06MM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600136', 'CHAVE CANHď 08MM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600126', 'CHAVE CANHď 10 MM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600003', 'CHAVE COMBINADA 10 MM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600004', 'CHAVE COMBINADA 11 MM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600005', 'CHAVE COMBINADA 12 MM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600006', 'CHAVE COMBINADA 13 MM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4500251', 'CHAVE DE ARMIO TRIANGULAR (PADRAO)', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600339', 'CHAVE DE BIELA  13 MM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600139', 'CHAVE DE BOCA AJUSTAVEL 10', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600320', 'CHAVE DE FENDA GRANDE ֠(5/16 X 5) / (8 X 125)', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600321', 'CHAVE DE FENDA MEDIA', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600322', 'CHAVE DE FENDA PEQUENA ֠(1/8 X 3.1/8) /  (3 X 80)', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600351', 'CHAVE PHILIPS ֠(1/4 X 4) /  (6 X 100)', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600364', 'CHAVE PHILIPS GRANDE ֠(5/16 X 6) / (8 X 150)', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600365', 'CHAVE PHILIPS MʄIA', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600359', 'CHAVE PHILIPS PEQUENA', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4900075', 'COLETE REFLETIVO EM X', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4900082', 'CONE DE SINALIZACAO 75CM', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600401', 'CONECTADORA BARGOA K10 / M10B', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4900091', 'CORREIA ESCADA 1', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600409', 'CORRENTE PARA ESCADA', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600418', 'DESENCAPADOR DE CABO RG-06/59', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600422', 'ENROLADOR / DESENROLADOR', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600431', 'ESCADA DE ALUMINIO 6 DEGRAUS', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4400084', 'ESCADA DE EXT. DE FIBRA 3', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600441', 'ESTILETE COM BASE EMBORRACHADA 18 MM  ', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600446', 'EXTENSď - PADRď 20M', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600402', 'Ferramenta de inserao para bloco QDF ou BTDG', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600456', 'Ferramenta de inserao ', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600474', 'FURADEIRA DE IMPACTO (110/220V)', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600487', 'GIGA DE TESTE (PEGAS COM PONTAS ', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600490', 'GIGA DE TESTE P/ BLOCO M10B', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600492', 'GIGA DE TESTE TYCO C5C', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600499', 'GUIA DE Aȏ COM ENROLADOR', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600511', 'INCLINՍETRO COM BASE MAGNʔICA', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600523', 'JOGO DE SOQUETE ESTRIADO DE 1/2', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600022', 'LANTERNA GRANDE (> 7 CM DIAMETRO)', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600529', 'Lanterna p/ cabeca', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600559', 'MAKITA', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600560', 'MALA DE LONA 55 X 45 X 30 - REFORȁDA', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600563', 'MALETA PARA ARMAZENAR FERRAMENTAS', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600770', 'MUINA DE CINTAR (FUSIMEC)', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600027', 'MARTELO PENA 200G', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600031', 'MARTELO UNHA (23 MM)', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600600', 'MEDIDOR DE SINAL BANDA ', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600603', 'MULTIMETRO DIGITAL', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600608', 'NΖEL DE BOLHA EM MADEIRA 10', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600617', 'PASSA FIO DE Aȏ REVESTIDO DE POLIPROPILENO 20 MTS', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4400142', 'QUALIFICADOR ADSL', '0'),
( '$id', '$nome', 'multiskil', '$id_ga', '$nome_ga', '4600053', 'TRENA DE Aȏ 5 M', '0');";






}


if ($funcao == "oficial de rede")

{
  
  $query.= "values
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600197', 'ALICATE DE BICO MEIA CANA CURTO  ', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600199', 'ALICATE DE CORTE DIAG.', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600211', 'ALICATE UNIVERSAL 8  ISOLADO', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600215', 'ARCO DE SERRA 12', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600221', 'BALDE DE LONA', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600001', 'CADEADO 45MM', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4900056', 'CAPA DE CHUVA C/CAPUZ AMAR.', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600308', 'CARRINHO MAQUINA DE ESPINAR', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600311', 'CATRACA', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600133', 'CHAVE CANHAO 06MM', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600136', 'CHAVE CANHAO 08MM', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600126', 'CHAVE CANHAO 10 MM', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600159', 'CHAVE DE FENDA 1/4', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600321', 'CHAVE DE FENDA MEDIA', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600322', 'CHAVE DE FENDA PEQUENA ', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600364', 'CHAVE PHILIPS GRANDE', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600365', 'CHAVE PHILIPS MʄIA', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4500251', 'CHAVE TRIANG. P/ QUADRO INTERNO', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4900075', 'COLETE REFLETIVO EM X', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4900082', 'CONE DE SINALIZACAO 75CM', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600110', 'FACAO', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600464', 'FOICE', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600724', 'GANCHO PARA ABRIR CAIXA SUBTERRÎEA TIPO J', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600459', 'GANCHO PARA ABRIR CAIXA SUBTERRÎEA TIPO T', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600179', 'GARRAFA TERMICA 5 LTS', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4900102', 'GRADE PROTEȃO GUARITA', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600560', 'MALA DE LONA 55 X 45 X 30 - REFORȁDA', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600770', 'MUINA DE CINTAR (FUSIMEC)', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4400108', 'MAQUINA DE ESPINAR CABO', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600587', 'MARRETA 5 KG', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600027', 'MARTELO PENA 200G', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4400000', 'MEGՍETRO', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600597', 'MOITď', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4400121', 'MOTO-BOMBA', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600611', 'PA DE CAVAR', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600800', 'PA DE JUNTAR', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600314', 'PACETA', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600625', 'PICARETA', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4400141', 'TERRՍETRO', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600683', 'TESOURď PARA CORTAR CORDOALHA', '0'),
( '$id', '$nome', 'oficial de rede', '$id_ga', '$nome_ga', '4600056', 'TRENA DE 50 MT', '0');";




}


if ($funcao == "operador dg")

{
  
  $query.= "values
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600197', 'ALICATE DE BICO MEIA CANA CURTO ', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600199', 'ALICATE DE CORTE DIAG. 6', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600070', 'APARELHO TESTE BADISCO 4 FIOS', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600235', 'BOLSA DE LONA A TIRACOLO (PEQ)', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4900056', 'CAPA DE CHUVA C/CAPUZ AMAR.', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600304', 'CARREGADOR VEICULAR', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600321', 'CHAVE DE FENDA MEDIA', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600322', 'CHAVE DE FENDA PEQUENA', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600401', 'CONECTADORA BARGOA ', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600422', 'ENROLADOR / DESENROLADOR', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', 'N/D', 'Ferramenta de inser袯 para bloco ', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600402', 'Ferramenta de inser袯 para bloco QDF ou BTDG', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600456', 'Ferramenta de inser褯 para blocos ', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600467', 'FONE DE TRAV. P/CAB C/ALIMENTA', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600487', 'GIGA DE TESTE (PEGAS COM PONTAS ', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600490', 'GIGA DE TESTE P/ BLOCO M10B', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600492', 'GIGA DE TESTE TYCO C5C', '0'),
( '$id', '$nome', 'operador dg', '$id_ga', '$nome_ga', '4600626', 'PINCA 12CM', '0');";



} 


if ($funcao == "triplo play")

{
  
$query.= "values
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4900091', 'CORREIA ESCADA 1', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4900082', 'CONE DE SINALIZACAO 75CM', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4900075', 'COLETE REFLETIVO EM X', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4900056', 'CAPA DE CHUVA C/CAPUZ AMAR.', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4900045', 'BANDEIROLA P/ ESCADA', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600770', 'MUINA DE CINTAR (FUSIMEC)', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600746', 'Broca de Va Longa', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600617', 'PASSA FIO DE Aȏ REVESTIDO DE POLIPROPILENO ', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600608', 'NΖEL DE BOLHA EM MADEIRA 10', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600603', 'MULTIMETRO DIGITAL', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600600', 'MEDIDOR DE SINAL BANDA L ', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600563', 'MALETA PARA ARMAZENAR FERRAMENTAS', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600560', 'MALA DE LONA 55 X 45 X 30 - REFORȁDA', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600559', 'MAKITA', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600529', 'Lanterna p/ cabeca', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600523', 'JOGO DE SOQUETE ESTRIADO DE 1/2', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600511', 'INCLINՍETRO COM BASE MAGNʔICA', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600499', 'GUIA DE Aȏ COM ENROLADOR', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600492', 'GIGA DE TESTE TYCO C5C', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600490', 'GIGA DE TESTE P/ BLOCO M10B', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600487', 'GIGA DE TESTE (PEGAS COM PONTAS BANANA-JACARE','0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600474', 'FURADEIRA DE IMPACTO (110/220V)', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600456', 'Ferramenta de insercao para blocos ', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600446', 'EXTENSď - PADRď 20M', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600441', 'ESTILETE COM BASE EMBORRACHADA 18 MM  ', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600431', 'ESCADA DE ALUMINIO 6 DEGRAUS', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600422', 'ENROLADOR / DESENROLADOR', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600418', 'DESENCAPADOR DE CABO RG-06/59', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600409', 'CORRENTE PARA ESCADA', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600402', 'Ferramenta de inser袯 para bloco QDF ou BTDG', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600401', 'CONECTADORA BARGOA K10 / M10B', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600365', 'CHAVE PHILIPS MʄIA', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600364', 'CHAVE PHILIPS GRANDE ', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600359', 'CHAVE PHILIPS PEQUENA ', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600351', 'CHAVE PHILIPS', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600339', 'CHAVE DE BIELA  13 MM', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600322', 'CHAVE DE FENDA PEQUENA', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600321', 'CHAVE DE FENDA MʄIA ', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600320', 'CHAVE DE FENDA GRANDE ', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600304', 'CARREGADOR VEICULAR', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600298', 'CANETA INDUTIVA', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600286', 'BUSSOLA MAGNʔICA', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600266', 'BROCA CHATA PARA MADEIRA ֠DIÍETRO 3/8', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600261', 'Broca de Va', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600257', 'BROCA DE V΄EA ֠DIÍETRO 10 MM', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600253', 'BROCA DE VIDEA 6MM/380MM', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600250', 'BROCA DE V΄EA ֠DIÍETRO 10 MM ֠LONGA (30 CM)', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600246', 'BROCA DE Aȏ RIDO ֠DIÍETRO 9 MM', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600235', 'BOLSA DE LONA A TIRACOLO (PEQ)', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600221', 'BALDE DE LONA', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600211', 'ALICATE UNIVERSAL 8 ӠISOLADO', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600201', 'ALICATE DE CLIMPAR RJ 11 / RJ 45', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600199', 'ALICATE DE CORTE DIAG. 6 ISOLADO', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600197', 'ALICATE DE BICO MEIA CANA CURTO  6', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600194', 'ALICATE DE COMPRESSď RG59/06/11', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600139', 'CHAVE DE BOCA AJUSTAVEL 10', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600136', 'CHAVE CANHď 08MM', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600133', 'CHAVE CANHď 06MM', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600126', 'CHAVE CANHď 10 MM', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600070', 'APARELHO TESTE BADISCO 4 FIOS', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600053', 'TRENA DE Aȏ 5 M', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600031', 'MARTELO UNHA (23 MM)', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600027', 'MARTELO PENA 200G', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600022', 'LANTERNA GRANDE (> 7 CM DIAMETRO)', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600006', 'CHAVE COMBINADA 13 MM', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600005', 'CHAVE COMBINADA 12 MM', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600004', 'CHAVE COMBINADA 11 MM', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600003', 'CHAVE COMBINADA 10 MM', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4600001', 'CADEADO 45MM', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4500251', 'CHAVE DE ARMIO TRIANGULAR (PADRAO)', '0'),
( '$id', '$nome', 'triplo play', '$id_ga', '$nome_ga', '4400142', 'QUALIFICADOR ADSL', '0');";



}


if ($funcao == "voz velox")

{
  
$query.= "values
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600197', 'ALICATE DE BICO MEIA CANA CURTO  6 ISOLADO', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600201', 'ALICATE DE CLIMPAR RJ 11 / RJ 45', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600199', 'ALICATE DE CORTE DIAG. 6 ISOLADO', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600211', 'ALICATE UNIVERSAL 8 ӠISOLADO', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600070', 'APARELHO TESTE BADISCO 4 FIOS', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4900045', 'BANDEIROLA P/ ESCADA', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600235', 'BOLSA DE LONA A TIRACOLO (PEQ)', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600253', 'BROCA DE VIDEA 6MM/380MM', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600746', 'Broca de Va Longa', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600257', 'Broca de Va', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600261', 'Broca de Va', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600001', 'CADEADO 45MM', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600298', 'CANETA INDUTIVA', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome _ga', '4900056', 'CAPA DE CHUVA C/CAPUZ AMAR.', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600304', 'CARREGADOR VEICULAR', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600133', 'CHAVE CANHď 06MM', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600136', 'CHAVE CANHď 08MM', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600126', 'CHAVE CANHď 10 MM', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600139', 'CHAVE DE BOCA AJUSTAVEL 10', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600321', 'CHAVE DE FENDA MEDIA', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600322', 'CHAVE DE FENDA PEQUENA ֠(1/8 X 3.1/8) / (3 X 80)', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600365', 'CHAVE PHILIPS MʄIA', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4900075', 'COLETE REFLETIVO EM X', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4900082', 'CONE DE SINALIZACAO 75CM','0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600401', 'CONECTADORA BARGOA K10 / M10B', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4900091', 'CORREIA ESCADA 1', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600409', 'CORRENTE PARA ESCADA', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600422', 'ENROLADOR / DESENROLADOR', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4400084', 'ESCADA DE EXT. DE FIBRA 3', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600446', 'EXTENSď - PADRď 20M', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '0'      , 'Ferramenta de insercao para bloco de URA Ericsson', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600402', 'Ferramenta de insercao para bloco QDF ou BTDG', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600456', 'Ferramenta de insercao para blocos ', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600617', 'FITA GUIA 25M', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600474', 'FURADEIRA DE IMPACTO (110/220V)', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600487', 'GIGA DE TESTE (PEGAS COM PONTAS BANANA-JACARE', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600490', 'GIGA DE TESTE P/ BLOCO M10B', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600492', 'GIGA DE TESTE TYCO C5C', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600529', 'Lanterna p/ cabeca', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600560', 'MALA DE LONA 55 X 45 X 30 - REFORȁDA', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600770', 'MUINA DE CINTAR (FUSIMEC)', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600027', 'MARTELO PENA 200G', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4600603', 'MULT΍ETRO DIGITAL', '0'),
( '$id', '$nome', 'voz veloz', '$id_ga', '$nome_ga', '4400142', 'QUALIFICADOR ADSL', '0');";





}


$sql = mysql_query($query);


if($sql )
{
  
  
  echo "
  <script language='JavaScript'>
  window.alert('ENVIADA COM SUCESSO!')
  
  </script>";

  echo "<script>saidasuccessfully()</script>";
  

 ;
  

  
}
else
{
  
  echo "<script language='JavaScript'>
   window.alert('ERRO NO ENVIO!');
   </script> " ;
  
}








?>

























</body>


</html>