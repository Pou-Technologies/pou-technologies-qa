<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolecta y valida los datos del formulario
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $subjects = isset($_POST['subject']) ? array_map('htmlspecialchars', $_POST['subject']) : [];
    $subjectText = isset($_POST['subject_text']) ? htmlspecialchars(trim($_POST['subject_text'])) : '';
    $otherSubject = isset($_POST['other_subject']) ? htmlspecialchars(trim($_POST['other_subject'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

    // Verifica que los campos obligatorios no estén vacíos
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($subjects) && !empty($subjectText) && !empty($message)) {

        // Validación del reCAPTCHA
        if (isset($_POST['g-recaptcha-response'])) {
            $captcha = $_POST['g-recaptcha-response'];
            $secretKey = '6Lei4FgqAAAAAHend7sirt731Lfn-k3cAuYKX7yG'; // Reemplaza con tu clave secreta
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
            $responseKeys = json_decode($response, true);

            // Verifica si el reCAPTCHA fue validado correctamente
            if (intval($responseKeys["success"]) !== 1) {
                // Si reCAPTCHA falla, redirige con error
                header("Location: contact.php?form_status=captcha_error");
                exit();
            }
        } else {
            // Si reCAPTCHA no se completa, redirige con error
            header("Location: contact.php?form_status=captcha_missing");
            exit();
        }

        // Prepara el contenido del correo
        $to = "contact@poutechnologies.com"; // Cambia esto por el correo de destino
        $subject = "New message from the form";

        // Cuerpo del correo
        $body = "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Telephone: $phone\n";
        $body .= "Package: " . implode(', ', $subjects) . "\n";
        $body .= "Service: $subjectText\n";

        // Incluye el campo de "Other Subject" si está presente
        if (!empty($otherSubject)) {
            $body .= "Subject: $otherSubject\n";
        }

        $body .= "Message:\n$message";

        // Configura las cabeceras del correo
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Intenta enviar el correo
        if (mail($to, $subject, $body, $headers)) {
            // Si el correo fue enviado correctamente, redirige con éxito
            header("Location: ../views/contact.php?form_status=success");
            exit();
        } else {
            // Si hay un error al enviar el correo, redirige con error
            header("Location: ../views/contact.php?form_status=error");
            exit();
        }

    } else {
        // Si faltan campos obligatorios, redirige con error
        header("Location: ../views/contact.php?form_status=missing");
        exit();
    }
} else {
    // Si el acceso no fue por POST, muestra un mensaje no válido
    echo "Not valid.";
}
?>
