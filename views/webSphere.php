<!-- Header -->
<?php
$pageTitle = "WebSphere"; // Define el título de la página
include('../includes/header.php');
?>

<style>
    .navbar-brand {
        font-weight: bold;
        font-size: 1.5rem;
    }

    .hero-section {
        background-image: url('../images/webSiteImages/bgSeo.png');
        /* Ruta de la imagen */
        background-size: cover;
        /* Ajusta la imagen para cubrir toda la sección */
        background-position: center;
        /* Centra la imagen */
        background-repeat: no-repeat;
        /* Evita que la imagen se repita */
        color: white;
        /* Color del texto */
        padding: 100px 0;
        /* Espaciado interno */
        text-align: end;

    }

    .section-title {
        font-size: 2rem;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .section-content {
        font-size: 1.1rem;
        line-height: 1.8;
    }

    

/*DETAILS BUTTON */
.details-btn {
        display: none;
        transition: opacity 0.3s ease-in-out;
    }

    .feature-box:hover .details-btn {
        display: inline-block;
        opacity: 1;
    }
    
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="text-secondary">Discover WebSphere</h1>
        <p class="lead text-secondary">The Digital Solution Your Company Needs</p>
    </div>
</section>


<!-- What is WebSphere Section -->
<section class="what-is-section py-5">
    <div class="container">
        <h2 class="text-muted" style="font-weight: normal">What is WebSphere</h2>
        <p>
            WebSphere is an all-in-one digital platform designed to help businesses build, optimize, and grow their online presence.
            From professional web design to advanced SEO strategies, we provide the tools and expertise you need to succeed in the digital world.
            Whether you're a small business or a large enterprise, WebSphere is your partner in achieving online success.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container px-4 py-5" id="icon-grid">
        <h2 class="pb-2 border-bottom">What Includes</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            <!-- SEO -->
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-search-heart flex-shrink-0 me-3" viewBox="0 0 16 16">
                    <!-- Define el degradado -->
                    <defs>
                        <linearGradient id="tornasol-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#007bff;stop-opacity:1" /> <!-- Azul -->
                            <stop offset="50%" style="stop-color:#6f42c1;stop-opacity:1" /> <!-- Morado -->
                            <stop offset="100%" style="stop-color:#e83e8c;stop-opacity:1" /> <!-- Rosa -->
                        </linearGradient>
                    </defs>
                    <!-- Aplica el degradado al ícono -->
                    <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018" fill="url(#tornasol-gradient)" />
                    <path d="M13 6.5a6.47 6.47 0 0 1-1.258 3.844q.06.044.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11" fill="url(#tornasol-gradient)" />
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">SEO</h3>
                    <p>Optimize your website to rank higher on search engines like Google.</p>
                    <a href="/views/seo.php" class="text-primary fw-bold">Details</a>
                </div>
            </div>

            <!-- ANALYTICS -->
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-graph-up-arrow flex-shrink-0 me-3" viewBox="0 0 16 16">
                    <!-- Define el degradado -->
                    <defs>
                        <linearGradient id="tornasol-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#007bff;stop-opacity:1" /> <!-- Azul -->
                            <stop offset="50%" style="stop-color:#6f42c1;stop-opacity:1" /> <!-- Morado -->
                            <stop offset="100%" style="stop-color:#e83e8c;stop-opacity:1" /> <!-- Rosa -->
                        </linearGradient>
                    </defs>
                    <!-- Aplica el degradado al ícono -->
                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5" fill="url(#tornasol-gradient)" />
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Analytics</h3>
                    <p>Track demographics, popular sections, and user behavior to make data-driven.</p>
                    <a href="#" class="text-primary fw-bold">Details</a>              
                </div>
            </div>
            <!-- BRANDING -->
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-vector-pen flex-shrink-0 me-3" viewBox="0 0 16 16">
                    <!-- Define el degradado -->
                    <defs>
                        <linearGradient id="tornasol-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#007bff;stop-opacity:1" /> <!-- Azul -->
                            <stop offset="50%" style="stop-color:#6f42c1;stop-opacity:1" /> <!-- Morado -->
                            <stop offset="100%" style="stop-color:#e83e8c;stop-opacity:1" /> <!-- Rosa -->
                        </linearGradient>
                    </defs>
                    <!-- Aplica el degradado al ícono -->
                    <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z" fill="url(#tornasol-gradient)" />
                    <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086z" fill="url(#tornasol-gradient)" />
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Branding Design</h3>
                    <p>Create a unique identity for your business with a custom logo and cohesive branding.</p>
                    <a href="#" class="text-primary fw-bold">Details</a>
                </div>
            </div>
            <!-- EMAIL -->
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-envelope-open flex-shrink-0 me-3" viewBox="0 0 16 16">
                    <!-- Define el degradado -->
                    <defs>
                        <linearGradient id="tornasol-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#007bff;stop-opacity:1" /> <!-- Azul -->
                            <stop offset="50%" style="stop-color:#6f42c1;stop-opacity:1" /> <!-- Morado -->
                            <stop offset="100%" style="stop-color:#e83e8c;stop-opacity:1" /> <!-- Rosa -->
                        </linearGradient>
                    </defs>
                    <!-- Aplica el degradado al ícono -->
                    <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882zM15 7.383l-4.778 2.867L15 13.117zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765z" fill="url(#tornasol-gradient)" />
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Business Email</h3>
                    <p>Enhance your brand's credibility and build trust with your clients with a custom business email. </p>
                    <a href="#" class="text-primary fw-bold">Details</a>
                </div>
            </div>
            <!-- CONTACT FORM -->
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-ui-checks flex-shrink-0 me-3" viewBox="0 0 16 16">
                    <!-- Define el degradado -->
                    <defs>
                        <linearGradient id="tornasol-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#007bff;stop-opacity:1" /> <!-- Azul -->
                            <stop offset="50%" style="stop-color:#6f42c1;stop-opacity:1" /> <!-- Morado -->
                            <stop offset="100%" style="stop-color:#e83e8c;stop-opacity:1" /> <!-- Rosa -->
                        </linearGradient>
                    </defs>
                    <!-- Aplica el degradado al ícono -->
                    <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" fill="url(#tornasol-gradient)" />
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Integrated Contact Form</h3>
                    <p>Make it easy for customers to reach you with a seamless contact form..</p>
                    <a href="#" class="text-primary fw-bold">Details</a>
                </div>
            </div>
            <!--  -->
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-shield-check flex-shrink-0 me-3" viewBox="0 0 16 16">
                    <defs>
                        <linearGradient id="tornasol-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#007bff;stop-opacity:1" /> <!-- Azul -->
                            <stop offset="50%" style="stop-color:#6f42c1;stop-opacity:1" /> <!-- Morado -->
                            <stop offset="100%" style="stop-color:#e83e8c;stop-opacity:1" /> <!-- Rosa -->
                        </linearGradient>
                    </defs>
                    <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" fill="url(#tornasol-gradient)" />
                    <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" fill="url(#tornasol-gradient)" />
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Speed and Security Optimization</h3>
                    <p>We optimize loading times and implement advanced security to protect your site and user data.</p>
                    <a href="#" class="text-primary fw-bold">Details</a>
                </div>
            </div>

            <!-- 7 -->
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-hand-thumbs-up flex-shrink-0 me-3" viewBox="0 0 16 16">
                    <!-- Define el degradado -->
                    <defs>
                        <linearGradient id="tornasol-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#007bff;stop-opacity:1" /> <!-- Azul -->
                            <stop offset="50%" style="stop-color:#6f42c1;stop-opacity:1" /> <!-- Morado -->
                            <stop offset="100%" style="stop-color:#e83e8c;stop-opacity:1" /> <!-- Rosa -->
                        </linearGradient>
                    </defs>
                    <!-- Aplica el degradado al ícono -->
                    <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" fill="url(#tornasol-gradient)"/>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Social Media Integration</h3>
                    <p>Let visitors engage with your content across platforms, boosting your online presence.</p>
                    <a href="#" class="text-primary fw-bold">Details</a>
                </div>
            </div>


            <!-- 8 -->
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-phone flex-shrink-0 me-3" viewBox="0 0 16 16">
                    <!-- Define el degradado -->
                    <defs>
                        <linearGradient id="tornasol-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#007bff;stop-opacity:1" /> <!-- Azul -->
                            <stop offset="50%" style="stop-color:#6f42c1;stop-opacity:1" /> <!-- Morado -->
                            <stop offset="100%" style="stop-color:#e83e8c;stop-opacity:1" /> <!-- Rosa -->
                        </linearGradient>
                    </defs>
                    <!-- Aplica el degradado al ícono -->
                    <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" fill="url(#tornasol-gradient)" />
                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" fill="url(#tornasol-gradient)" />
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis text-secondary">Responsive Design Integration</h3>
                    <p>Ensure your website looks and works perfectly on all devices—desktops, tablets, and mobiles.</p>
                    <a href="#" class="text-primary fw-bold">Details</a>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- SHOWCASE -->
<section class="container py-5" style="margin-top: 100px">
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="text-center mb-5 text-secondary font-weight-bold" id="multicolor" style="font-size: 2.5rem; letter-spacing: 1px;">Showcase</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">
            <div class="col">
                <a href="https://lovely-kitten-4fbc7a.netlify.app/" target="_blank" class="text-decoration-none">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg hover-zoom" 
                        style="background-image: url('/images/websitePictures/furnitureStore.png'); 
                                background-size: 120%; /* Aleja la imagen */
                                background-position: center; /* Centra la imagen */
                                background-repeat: no-repeat;"> <!-- Evita que la imagen se repita -->
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
                            <ul class="d-flex list-unstyled mt-auto">
                            </ul>
                        </div>
                    </div>
                </a>
                <p class="text-center mt-2 py-3 text-secondary">Multimueble</p> 
            </div>
            
            <div class="col">
                <a href="http://onfiery.com" target="_blank" class="text-decoration-none">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg hover-zoom" 
                        style="background-image: url('/images/websitePictures/onfiery.png'); 
                                background-size: 120%; /* Aleja la imagen */
                                background-position: center; /* Centra la imagen */
                                background-repeat: no-repeat;"> <!-- Evita que la imagen se repita -->
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
                            <ul class="d-flex list-unstyled mt-auto">
                            </ul>
                        </div>
                    </div>
                </a>
                <p class="text-center mt-2 py-3 text-secondary">Onfiery</p> 
            </div>
            <div class="col">
                <a href="http://easycleanca.com" target="_blank" class="text-decoration-none">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg hover-zoom" 
                        style="background-image: url('/images/websitePictures/easyClean.png'); 
                                background-size: 120%; /* Aleja la imagen */
                                background-position: center; /* Centra la imagen */
                                background-repeat: no-repeat;"> <!-- Evita que la imagen se repita -->
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
                            <ul class="d-flex list-unstyled mt-auto">
                            </ul>
                        </div>
                    </div>
                </a>
                <p class="text-center mt-2 py-3 text-secondary">Easy Clean</p> 
            </div>
        </div>
    </div>
</section>



<!-- Feature -->
<section class="container py-5">
    <div class="p-5 mb-4 bg-body-tertiary rounded-5" style="background-image: url('/images/webSiteImages/sphere.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
      <div class="container-fluid py-5">
        <h1 class="display-5 text-secondary">Meet WebSphere</h1>
        <p class="col-md-8 fs-4">
        Learn how websphere could adapt to your project and make it successful.
        </p>
        <a href="/views/contact.php" class="btn btn-secondary btn-lg">Let's start</a>
      </div>
    </div>
</section>







<!-- Footer -->
<?php
include('../includes/footer.php');
?>