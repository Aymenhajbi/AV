<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "Aymenhajbipro@gmail.com";
    $subject = "New Contact Form Submission";

    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    $mailBody = "Nom de l'Entreprise: $name\n\n";
    $mailBody .= "Email: $email\n\n";
    $mailBody .= "Décrire le besoin Sécurité/Ménage:\n$message";

    // Send the email
    mail($to, $subject, $mailBody, $headers);
}
?>
