<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Tim Personal Trainer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="corpo">
<div id="topo"><a href="index.php"><img src="topo.jpg" border="0"></a></div>
<hr>
<div id="contato">
        <?php

        // Handle POST method.
        if ($_POST)
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comments = $_POST['comments'];
            $telefone = $_POST['telefone'];

            // Compose simple text message:
            $message = "Tim Personal Trainer - Contato de $name ($email - $telefone)\n\nMensagem:\n\n$comments";

            // Send message to bob@microsoft.com
            mail("timpersonaltrainer@hotmail.com", "Contato", $message);

            // Thank the generous user
            echo "<h1>Mensagem enviada com sucesso!</h1>\n";
        }
        else
        {

        ?>
<h1>Contato</h1>
  <form action="<?= $PHP_SELF ?>" method="post">
    <table width="100%"  border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="100" align="right">nome:</td>
        <td><input name="name" type="text" id="nome"></td>
      </tr>
      <tr>
        <td width="100" align="right">e-mail:</td>
        <td><input name="email" type="text" id="email"></td>
      </tr>
      <tr>
        <td width="100" align="right">telefone:</td>
        <td><input name="telefone" type="text" id="telefone" maxlength="10"></td>
      </tr>
      <tr>
        <td width="100" align="right" valign="top">mensagem:</td>
        <td><textarea name="comments" rows="10" id="mensagem"></textarea></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td><input type="submit" value="enviar"></td>
      </tr>
    </table>
  </form>

        <?php

        }

        ?>
  </div>
<hr>
<div id="rodape"><a href="http://www.glacial.cjb.net/" target="_blank">~ glacial solu&ccedil;&otilde;es para web ~</a></div>
</div>
</body>
</html>
