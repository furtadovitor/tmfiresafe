<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'libs/PHPMailer/src/Exception.php';
require 'libs/PHPMailer/src/PHPMailer.php';
require 'libs/PHPMailer/src/SMTP.php';

ob_start();
include 'envio_email.php';
$corpo_email = ob_get_clean();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    $mail = new PHPMailer(true);

    try {
        // Configuração do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // ou smtp.seudominio.com
        $mail->SMTPAuth = true;
        $mail->Username = 'vitor.furtadopereira@gmail.com';       // Seu e-mail Gmail
        $mail->Password = 'lsbg tffg lcju zuvn';         // Senha de app
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Remetente e destinatário
        $mail->setFrom($email, $nome);
        $mail->addAddress('vitor.furtadopereira@gmail.com'); // Seu email

        // Conteúdo
        $mail->isHTML(true);
        $mail->Subject = 'Mensagem de contato - TM FIRESFE';
        $mail->Body = $corpo_email;
        
        $mail->send();
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.html#contato';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Erro ao enviar mensagem.'); history.back();</script>";
    }
}
