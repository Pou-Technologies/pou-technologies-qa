<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Validación de reCAPTCHA
    $recaptcha_secret = "6Lei4FgqAAAAAHend7sirt731Lfn-k3cAuYKX7yG"; // Reemplaza con tu clave secreta
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';
    
    // Verificar reCAPTCHA con Google
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_data = [
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];
    
    $recaptcha_options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($recaptcha_data)
        ]
    ];
    
    $recaptcha_context = stream_context_create($recaptcha_options);
    $recaptcha_result = json_decode(file_get_contents($recaptcha_url, false, $recaptcha_context));
    
    if (!$recaptcha_result->success) {
        // Error en reCAPTCHA
        $redirect_url = $_SERVER['HTTP_REFERER'] . '?newsletter_status=captcha_error';
        header("Location: $redirect_url");
        exit();
    }

    // 2. Validación de campos del formulario
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8') : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    
    // Verificar campos obligatorios
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $redirect_url = $_SERVER['HTTP_REFERER'] . '?newsletter_status=invalid';
        header("Location: $redirect_url");
        exit();
    }

    // 3. Preparar y enviar el correo
    $to = "contact@poutechnologies.com";
    $subject = "Nueva suscripción al newsletter";
    
    // Cuerpo del correo en formato HTML y texto plano
    $body = "
    <html>
    <head>
        <title>Nueva suscripción</title>
    </head>
    <body>
        <h2>Nueva suscripción al newsletter</h2>
        <p><strong>Nombre:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Fecha:</strong> " . date('Y-m-d H:i:s') . "</p>
    </body>
    </html>
    ";
    
    // Cabeceras para correo HTML
    $headers = "From: no-reply@poutechnologies.com\r\n";
    $headers .= "Reply-To: no-reply@poutechnologies.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // 4. Intentar enviar el correo
    try {
        $mail_sent = mail($to, $subject, $body, $headers);
        
        if ($mail_sent) {
            // Registrar en base de datos si es necesario (opcional)
            // file_put_contents('subscriptions.log', "$email,$name,".date('Y-m-d H:i:s').PHP_EOL, FILE_APPEND);
            
            $redirect_url = $_SERVER['HTTP_REFERER'] . '?newsletter_status=success';
            header("Location: $redirect_url");
            exit();
        } else {
            throw new Exception('Error al enviar el correo');
        }
    } catch (Exception $e) {
        $redirect_url = $_SERVER['HTTP_REFERER'] . '?newsletter_status=error';
        header("Location: $redirect_url");
        exit();
    }
} else {
    // Método no permitido
    http_response_code(405);
    die("Método no permitido");
}
?>