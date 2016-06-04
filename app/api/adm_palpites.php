<?php

include("../js/core.php");

$idRodada = $_POST['idRodada'];
$palpitesRodada = $_POST['palpitesRodada'];

if ($idRodada == '')
{
	$status=0;
	$msn="Ops! Não identificamos a rodada que você quer atualizar o placar. :/";	
} else if ( $palpitesRodada == '' )
{
	$status=0;
	$msn="Ué! Não identificamos os resultados que você quer atualizar. 8| ";	
} else
{
	$palpitesRodada = json_decode($palpitesRodada); $palpiteRepetido=0; $qnt=0;
	foreach($palpitesRodada as $nmJogador => $jogador) {
		/**/
		if ($jogador->codigoTime <> '') {
			$qnt++;
			$FUNCOES->consulta(array
						(
						"tabelas" 	=> " sur_palpites ",
						"condicoes" => " codigoSurvivor = $CODSURVIVOR and codigoRodada <> $idRodada and codigoJogador = ".$jogador->codigoJogador." and codigoTime = ".$jogador->codigoTime." ",
						)
					);
			$listRodadas="";
			$sql2[]=$FUNCOES->GetSql()." = ".$FUNCOES->GetLinhas();
			if ( $FUNCOES->GetLinhas() <=0 ) {
				$FUNCOES->consulta(array
							(
							"tabelas" 	=> " sur_palpites ",
							"condicoes" => " codigoSurvivor = $CODSURVIVOR and codigoRodada = $idRodada and codigoJogador = ".$jogador->codigoJogador." ",
							)
						);
				$listRodadas="";
				if ( $FUNCOES->GetLinhas()>0 ) {
					$sql[]= "update sur_palpites set codigoTime = ".$jogador->codigoTime." where codigoSurvivor = $CODSURVIVOR and codigoRodada = $idRodada and codigoJogador = ".$jogador->codigoJogador.";";
				} else {
					$sql[]= "insert into sur_palpites values ($CODSURVIVOR, $idRodada, ".$jogador->codigoTime.", ".$jogador->codigoJogador.", '".$FUNCOES->DATA."', '".$FUNCOES->HORA."', ".$USUARIO." ); ";	
				}
			} else {
				$palpiteRepetido++;
			}
		}
		/**/
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
		$msn="Ops! Dos ".count($sql)." palpite(s), so foi possivel atualizar ".$suces.". 8| ";
	} else {
		if ($palpiteRepetido) {
			$status=1;
			$msn="Opa, dos ".$qnt." palpite(s) ".count($sql)." foram atualizado(s), mas ".$palpiteRepetido." estava(m) com times já selecionado(s) em outras rodadas. : ";
		} else {
			$status=1;
			$msn="Palpite(s) atualizado(s) com sucesso. : ";
		}
	}
	/**/
}

$return['status']=$status;
$return['msn']=$msn;

echo json_encode($return);

?>