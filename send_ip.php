<?php
if(isset($_POST['submit'])) {
    // Obter o endereço IP do visitante
    $ip = $_SERVER['REMOTE_ADDR'];

    // Configurar o e-mail
    $to = "klayveralencar2001@gmail.com";
    $subject = "Endereço IP do Visitante";
    $message = "O endereço IP do visitante é: " . $ip;
    $headers = "From: capturaip <klayveralencar2001@gmail.com>";

    // Enviar o e-mail
    mail($to, $subject, $message, $headers);

    // Redirecionar de volta para a página anterior ou para uma página de confirmação
    header("Location: pagina-anterior.html");
    exit;
}
?>
