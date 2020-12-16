<?php
$nome = $_POST['namcont'];
$tel = $_POST['telcont'];
$email = $_POST['mailcont'];
$men = $_POST['Mensagem'];

	$teste = 'location:https://api.whatsapp.com/send?phone=5511988976000&text='."nome: ".'+'.$nome.'+'."<br>   email: ".'+'.$email.'+'."<br>   sua mensagem: ".'+'.$men.';

$link = header($teste);

$this->$link;

?>