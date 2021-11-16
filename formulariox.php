<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];

    $niver = $_POST['niver'];

    list($ano,$mes,$dia) = explode('-',$niver);

    $hoje = mktime(0,0,0,date('m'),date('d'),date('Y'));

    $nascimento = mktime(0,0,0,$mes,$dia,$ano);

    $idadehoje= floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

    $idadefutura = $idadehoje + 1;

$rua = $_POST['rua'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

echo "Obrigada por nos enviar seus dados, $nome $sobrenome. \n";
echo "Para comemorar seu próximo aniversário de $idadefutura anos, lhe enviaremos um presente. \n ";
echo "Você receberá no endereço $rua - $cidade / $estado. No período informado. \n ";
echo "Fique atento ao seu e-mail $email para mais informações. \n";

?>