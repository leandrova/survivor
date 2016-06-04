<?php

include("../js/core.php");

$rodada = $_POST['rodada'];

if ($rodadaAtual){
	$conditionRodada=' and sr.codigoRodada = $rodadaAtual ';
} else {
	$conditionRodada='';
}

/** **/
$FUNCOES->consulta(array
		(
		"campos" 	=> " sr.codigoRodada, st1.siglaTime siglaTimeA, st1.nomeTime, sr.placarTimeA, st2.siglaTime siglaTimeB, st2.nomeTime, sr.placarTimeB, sr.dataJogo, sr.horaJogo, se.nomeEstadio ",
		"tabelas" 	=> " sur_rodadas sr	left join sur_times st1 on st1.codigoTime = sr.codigoTimeA left join sur_times st2 on st2.codigoTime = sr.codigoTimeB left join sur_estadios se on se.codigoEstadio = sr.codigoEstadio ",
		"condicoes" => " sr.codigoSurvivor = $CODSURVIVOR $conditionRodada ",
		"ordenacao" => " sr.codigoRodada, sr.dataJogo, sr.horaJogo "
		)
);
$listRodadas="";
if ($FUNCOES->GetLinhas()>0)
{
	$qnt=0;
	while ($obj=mysql_fetch_object($FUNCOES->GetResultado()))
	{
		/**/
		$listRodadas[$obj->codigoRodada]['times'][$qnt]['rodada']=$obj->codigoRodada;
		$listRodadas[$obj->codigoRodada]['times'][$qnt]['timeA']=$obj->siglaTimeA;
		$listRodadas[$obj->codigoRodada]['times'][$qnt]['placarA']=str_replace(null,"''",$obj->placarTimeA);
		$listRodadas[$obj->codigoRodada]['times'][$qnt]['timeB']=$obj->siglaTimeB;
		$listRodadas[$obj->codigoRodada]['times'][$qnt]['placarB']=str_replace(null,"''",$obj->placarTimeB);
		$listRodadas[$obj->codigoRodada]['times'][$qnt]['diaJogo']=str_replace(null,"''",$FUNCOES->DataExterna($obj->dataJogo));
		$listRodadas[$obj->codigoRodada]['times'][$qnt]['localJogo']=str_replace(null,"''",$obj->nomeEstadio);
		$listRodadas[$obj->codigoRodada]['times'][$qnt]['horaJogo']=str_replace(null,"''",$obj->horaJogo);
		$qnt++;
	}
}
/**/

echo json_encode($listRodadas);

?>