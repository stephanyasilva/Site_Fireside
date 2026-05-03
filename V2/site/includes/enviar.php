<?php

header('Content-Type: application/json');

// 🔒 Bloqueia acesso direto indevido
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        "success" => false,
        "message" => "Acesso inválido."
    ]);
    exit;
}

require __DIR__ . '/../assets/phpmailer/Exception.php';
require __DIR__ . '/../assets/phpmailer/PHPMailer.php';
require __DIR__ . '/../assets/phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ==================
// CAPTURA + SANITIZAÇÃO
// ==================
$nome = trim($_POST['nome'] ?? '');
$empresa = trim($_POST['empresa'] ?? '');
$email = trim($_POST['email'] ?? '');
$telefone = trim($_POST['telefone'] ?? '');
$servico = trim($_POST['servico'] ?? '');
$mensagem = trim($_POST['mensagem'] ?? '');

// ==================
// VALIDAÇÃO
// ==================
if (empty($nome) || empty($email) || empty($mensagem)) {
    echo json_encode([
        "success" => false,
        "message" => "Preencha os campos obrigatórios."
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        "success" => false,
        "message" => "E-mail inválido."
    ]);
    exit;
}

// ==================
// ENVIO
// ==================
$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contato@firesideservicos.com.br';
    $mail->Password = '|;79RblZ:6p'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('contato@firesideservicos.com.br', 'Site Fireside');
    $mail->addAddress('contato@firesideservicos.com.br');

    // evita problema de spam
    $mail->addReplyTo($email, $nome);

    $mail->isHTML(true);
    $mail->Subject = 'Novo contato pelo site';

    $mail->Body = "
        <strong>Nome:</strong> " . htmlspecialchars($nome) . " <br>
        <strong>Empresa:</strong> " . htmlspecialchars($empresa) . " <br>
        <strong>Email:</strong> " . htmlspecialchars($email) . " <br>
        <strong>Telefone:</strong> " . htmlspecialchars($telefone) . " <br>
        <strong>Serviço:</strong> " . htmlspecialchars($servico) . " <br><br>
        <strong>Mensagem:</strong><br>" . nl2br(htmlspecialchars($mensagem)) . "
    ";

    $mail->send();

    echo json_encode([
        "success" => true,
        "message" => "Mensagem enviada com sucesso!"
    ]);

} catch (Exception $e) {

    echo json_encode([
        "success" => false,
        "message" => "Erro ao enviar. Tente novamente."
        // Em dev você pode usar:
        // "message" => $mail->ErrorInfo
    ]);
}


/* recapcha */
$recaptcha = $_POST['g-recaptcha-response'] ?? '';

if (empty($recaptcha)) {
    echo json_encode([
        "success" => false,
        "message" => "Falha no reCAPTCHA."
    ]);
    exit;
}