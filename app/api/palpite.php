<?php

include("../js/core.php");

$jogador = $_POST['jogador'];
$time = $_POST['c'];
$rodadaAtual = $_POST['rodadaAtual'];

if ($jogador <> $CODJOGADOR)
{
	$status=0;
	$msn="Ops! O jogador identificado não é o mesmo logado. :/";	
} else if ( $STATUSRODADA == 0 )
{
	$status=0;
	$msn="Ué! Como você quer palpitar se a rodada está fechada? 8| ";	
} else  if ($rodadaAtual <> $CODRODADAATUAL )
{
	$status=0;
	$msn="Ué! A rodada atual não é a identificada! 8| ";
} else
{
	/** **/
	$FUNCOES->consulta(array
			(
			"tabelas" 	=> " sur_palpites ",
			"condicoes" => " codigoJogador=$jogador and codigoSurvivor = $CODSURVIVOR and codigoRodada = $CODRODADAATUAL "
			)
		);
	if ($FUNCOES->GetLinhas()>0){
		$obj=mysql_fetch_object($FUNCOES->GetResultado());
		if ($obj->codigoTime == $time){
			$FUNCOES->deleta(array("tabelas" => "sur_palpites","condicoes" => "codigoSurvivor = $CODSURVIVOR and codigoRodada = $CODRODADAATUAL and codigoJogador = $jogador"));
			if ($FUNCOES->GetMysqlError() == "")
			{
				$status=1;
				$msn="Seu Palpite foi desfeito com sucesso.";
			}
			else
			{
				$status=0;
				$msn="Não conseguimos desfazer seu palpite (Erro: ".$FUNCOES->GetMysqlError()." )";
			}
		} else {
			$FUNCOES->altera(array(	"campos" 	=> " codigoTime = $time  ",
									"tabelas" 	=> " sur_palpites",
									"condicoes" => " codigoSurvivor = $CODSURVIVOR and codigoRodada = $CODRODADAATUAL and codigoJogador = $jogador "));
			if($FUNCOES->GetLinhas()>0){
				$status=1;
				$msn="Seu Palpite foi alterado com sucesso.";
			}
			else{
				$status=0;
				$msn="Não conseguimos alterar seu palpite (Erro: ".$FUNCOES->GetMysqlError()." )";
			}
		}
	} else {
		$FUNCOES->cadastro(	array(	"campos" => " codigoSurvivor, codigoRodada, codigoTime, codigoJogador, dataCadastro, horaCadastro, usuarioCadastro",
									"tabelas" =>" sur_palpites ",
									"values" => " $CODSURVIVOR, $CODRODADAATUAL, $time, $jogador, '".$FUNCOES->DATA."', '".$FUNCOES->HORA."', '".$USUARIO."' "
								)
							);
		if($FUNCOES->GetLinhas()>0){
			$status=1;
			$msn="Seu Palpite foi registrado com sucesso.";	
		}
		else
		{
			$status=0;
			$msn="Não conseguimos registrar seu palpite (Erro: ".$FUNCOES->GetMysqlError()." )";	
		}
	}
	/**/
}

$return['status']=$status;
$return['msn']=$msn;

echo json_encode($return);

?>