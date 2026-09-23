<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée.']);
    exit;
}

// Récupération et nettoyage des données du formulaire
$fullname  = isset($_POST['fullname']) ? trim(strip_tags($_POST['fullname'])) : '';
$company   = isset($_POST['company']) ? trim(strip_tags($_POST['company'])) : '';
$email     = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$phone     = isset($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : '';
$subject   = isset($_POST['subject']) ? trim(strip_tags($_POST['subject'])) : '';
$message   = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

// Validation des champs obligatoires
if (empty($fullname) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Veuillez remplir tous les champs obligatoires.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Adresse email invalide.']);
    exit;
}

// Configuration du destinataire et du sujet
$to = 'contact@starupkobikanandaku.cd';
$email_subject = "Nouveau message de contact : " . $subject;

// Construction du corps du message
$email_body  = "Vous avez reçu un nouveau message depuis le site Web.\n\n";
$email_body .= "Nom & Prénom : " . $fullname . "\n";
$email_body .= "Structure / Hôpital : " . ($company ?: 'Non précisé') . "\n";
$email_body .= "E-mail : " . $email . "\n";
$email_body .= "Téléphone / WhatsApp : " . $phone . "\n";
$email_body .= "Objet : " . $subject . "\n\n";
$email_body .= "Message :\n" . $message . "\n";

// En-têtes HTTP pour l'envoi de l'e-mail
$headers  = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envoi de l'e-mail
if (@mail($to, $email_subject, $email_body, $headers)) {
    echo json_encode(['success' => true, 'message' => 'Message envoyé avec succès !']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Échec de l\'envoi du message. Veuillez réessayer plus tard.']);
}