<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Agrega lo que quieras mostrar

    // Recolecta y valida el nombre
    $name = isset($_POST['name']) ? filter_var($_POST['name'], FILTER_SANITIZE_EMAIL) : '';
    // Recolecta y valida el correo
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';

    // Verifica que el campo de correo no esté vacío y sea válido
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // Prepara el contenido del correo
        $to = "contact@poutechnologies.com";  // Cambia esto por tu correo de empresa
        $subject = "Newsletter subscription";

        // Cuerpo del correo
        $body = "New Newsletter Subscription:\n";
        //agregar
        $body .= "Name: $name\n";  // Agregar el nombre del suscriptor
        $body .= "Email: $email";

        // Configura las cabeceras del correo
        $headers = "From: no-reply@poutechnologies.com\r\n";
        $headers .= "Reply-To: no-reply@poutechnologies.com\r\n";

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
