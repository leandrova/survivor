<?php

include("../js/core.php");

$jogador = $_POST['jogador'];
$typeMap = $_POST['typeMap'];

if ($typeMap > 0){
	$listJogador=" and sm.codigoJogador = $jogador ";
} else {
	$listJogador="";
}

if ($jogador <> $CODJOGADOR)
{
	$status=0;
	$msn="Ops! O jogador identificado não é o mesmo logado. :/";	
} 
else
{

	$sql = "
		select  sm.codigoJogador, 
				(select nickname from sur_jogadores sj where sj.codigoSurvivor = sm.codigoSurvivor and sj.codigoJogador = sm.codigoJogador ) nickname, 
				sm.colocacao, sm.nmVidas, sm.nmVitorias, sm.nmEmpates, sm.nmDerrotas, sm.codigoTime, st.siglaTime, st.nomeTime, sm.resultado, sm.codigoRodada
		from 	sur_mapa sm, ( select * from sur_times st where codigoTime in (select codigoTimeA from sur_rodadas where codigoSurvivor = ".$CODSURVIVOR.") ) st
		where	sm.codigoSurvivor = ".$CODSURVIVOR." $listJogador
				and sm.codigoTime = st.codigoTime
		order by 2, 10
		";
	$result = mysql_query($sql); $return=""; $i=0; $ii=0; $idJ=""; $garaArquivo=0; $listMapTt="";
	while ($row = mysql_fetch_object($result)) {
		
		if ($idJ <> $row->codigoJogador){
			$i++;
			$listMapTt['jogadores'][$i]['nome']=$row->nickname;
			$listMapTt['jogadores'][$i]['codigo']=$row->codigoJogador;
			$listMapTt['jogadores'][$i]['colocacao']=$row->colocacao;
			$listMapTt['jogadores'][$i]['nmVidas']=$row->nmVidas;
			$listMapTt['jogadores'][$i]['nmVitorias']=$row->nmVitorias;
			$listMapTt['jogadores'][$i]['nmEmpates']=$row->nmEmpates;
			$listMapTt['jogadores'][$i]['nmDerrotas']=$row->nmDerrotas;
			$idJ = $row->codigoJogador;
		}
		
		$resultado=null; if (isset($statusJog[$row->codigoRodada][$row->codigoTime])) { $resultado=$statusJog[$row->codigoRodada][$row->codigoTime]; }
		
		$listMapTt['jogadores'][$i]['times'][$ii]['codigo']=$row->codigoTime;
		$listMapTt['jogadores'][$i]['times'][$ii]['sigla']=$row->siglaTime;
		$listMapTt['jogadores'][$i]['times'][$ii]['nome']=$row->nomeTime;
		$listMapTt['jogadores'][$i]['times'][$ii]['resultado']=$row->resultado;
		$listMapTt['jogadores'][$i]['times'][$ii]['rodada']=$row->codigoRodada;
		
		$ii++;
		
	}
	/**/
}

echo json_encode($listMapTt);

?>