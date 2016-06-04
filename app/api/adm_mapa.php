<?php

set_time_limit(60*10);

include("../js/core.php");

$jogador = "";
if (isset($_POST['jogador'])){
	$jogador = $_POST['jogador'];
} else {
	$jogador = $_GET['jogador'];
}

if ($jogador <> $CODJOGADOR)
{
	$status=0;
	$msn="Ops! O jogador identificado não é o mesmo logado. :/";	
} else 
{

	$FUNCOES->consulta(array
			(
			"campos" 	=> " sc.codigoJogador, colocacao, (ss.nmVidas-nmDerrotas) as nmVidas, nmVitorias, nmEmpates, nmDerrotas ",
			"tabelas" 	=> " sur_classificacao sc 	left join sur_survivor ss on sc.codigoSurvivor = ss.codigoSurvivor ",
			"condicoes" => " sc.codigoSurvivor = $CODSURVIVOR and sc.codigoRodada = ".($CODRODADAATUAL-1)."",
			"ordenacao" => " codigoRodada, colocacao, (ss.nmVidas-nmDerrotas), nmVitorias desc, nmEmpates, nmDerrotas "
			)
		);
	
	if ($FUNCOES->GetLinhas()>0)
	{
		while ($obj=mysql_fetch_object($FUNCOES->GetResultado()))
		{
			/**/
			$list[$obj->codigoJogador]['colocacao']=$obj->colocacao;
			$list[$obj->codigoJogador]['nmVidas']=$obj->nmVidas;
			$list[$obj->codigoJogador]['nmVitorias']=$obj->nmVitorias;
			$list[$obj->codigoJogador]['nmEmpates']=$obj->nmEmpates;
			$list[$obj->codigoJogador]['nmDerrotas']=$obj->nmDerrotas;
		}
	} else {


		$FUNCOES->consulta(array
			(
			"campos" 	=> " sj.codigoJogador, nmVidas ",
			"tabelas" 	=> " sur_jogadores sj left join sur_survivor ss on sj.codigoSurvivor = ss.codigoSurvivor ",
			"condicoes" => " ss.codigoSurvivor = $CODSURVIVOR ",
			"ordenacao" => " nmVidas "
			)
		);
		if ($FUNCOES->GetLinhas()>0)
		{
			while ($obj=mysql_fetch_object($FUNCOES->GetResultado()))
			{
				/**/
				$list[$obj->codigoJogador]['colocacao']='';
				$list[$obj->codigoJogador]['nmVidas']=$obj->nmVidas;
				$list[$obj->codigoJogador]['nmVitorias']='';
				$list[$obj->codigoJogador]['nmEmpates']='';
				$list[$obj->codigoJogador]['nmDerrotas']='';
			}
		} 

	}
	
	$sql = "
		select	codigoRodada, codigoTimeA, codigoTimeB, 
		(
		case 
		when placarTimeA is null then '' 
		when placarTimeA > placarTimeB then 'Vitoria'
		when placarTimeA < placarTimeB then 'Derrota' 
		when placarTimeA = placarTimeB then 'Empate' end
		) statusPartidaA,
		(
		case when placarTimeB is null then '' when placarTimeB > placarTimeA then 'Vitoria' when placarTimeB < placarTimeA then 'Derrota' when placarTimeB = placarTimeA then 'Empate' end) statusPartidaB 
		from 	sur_rodadas
		where  	codigoSurvivor = $CODSURVIVOR
		";
	$result = mysql_query($sql); $listMapTt="";
	while ($row = mysql_fetch_object($result)) {
		$statusJog[$row->codigoRodada][$row->codigoTimeA]=$row->statusPartidaA;
		$statusJog[$row->codigoRodada][$row->codigoTimeB]=$row->statusPartidaB;
	}
	
	if ($STATUSRODADA){
		$rodada = $CODRODADAATUAL-1;
	} else {
		$rodada = $CODRODADAATUAL;
	}
	
	$sql = "
		select	sj.codigoJogador, st.codigoTime, sj.nickname, st.siglaTime, st.nomeTime,
		(select codigoRodada from sur_palpites sp where sp.codigoSurvivor = ".$CODSURVIVOR." and sj.codigoJogador = sp.codigoJogador and st.codigoTime = sp.codigoTime and sp.codigoRodada <= $rodada) codigoRodada
		from 	sur_rodadas sr, sur_jogadores sj, ( select * from sur_times st where codigoTime in (select codigoTimeA from sur_rodadas where codigoSurvivor = ".$CODSURVIVOR.") ) st
		where	sr.codigoSurvivor = ".$CODSURVIVOR."  and sr.codigoSurvivor = sj.codigoSurvivor
		group by sj.codigoJogador, st.codigoTime, sj.nickname, st.siglaTime, st.nomeTime
		";
	$result = mysql_query($sql); $return=""; $i=0; $ii=0; $idJ=""; $garaArquivo=0; $listMapTt="";
	while ($row = mysql_fetch_object($result)) {
		
		$i++;
		$listMapTt['jogadores'][$row->codigoJogador]['nome']=$row->nickname;
		$listMapTt['jogadores'][$row->codigoJogador]['codigo']=$row->codigoJogador;
				
		$listMapTt['jogadores'][$row->codigoJogador]['colocacao']=$list[$row->codigoJogador]['colocacao']+0;
		$listMapTt['jogadores'][$row->codigoJogador]['nmVidas']=$list[$row->codigoJogador]['nmVidas']+0;
		$listMapTt['jogadores'][$row->codigoJogador]['nmVitorias']=$list[$row->codigoJogador]['nmVitorias']+0;
		$listMapTt['jogadores'][$row->codigoJogador]['nmEmpates']=$list[$row->codigoJogador]['nmEmpates']+0;
		$listMapTt['jogadores'][$row->codigoJogador]['nmDerrotas']=$list[$row->codigoJogador]['nmDerrotas']+0;
		$idJ = $row->codigoJogador;
		
		$resultado=null; if (isset($statusJog[$row->codigoRodada][$row->codigoTime])) { $resultado=$statusJog[$row->codigoRodada][$row->codigoTime]; }
		
		$listMapTt['jogadores'][$row->codigoJogador]['times'][$ii]['codigo']=$row->codigoTime;
		$listMapTt['jogadores'][$row->codigoJogador]['times'][$ii]['sigla']=$row->siglaTime;
		$listMapTt['jogadores'][$row->codigoJogador]['times'][$ii]['nome']=$row->nomeTime;
		$listMapTt['jogadores'][$row->codigoJogador]['times'][$ii]['resultado']=$resultado;
		$listMapTt['jogadores'][$row->codigoJogador]['times'][$ii]['rodada']=$row->codigoRodada;
		
		$ii++;
		
	}
	
	
	$error=0; $erMsn="";
	$FUNCOES->deleta(array("tabelas" => "sur_mapa","condicoes" => "codigoSurvivor = $CODSURVIVOR"));
	foreach ($listMapTt['jogadores'] as $codigoJogador => $value){
		foreach ($listMapTt['jogadores'][$codigoJogador]['times'] as $sequencial => $valuee){
			$FUNCOES->cadastro(	array(	"campos" => " codigoSurvivor, codigoJogador, colocacao, nmVidas, nmVitorias, nmEmpates, nmDerrotas, codigoTime, codigoRodada, resultado, dataCadastro, horaCadastro, usuarioCadastro",
										"tabelas" =>" sur_mapa ",
										"values" => " $CODSURVIVOR, $codigoJogador, 
										'".$listMapTt['jogadores'][$codigoJogador]['colocacao']."',
										'".$listMapTt['jogadores'][$codigoJogador]['nmVidas']."',
										'".$listMapTt['jogadores'][$codigoJogador]['nmVitorias']."',
										'".$listMapTt['jogadores'][$codigoJogador]['nmEmpates']."',
										'".$listMapTt['jogadores'][$codigoJogador]['nmDerrotas']."',
										'".$listMapTt['jogadores'][$codigoJogador]['times'][$sequencial]['codigo']."',
										'".$listMapTt['jogadores'][$codigoJogador]['times'][$sequencial]['rodada']."',
										'".$listMapTt['jogadores'][$codigoJogador]['times'][$sequencial]['resultado']."',
										'".$FUNCOES->DATA."', '".$FUNCOES->HORA."', '".$USUARIO."' "
								)
							);
			if($FUNCOES->GetLinhas()>0){}
			else{ $error++; $erMsn .= "(Erro: ".$FUNCOES->GetMysqlError()." )<br>";		}
			
		}
	}
	
	if ($error>0){
		$status=0;
		$msn="Falha na geracao da lista. (".$erMsn.")";
	} else {	
		$status=1;
		$msn="Lista gerada com sucesso.";
	}
}

$return['status']=$status;
$return['msn']=$msn;

echo json_encode($return);

?>