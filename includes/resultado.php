<html lang="pt-br">
<!--
		Integração Digital - Consultoria em Marketing Digital		www.integracaodigital.com.br	-->

<head>
  <title></title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,minimum-scale=1, maximum-scale=1" />
</head>

<body>

  <?php
  include_once("conexao.php");

  // Create connection
  $conn = new mysqli($servidor, $usuario, $senha, $dbname);
  mysqli_set_charset($conn, "utf8");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT id, nome, email, telefone, mensagem, created FROM formulario";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo "
		<strong>Nome:</strong> " . $row["nome"] . " <br /> "
        . "<strong>E-mail:</strong> " . $row["email"] . "<br /> "
        . "<strong>Telefone:</strong> " . $row["telefone"] . " <br />"
        . "<strong>Mensagem:</strong> " . $row["mensagem"] . " <br />"
        . "<strong>Data:</strong> " . $row["created"] . "<br><br><hr><br><br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>

</body>

</html>