<?php 

	$SIShost="179.188.16.19"; 

	$SISlogin="leandroviana19"; 

	$SISsenha="surv1v0r"; 

	$SISbanco="leandroviana19"; 

	$conexao=mysql_connect($SIShost,$SISlogin,$SISsenha); 

	mysql_select_db($SISbanco); 

?>