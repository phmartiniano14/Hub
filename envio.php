
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['tel'];
$plano = $_POST['plano'];
$mensagem = $_POST['conteudo'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');


if($nome != "" &&  $email != "" && $plano != ""){

// Compo E-mail
$arquivo = "
<style type='text/css'>
body {
margin:0px;
font-family:Verdane;
font-size:12px;
color: #666666;
}
a{
color: #666666;
text-decoration: none;
}
a:hover {
color: #FF0000;
text-decoration: none;
}
</style>
  <html>
      <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
          <tr>
            <td>
              <tr>
                <td width='500'>Nome:$nome</td>
              </tr>
              <tr>
                <td width='320'>E-mail:<b>$email</b></td>
              </tr>
              <tr>
                <td width='320'>celular:<b>$telefone</b></td>
              </tr>
              <tr>
                <td width='320'>data da festa:<b>$plano</b></td>
              </tr>
              <tr>
                <td width='320'>Mensagem:$mensagem</td>
              </tr>
          </td>
        </tr>  
        <tr>
          <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
        </tr>
      </table>
  </html>
";

//enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = "adm1.ubuntulasthub@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo site do cliente $nome";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: contato da ubuntu last hub <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";s
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo'<script>alert("seu email foi enviado, você vai ser redirecionado para a pagina inicial")</script>';
  echo " <meta http-equiv='refresh' content='1;URL=index.html'>";
  
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }

}
else{
  echo'<script>alert("informe as corretamente as informações")</script>';
    echo " <meta http-equiv='refresh' content='1;URL=index.html'>";
}


?>


