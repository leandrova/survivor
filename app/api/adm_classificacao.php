<?php

include("../js/core.php");

$idRodada='';
if (isset($_POST['idRodada'])) {
	$idRodada = $_POST['idRodada'];
}

if ($CODSURVIVOR == '')
{
	$status=0;
	$msn="Ops! Não identificamos o Survivor :(";	
} else if ($idRodada == ''){
	$status=0;
	$msn="Ops! Rodada não identificada :(";	
} else if ($CODRODADAATUAL == ''){
	$status=0;
	$msn="Ops! Rodada atual não identificada :(";	
} else if ($STATUSRODADA == 0 and $CODRODADAATUAL == $idRodada){
	$status=0;
	$msn="Ops! Rodada $CODRODADAATUAL está fechada. So pode processar a rodada apos o seu termino :( ";	
} else
{		
		$rodadaProcessamento = $idRodada; $deleta=0;
		$FUNCOES->consulta(array(
			"tabelas" 	=> " sur_classificacao ",
			"condicoes" => " codigoSurvivor = $CODSURVIVOR and codigoRodada = $rodadaProcessamento "
			)
		);
		if ($FUNCOES->GetLinhas()>0){
			/**/
			$FUNCOES->deleta(array(
				"tabelas" 	=> " sur_classificacao ",
				"condicoes" => " codigoSurvivor = $CODSURVIVOR and codigoRodada = $rodadaProcessamento "
				)
			);
			if ($FUNCOES->GetLinhas()>0){
				$deleta=1;
			}
			/**/
		} 
		/**/
		$FUNCOES->consulta(array(
			"tabelas" 	=> " sur_rodadas ",
			"condicoes" => " codigoSurvivor = $CODSURVIVOR and codigoRodada <= $rodadaProcessamento and placarTimeA is null "
			)
		);
		if ($FUNCOES->GetLinhas()>0){
			$status=0;
			$msn="A rodada $rodadaProcessamento do campeonato não foi registrado ainda :( ";
		} else {
			$FUNCOES->executaSql("CALL proc_registra_classificacao($CODSURVIVOR, $rodadaProcessamento);");
			if ($FUNCOES->GetLinhas()>0)
			{
				$status=1;
				if ($deleta) {
					$msn="Opa! A Classificação da Rodada $rodadaProcessamento já estava processada, então fizemos a atualização.";
				} else {
					$msn="A Classificação da Rodada $rodadaProcessamento foi registrada com sucesso.";
				}
			} else {
				$status=0;
				$msn="Não foi possivel gerar a Classificação :( (Erro: ".$FUNCOES->GetMysqlError().")";
			}
		}
		/**/
}

$return['status']=$status;
$return['msn']=$msn;

echo json_encode($return);

?>