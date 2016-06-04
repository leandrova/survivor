<?php

ob_start(); 
if(!isset($_SESSION)){ session_start();} //iniciamos a sessão
session_name(session_id()."survivor");
// Funcao que verifica se o servidor é windows ou linux para colocar / ou \
date_default_timezone_set('America/Sao_Paulo');

include("functions.php");
$FUNCOES = new FUNCOES();

$ArrPATH = explode("/",$_SERVER['SCRIPT_NAME']);
$paginaAtual = $ArrPATH[count($ArrPATH)-1];

if (isset($_GET["p"])){
	$hash=$_GET["p"];
	$FUNCOES->consulta(array(
					"tabelas" 	=> " reset_senha ",
					"condicoes" => " codigoReset = '$hash' "
					)
				);
	if ($FUNCOES->GetLinhas()>0){
		$obj=mysql_fetch_object($FUNCOES->GetResultado());
		$codigoUsuario = $obj->codigoUsuario;
		$email = $obj->email;
		if ($obj->dataReset == null){
			/**/
			$FUNCOES->consulta(array(
					"tabelas" 	=> " usuarios ",
					"condicoes" => " email = '$email' "
					)
				);
			if ($FUNCOES->GetLinhas()>0){
				$obj=mysql_fetch_object($FUNCOES->GetResultado());
				$_SESSION["USUARIO"]=$obj->codigoUsuario;
				$_SESSION["NOMEUSUARIO"]=$obj->nome;
				$_SESSION["EMAIL"]=$obj->email;
				/* Dados do Survivor */
				$FUNCOES->consulta(array(
						"campos"	=> " ss.codigoSurvivor, sj.codigoJogador, ss.linkGE ",
						"tabelas" 	=> " sur_survivor ss, sur_jogadores sj ",
						"condicoes" => " sj.codigoUsuario = ".$_SESSION["USUARIO"]." and ss.codigoSurvivor = sj.codigoSurvivor ",
						"ordenacao"	=> " ss.codigoSurvivor desc "
						)
					);
				if ($FUNCOES->GetLinhas()>0){
					$obj=mysql_fetch_object($FUNCOES->GetResultado());
					$_SESSION["CODSURVIVOR"] = $obj->codigoSurvivor;
					$_SESSION["CODJOGADOR"] = $obj->codigoJogador;
					$_SESSION["linkGE"] = $obj->linkGE;
				}
				/**/
				$FUNCOES->altera(array
					(
					"campos"	=> " dataSenha = '2015-01-01' ",
					"tabelas" 	=> " usuarios ",
					"condicoes" => " codigoUsuario = ".$_SESSION["USUARIO"]." "
					)
				);
				$FUNCOES->altera(array
					(
					"campos"	=> " statusReset = 1, dataReset = '".$FUNCOES->DATA."', horaReset = '".$FUNCOES->HORA."'",
					"tabelas" 	=> " reset_senha ",
					"condicoes" => " email = '$email' "
					)
				);
				/**/
			}
			/**/
		} else {
			?><script>alert('Opa, o codigo de reset nao e mais valido.')</script><?
		}
	} else {
		?><script>alert('Opa, o codigo de reset nao foi identificado.')</script><?
	}
}

$msn=""; $email="";
/* Verifica se é para auntenticar */
if ( isset($_POST["email"]) and isset($_POST["password"]) ){
	$email = $FUNCOES->getPost("email");
	$password = $FUNCOES->getPost("password");
	if ( $email <> "" and $password <> ""){
		$password = md5(strtoupper($password));
		$FUNCOES->consulta(array(
					"tabelas" 	=> " usuarios ",
					"condicoes" => " (email = '$email' and senha = '$password' ) or (nome = '$email' and senha = '$password' ) "
					)
				);
		if ($FUNCOES->GetLinhas()>0){
			$obj=mysql_fetch_object($FUNCOES->GetResultado());
			$_SESSION["USUARIO"]=$obj->codigoUsuario;
			$_SESSION["NOMEUSUARIO"]=$obj->nome;
			$_SESSION["EMAIL"]=$obj->email;
			/* Dados do Survivor */
			$FUNCOES->consulta(array(
					"campos"	=> " ss.codigoSurvivor, sj.codigoJogador, ss.linkGE  ",
					"tabelas" 	=> " sur_survivor ss, sur_jogadores sj ",
					"condicoes" => " sj.codigoUsuario = ".$_SESSION["USUARIO"]." and ss.codigoSurvivor = sj.codigoSurvivor ",
					"ordenacao"	=> " ss.codigoSurvivor desc "
					)
				);
			if ($FUNCOES->GetLinhas()>0){
				$obj=mysql_fetch_object($FUNCOES->GetResultado());
				$_SESSION["CODSURVIVOR"] = $obj->codigoSurvivor;
				$_SESSION["CODJOGADOR"] = $obj->codigoJogador;
				$_SESSION["linkGE"] = $obj->linkGE;
			}
			/**/
			$FUNCOES->altera(array
				(
				"campos"	=> " statusReset = 1, dataReset = '".$FUNCOES->DATA."', horaReset = '".$FUNCOES->HORA."'",
				"tabelas" 	=> " reset_senha ",
				"condicoes" => " email = '".$_SESSION["EMAIL"]."' "
				)
			);
			/**/
		} else {
			$msn="Dados incorretos. <a href=\"#\" class=\"tagAnalytics\" data-category=\"Menu-Header\" data-action=\"Click\" data-label=\"Reset\" onclick=\"esqueceuSenha()\">Esqueceu?</a>";
		}
	} else {
		$msn="Informe o e-mail ou usuário e senha.";
	}
}
/* */

$USUARIO=1;
/*if(isset($_SESSION["USUARIO"])){
	$USUARIO=$_SESSION["USUARIO"];
} else if ($paginaAtual <> "login.php"){
	echo "<script>document.location='./login.php'</script>"
	exit;
} 

$CODSURVIVOR="";
if(isset($_SESSION["CODSURVIVOR"])){
	$CODSURVIVOR=$_SESSION["CODSURVIVOR"];
} else if ($paginaAtual <> "login.php"){
	echo "<script>document.location='./login.php'</script>"
	exit;
}

$CODJOGADOR="";
if(isset($_SESSION["CODJOGADOR"]) ){
	$CODJOGADOR=$_SESSION["CODJOGADOR"];
} else if ($paginaAtual <> "login.php"){
	echo "<script>document.location='./login.php'</script>"
	exit;
}*/

$FUNCOES->consulta(array(
			"tabelas" 	=> " sur_rodadas ",
			"condicoes" => " codigoSurvivor = $CODSURVIVOR and placarTimeA is null	",
			"ordenacao" => " codigoRodada, dataJogo, horaJogo limit 1 "
			)
		);
if ($FUNCOES->GetLinhas()>0){
	$obj=mysql_fetch_object($FUNCOES->GetResultado());	
	$CODRODADAATUAL = $obj->codigoRodada;
	$FECHARODADA=substr($FUNCOES->dataExterna($FUNCOES->menosDias($obj->dataJogo)),0,-5). " as 15hs";
	if ( $FUNCOES->menosDias($obj->dataJogo) > $FUNCOES->DATA ){
		$STATUSRODADA=1;
	} else if ( $FUNCOES->menosDias($obj->dataJogo) == $FUNCOES->DATA ){
		if ( $FUNCOES->converteHoraSegundo($FUNCOES->HORA) < $FUNCOES->converteHoraSegundo('15:00:00') ) {
			$STATUSRODADA=1;
		} else {
			$STATUSRODADA=0;
		}
	} else {
		$STATUSRODADA=0;
	}
} else {
	$CODRODADAATUAL = 0;
	$FUNCOES->consulta(array(
			"tabelas" 	=> " sur_rodadas ",
			"condicoes" => " codigoSurvivor = $CODSURVIVOR and codigoRodada = (select max(codigoRodada) from sur_rodadas where codigoSurvivor = $CODSURVIVOR )	",
			"ordenacao" => " codigoRodada, dataJogo, horaJogo limit 1 "
			)
		);
	if ($FUNCOES->GetLinhas()>0){
		$obj=mysql_fetch_object($FUNCOES->GetResultado());
		$CODRODADAATUAL = $obj->codigoRodada+1;
	}
	$STATUSRODADA=0;
}

$FUNCOES->consulta(array(
			"campos"	=> " codigoTime ",
			"tabelas" 	=> " sur_palpites ",
			"condicoes" => " codigoSurvivor = $CODSURVIVOR and codigoJogador = $CODJOGADOR and codigoRodada =  $CODRODADAATUAL "
			)
		);
if ($FUNCOES->GetLinhas()>0){
	$obj=mysql_fetch_object($FUNCOES->GetResultado());
	$MEUPALPITE = $obj->codigoTime;
} else {
	$MEUPALPITE = "''";
}

/*if ($paginaAtual == "login.php" and $USUARIO<>""){
	echo "<script>document.location='./index.php'</script>"
}

if ($paginaAtual <> "profile.php" and $paginaAtual <> "login.php" and $FUNCOES->tempoSenha($USUARIO) > 90){
	echo "<script>document.location='./profile.php'</script>"
}*/

$ADM=0;
if ($USUARIO == 1 or $USUARIO == 2){
	$ADM=1;
}

?>