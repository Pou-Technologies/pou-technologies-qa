<!-- Header -->
<?php
$pageTitle = "403"; // Define el título de la página
include('../includes/header.php');
?>

<!-- Principal Content -->

    <section class="container text-center">
        <!-- Imagen principal -->
        <img src="/images/errors/403.png" alt="403 Forbidden" class="img-fluid mb-4" style="max-width: 600px;">
        <!-- Título y descripción -->
        <h1 class="display-4 text-danger fw-bold">403</h1>
        <p class="lead">Oops! You do not have permission to access this page.</p>
        <!-- Botón de regreso -->
        <a href="/index.php" class="btn btn-secondary">Home</a>
    </section>

    

<!-- Footer -->
<?php
include '../includes/footer.php'

?>