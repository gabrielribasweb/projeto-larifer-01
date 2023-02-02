<?php

function debug_to_console($data)
{
  $output = $data;
  if (is_array($output))
    $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

function isMobileDevice()
{
  return preg_match(
    "/(android|avantgo|blackberry|bolt|boost|cricket|docomo
|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",
    $_SERVER["HTTP_USER_AGENT"]
  );
}
if (isMobileDevice()) {
  //echo "Mobile Browser Detected";
  debug_to_console("Dispositivo mobile detectado");
} else {
  //echo "Mobile Browser Not Detected";
  debug_to_console("Dispositivo desktop detectado");
}

require("includes/blacklist.php");
// caso seja um email que não esteja na lista negra
if ($emailvalido == "s") {
  //Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
  require("phpmailer/class.phpmailer.php");
  require("phpmailer/PHPMailerAutoload.php");
  require("includes/principal.php");

  //Inicia a classe PHPMailer
  $mail = new PHPMailer();

  $origem = $_POST['origem'];
  //$dispositivo = $_POST['dispositivo-whatsapp'];

  if ($origem == "whatsapp") {
    $nome = $_POST['whatsapp-nome'];
    $email = $_POST['whatsapp-email'];
    $telefone = $_POST['whatsapp-telefone'];
    $mensagem = $_POST['whatsapp-mensagem'];
  } else {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
  }

  $urlPagina = $_SERVER['HTTP_REFERER'];

  //Define os dados do servidor e tipo de conexão
  $mail->IsSMTP(); // Define que a mensagem será SMTP
  $mail->Host = 'br.hostgator.com.br'; // Endereço do servidor SMTP
  $mail->SMTPAuth = true; // Autenticação
  $mail->Port = 587;
  $mail->Username = ''; // Usuário do servidor SMTP
  $mail->Password = ''; // Senha da caixa postal utilizada
  $mail->SetFrom($nome, $email);
  $mail->From = "$email";
  $mail->FromName = "$nome";

  // Definição sem horário de verão
  //date_default_timezone_set("America/Fortaleza");
  date_default_timezone_set('America/Sao_Paulo');
  $date       = date("d/m/Y H:i:s");
  $ip       = getenv("REMOTE_ADDR");

  //Define os destinatário(s)
  //$mail->AddAddress('suporte@integracaodigital.com.br',$nomeSite);
  //$mail->AddAddress('teste.integracaodigital@gmail.com');
  //$mail->AddCC('', 'Copia'); 
  //$mail->AddBCC('suporte@integracaodigital.com.br', 'Copia Oculta');

  //Define os dados técnicos da Mensagem
  $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
  $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

  //Texto e Assunto
  $mail->Subject  = "Contato via website (" . $origem . ")"; // Assunto da mensagem
  $mail->Body .= " <strong>Name:</strong> " . $nome . "<br>"; // Texto da mensagem
  $mail->Body .= " <strong>E-mail:</strong> " . $email . "<br>"; // Texto da mensagem
  $mail->Body .= " <strong>Mensagem:</strong> " . nl2br($mensagem) . "<br>"; // Texto da mensagem

  $mail->Body .= utf8_decode("<b>Pagina do Envio: </b>$urlPagina <br />");

  $mail->Body .= "<strong>E-mail enviado em:</strong> $date <br /> <strong>IP:</strong> $ip";


  //PREPARA O CONTEÚDO A SER GRAVADO
  $conteudo = "
						Nome: $nome
						E-mail: $email
						Telefone: $telefone 
						Mensagem: $mensagem
						Pagina do envio: $urlPagina
						Data: $date
						IP: $ip
						----------------------------------------------------------------------------------\n";


  //ARQUIVO TXT
  $arquivo = "email.txt";

  //TENTA ABRIR O ARQUIVO TXT
  if (!$abrir = fopen($arquivo, "a")) {
    echo "Erro abrindo arquivo ($arquivo)";
    exit;
  }

  //ESCREVE NO ARQUIVO TXT
  if (!fwrite($abrir, $conteudo)) {
    print "Erro escrevendo no arquivo ($arquivo)";
    exit;
  }

  //Anexos (opcional)
  //$mail->AddAttachment("c:", "novo_nome.pdf");

  //Envio da Mensagem
  $enviado = $mail->Send();

  //Exibe uma mensagem de resultado
  if ($origem != "whatsapp") {
    if ($enviado) {
      require("includes/processa.php");
      echo "<script>window.location = \"obrigado.php\"</script>";
    } else {
      require("includes/erro-log.php");
      echo "<script>alert('Não foi possível enviar o e-mail. Por favor tente novamente!');window.history.go(-1);</script>	";
      echo "Informações do erro: 
				" . $mail->ErrorInfo;
    }
  } else {
    // Caso o envio seja feito pelo preenchimento de WhatsApp
    if ($enviado) {
      require("includes/processa.php");
      if (!isMobileDevice())
        echo "<script>window.location = \"https://web.whatsapp.com/send?phone=55" . $ddd . $whatsapp . "&text=Olá!%20Meu%20nome%20é%20" . $nome . "%20e%20gostaria%20de%20mais%20informações.\"</script>";
      else
        echo "<script>window.location = \"//api.whatsapp.com/send?phone=55" . $ddd . $whatsapp . "&text=Olá!%20Meu%20nome%20é%20" . $nome . "%20e%20gostaria%20de%20mais%20informações.\"</script>";
    } else {
      require("includes/erro-log.php");
      if (!isMobileDevice())
        echo "<script>window.location = \"https://web.whatsapp.com/send?phone=55" . $ddd . $whatsapp . "&text=Olá!%20Meu%20nome%20é%20" . $nome . "%20e%20gostaria%20de%20mais%20informações.\"</script>";
      else
        echo "<script>window.location = \"//api.whatsapp.com/send?phone=55" . $ddd . $whatsapp . "&text=Olá!%20Meu%20nome%20é%20" . $nome . "%20e%20gostaria%20de%20mais%20informações.\"</script>";
    }
  }
}
// caso seja um email que esteja na lista negra, não faz nada
else {
  echo "<script>window.location = \"obrigado.php\"</script>";
}
