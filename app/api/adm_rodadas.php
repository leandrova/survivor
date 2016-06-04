<?php

include("../js/core.php");

$idRodada = $_POST['idRodada'];
$resultadosRodada = $_POST['resultadosRodada'];

if ($idRodada == '')
{
	$status=0;
	$msn="Ops! Não identificamos a rodada que você quer atualizar o placar. :/";	
} else if ( $resultadosRodada == '' )
{
	$status=0;
	$msn="Ué! Não identificamos os resultados que você quer atualizar. 8| ";	
} else
{
	$resultadosRodada = json_decode($resultadosRodada);
	$times = $resultadosRodada->times; $sql="";
	foreach($times as $jogos => $dadosJogo) {
		if ($dadosJogo->placarTimeA <> ''){
			$sql[]= "update sur_rodadas set placarTimeA = ".$dadosJogo->placarTimeA.", placarTimeB = ".$dadosJogo->placarTimeB.", dataJogo = '".$FUNCOES->dataInterna($dadosJogo->diaJogo)."', horaJogo = '".($dadosJogo->horaJogo)."'  where codigoSurvivor = $CODSURVIVOR and codigoRodada = ".$dadosJogo->rodada." and codigoTimeA = ".$dadosJogo->codigoTimeA." and codigoTimeB = ".$dadosJogo->codigoTimeB.";";
		} else {
			$sql[]= "update sur_rodadas set dataJogo = '".$FUNCOES->dataInterna($dadosJogo->diaJogo)."', horaJogo = '".($dadosJogo->horaJogo)."'  where codigoSurvivor = $CODSURVIVOR and codigoRodada = ".$dadosJogo->rodada." and codigoTimeA = ".$dadosJogo->codigoTimeA." and codigoTimeB = ".$dadosJogo->codigoTimeB.";";
		}
	}
	
	/** **/
	$error = 0; $suces = 0;
	foreach ($sql as $key => $value){
		
		$FUNCOES->executaSql($value);
		if($FUNCOES->GetMysqlError() <> ''){
			$error++;
		} else {
			$suces++;
		}
	}
	
	if ($error){
		$status=0;
		$msn="Ops! Dos ".count($sql)." jogos, so foi possivel atualizar ".$suces.". 8| ";
	} else {
		$status=1;
		$msn="Jogos atualizados com sucesso. :) ";
	}
	/**/
}

$return['status']=$status;
$return['msn']=$msn;

echo json_encode($return);

?>