<?php

include("../js/functions.php");
$FUNCOES = new FUNCOES();

$email = $_POST['email'];

if ($email == "")
{
	$status=0;
	$msn="Ops! Jogador não identificado. :/";	
} else
{
	/** **/
	$FUNCOES->consulta(array(
					"tabelas" 	=> " usuarios ",
					"condicoes" => " email = '".strtolower($email)."' "
					)
				);
	if ($FUNCOES->GetLinhas()>0){	
		/**/
		$obj=mysql_fetch_object($FUNCOES->GetResultado());
		$codigoUsuario = $obj->codigoUsuario; $hash=md5($FUNCOES->DATA.$FUNCOES->HORA);
		$FUNCOES->cadastro(	array(	"campos" => " codigoUsuario, email, codigoReset, dataCadastro, horaCadastro ",
									"tabelas" =>" reset_senha ",
									"values" => " $codigoUsuario, '".$email."', '".$hash."', '".$FUNCOES->DATA."', '".$FUNCOES->HORA."' "
								)
						);
		if($FUNCOES->GetLinhas()>0){
			$status=1;
			$msn="Enviamos um e-mail pra você.";	
			/**/
			$emailsender = "contato@survivorfc.com.br"; $quebra_linha = "\n";
			 
			// Passando os dados obtidos pelo formulário para as variáveis abaixo
			$nomeremetente     = "Survirvor - Reset de Senha";
			$emailremetente    = "reset_senha@survivorfc.com.br";
			$emaildestinatario = trim($email);
			$assunto           = "Solicitacão de Reset de Senha";
			 
			/* Montando a mensagem a ser enviada no corpo do e-mail. */
			$mensagemHTML = '<html lang="en"><head><meta charset="utf-8"><title>Survivor - Reset de Senha </title>';
			$mensagemHTML .= '<link href="http://www.survivorfc.com.br/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">';
			$mensagemHTML .= '<link href="http://www.survivorfc.com.br/dist/css/sb-admin-2.css" rel="stylesheet">';
			$mensagemHTML .= '<link href="http://www.survivorfc.com.br/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">';
			$mensagemHTML .= '<link href="http://www.survivorfc.com.br/dist/css/default.css" rel="stylesheet">';
			$mensagemHTML .= '</head><body><div class="container"><div class="row"><div class="col-md-4 col-md-offset-4"><div class="login-panel panel panel-default">';
            $mensagemHTML .= '<div class="panel-heading"><h3 class="panel-title">Survivor - Reset de Senha</h3></div><div class="panel-body"><form role="form" method="post">';
            $mensagemHTML .= '<fieldset><div class="form-group"><div class="alert alert-success alert-dismissable"><p>Olá,<br><br>';
			$mensagemHTML .= 'Foi solicitado um reset de senha do seu usuário no Survivor Fc.<br><br>Clique no botão abaixo e atualize a sua senha.<br><br>Abs';
			$mensagemHTML .= '</div></div><a href="http://www.survivorfc.com.br?p='.$hash.'"><button class="btn btn-lg btn-success btn-block">Reset</button></a></div></fieldset></form></div></div></div></div></div></body></html>';
 
			/* Montando o cabeçalho da mensagem */
			$headers = "MIME-Version: 1.1".$quebra_linha;
			$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
			$headers .= "From: ".$emailsender.$quebra_linha;
			$headers .= "Return-Path: " . $emailsender . $quebra_linha;
			$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
			// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
			 
			/* Enviando a mensagem */
			mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender);
			/**/
		}
		else
		{
			$status=0;
			$msn="Ops! Deu erro (Erro: ".$FUNCOES->GetMysqlError()." )";	
		}
		/**/
	}
	else
	{
		$status=0;
		$msn="E-mail não identificado.";	
	}
	/**/
}

$return['status']=$status;
$return['msn']=$msn;

echo json_encode($return);

?>