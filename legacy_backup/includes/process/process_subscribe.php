<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Agrega lo que quieras mostrar

    // Recolecta y valida el nombre
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : '';
    // Recolecta y valida el correo
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';

    // Verifica que el campo de correo no esté vacío y sea válido
    if (!empty($name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {


        // Validación del reCAPTCHA
        if (isset($_POST['g-recaptcha-response'])) {
            $captcha = $_POST['g-recaptcha-response'];
            $secretKey = '6Lei4FgqAAAAAHend7sirt731Lfn-k3cAuYKX7yG'; // Reemplaza con tu clave secreta
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
            $responseKeys = json_decode($response, true);

            // Verifica si el reCAPTCHA fue validado correctamente
            if (intval($responseKeys["success"]) !== 1) {
                // Si reCAPTCHA falla, redirige con error
               // Si el correo fue enviado correctamente, redirige con éxito a la misma página
            $redirect_url = $_SERVER['HTTP_REFERER'] . '?newsletter_status=error';
            header("Location: $redirect_url");
            exit();
            }
        } else {
            // Si reCAPTCHA no se completa, redirige con error
            // Si el correo fue enviado correctamente, redirige con éxito a la misma página
            $redirect_url = $_SERVER['HTTP_REFERER'] . '?newsletter_status=invalid';
            header("Location: $redirect_url");
            exit();
        }

        // Prepara el contenido del correo
        $to = "contact@poutechnologies.com";  // Cambia esto por tu correo de empresa
        $subject = "Newsletter subscription";

        // Cuerpo del correo
        $body = "New Newsletter Subscription:\n";
        //agregar
        $body .= "Name: $name\n";  // Agregar el nombre del suscriptor
        $body .= "Email: $email";

        // Sanitización
        $from = filter_var('no-reply@poutechnologies.com', FILTER_SANITIZE_EMAIL);
        $reply_to = filter_var('no-reply@poutechnologies.com', FILTER_SANITIZE_EMAIL);

        // Construcción segura de cabeceras
        $headers = "From: Pou Technologies <no-reply@poutechnologies.com>\r\n";
        $headers .= "Reply-To: no-reply@poutechnologies.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


     
        // Intenta enviar el correo
        if (mail($to, $subject, $body, $headers)) {
            // Si el correo fue enviado correctamente, redirige con éxito a la misma página
            $redirect_url = $_SERVER['HTTP_REFERER'] . '?newsletter_status=success';
            header("Location: $redirect_url");
            exit();
        } else {
            // Si hay un error al enviar el correo, redirige con error
            $redirect_url = $_SERVER['HTTP_REFERER'] . '?newsletter_status=error';
            header("Location: $redirect_url");
            exit();
        }

    } else {
        // Si el correo no es válido, redirige con error
        $redirect_url = $_SERVER['HTTP_REFERER'] . '?newsletter_status=invalid';
        header("Location: $redirect_url");
        exit();
    }
} else {
    // Si el acceso no fue por POST, muestra un mensaje no válido
    echo "Not valid.";
}
?>
