<?php
//os emails da lista abaixo não serão enviados ao(s) destinatário(s)
if (isset($_POST['email'])){
	if ($_POST['email'] != "")
		$emailpreenchido = $_POST['email'];
}
if (isset($_POST['whatsapp-email'])) {
if($_POST['whatsapp-email'] != "")
	$emailpreenchido = $_POST['whatsapp-email'];
}
$emailvalido = "";
if    ($emailpreenchido == "softwarewhatscontacts@gmail.com" 
	|| $emailpreenchido == "pr902550@gmail.com" 
	|| $emailpreenchido == "no-reply@hilkom-digital.de" 
	|| $emailpreenchido == "gdetrafegodm@gmail.com"
	|| $emailpreenchido == "pr902550@gmail.com"
	|| $emailpreenchido == "ricardohotmartfacebook@gmail.com"
	|| $emailpreenchido == "vendas@sulamericaexecutivo.com.br"
	|| $emailpreenchido == "vendas_545@divulgamais.com"
	|| $emailpreenchido == "linda.ray@theremarketingguys.com"
	|| $emailpreenchido == "naoresponderaqui@email.com"
	|| $emailpreenchido == "naorespondaaqui@email.com"
	|| $emailpreenchido == "clioapp314@divulgabrasil.com"
	|| $emailpreenchido == "fotografoale@gmail.com"
	|| $emailpreenchido == "totalconsultas.mkt2@gmail.com"
	|| $emailpreenchido == "no-replyGap@google.com"
	|| $emailpreenchido == "lambertj283@gmail.com"
	|| $emailpreenchido == "oescritoronline@gmail.com"
	|| $emailpreenchido == "carrinhosecoflex.mtk@gmail.com"
	|| $emailpreenchido == "rodrigo_antoni@hotmail.com"
	|| $emailpreenchido == "sejamestredochurrasco_766@divulgabrasil.com"
	|| $emailpreenchido == "contato@santoriniassessoria.com.br"
	|| $emailpreenchido == "abelbreath456@gmail.com"
	|| $emailpreenchido == "trader-diego-aguiar-flc@gmail.com"
	|| $emailpreenchido == "estrategiasgatilhosmentais_824@divulgarmais.com"
	|| $emailpreenchido == "rivello_641@md.com"
	|| $emailpreenchido == "ajrcursos001@bol.com.br"
	|| $emailpreenchido == "david@starkwoodmarketing.com"
	|| $emailpreenchido == "ajrsoftware@bol.com.br"
	|| $emailpreenchido == "alongamento-de-unhas-paolachaves@gmail.com"
	|| $emailpreenchido == "info@deoleodigitalpublishing.com"
	|| $emailpreenchido == "pedrolucas_maxcotacoes676@divulgasite.com"
	|| $emailpreenchido == "revertendo-calvicie-comprovado2020@gmail.com"
	|| $emailpreenchido == "")
	$emailvalido = "n";
else
	$emailvalido = "s";

$origem = $_POST['origem'];
if ($origem != "whatsapp") {
	// se a mensagem posuir alguns dor termos abaixo, o e-mail não será enviado
	$mensagem = strtolower($_POST['mensagem']);
	if (
		strpos($mensagem, "http://") !== false ||
		strpos($mensagem, "https://") !== false ||
		strpos($mensagem, "www.") !== false ||
		strpos($mensagem, "contact") !== false ||
		strpos($mensagem, "company") !== false ||
		strpos($mensagem, "market") !== false
	) {
		$emailvalido = "n";
	}
}
?>