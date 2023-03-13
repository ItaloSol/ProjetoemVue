<?php
$cliente_n = $_POST['cliente_n'];
$cpf_n = $_POST['cpf_n'];
$veiculo_n = $_POST['veiculo_n'];
$tipoveiculo_n = $_POST['tipoveiculo_n'];
$liberado_n = $_POST['liberado_n'];
$pendente_n = $_POST['pendente_n'];
$parcela_n = $_POST['parcela_n'];
$valorparcela_n = $_POST['valorparcela_n'];
$html = '<div >

<link rel="stylesheet" href="https://use.typekit.net/skq4hyl.css">
<h3 style="color: red;">Santander Financiamentos</h3>
<b style="font-family:  sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APROVAÇÃO DE CRÉDITO LIBERADO</b>
<div><br><img style="width: 100%;" src="img/foto1.jpg"></div><br>
<b style="font-family:  sans-serif;">' . $cliente_n . ', CPF ' . $cpf_n . '. Viemos por meio deste, CONFIRMAR
a sua <b style="font-family:  sans-serif;color: red;">APROVAÇÃO</b> em nosso sistema dia 07/03/2023. Sendo realizado um
FINANCIAMENTO sobre a ' . $veiculo_n . '. <br><br>
Valor Liberado: ' . $liberado_n . '<br><br>
Consta em aberto o pagamento pendente de: ' . $pendente_n . ' (ENTRADA + DOCUMENTAÇÃO)<br><br>
Parcelas: ' . $parcela_n . 'x R$ ' . $valorparcela_n . '</b><br><br>
<div><img style="width: 100%;" src="img/foto2.jpg"></div>
*LIBERE SEU FINANCIAMENTO PARA O ACESSO<br><br>
<b style="font-family: "aileron", sans-serif;color: red;">Estamos ao seu lado nessa importante conquista!</b><br><br>
Com o <b style="font-family: "aileron", sans-serif;color: red;">financiamento de moto</b> feito pela intermediação Santander, você encontra uma
opção econômica para se <b style="font-family: "aileron", sans-serif;color: red;">deslocar de forma rápida.</b><br><br>
<b style="font-family: "aileron", sans-serif;color: red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saiba todos os detalhes do seu financiamento e conheça todas os benefícios que podemos
oferecer para você.</b>
<div><img style="width: 100%;" src="img/foto3.jpg"></div>
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Financie em até <b style="font-family: "aileron", sans-serif;color: red;">60x</b> sem taxas.</h1>
<div><img style="width: 100%;" src="img/foto4.jpg"></div></div>
';




require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output($cliente_n, 'I');
