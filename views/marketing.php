
  <!-- Header -->
<?php
$pageTitle = "Marketing"; // Define el título de la página
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
   

</style>


<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="text-secondary">Discover Digital Marketing</h1>
        <p class="lead text-secondary">Digital Marketing Strategies that Generate Real Results</p>
    </div>
</section>

<!-- What is marketing Section -->
<section class="what-is-section py-5">
    <div class="container">
        <h2 class="text-muted" style="font-weight: normal">What is Digital Marketing</h2>
        <p>
        Digital Marketing is the key to unlocking your business's full potential in the online world.
        From targeted social media campaigns to advanced SEO strategies, we provide you with the tools
        and expertise you need to attract, engage and convert your audience. Whether you're a small business or a
        large corporation, Digital Marketing is your ally to drive growth and achieve measurable results.
        </p>
    </div>
</section>

<!-- Servicios -->
<section id="servicios" class="py-5">
    <div class="container text-center">
        <h2 id="multicolor" class="pb-4">Our Services</h2>
        <div class="row">
            <!-- Servicio 1 -->
            <div class="col-md-4 py-2">
                <div class="card service-card">
                    <img src="/images/webSiteImages/social.png" class="card-img-top" alt="Servicio 1">
                    <div class="card-body">
                        <h5 class="card-title">Social Media Marketing</h5>
                        <p class="card-text">We manage your social media accounts, creating engaging content and advertising campaigns to increase your visibility and engagement.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 2 -->
            <div class="col-md-4 py-2">
                <div class="card service-card">
                    <img src="../images/webSiteImages/campains.png" class="card-img-top" alt="Servicio 2">
                    <div class="card-body">
                        <h5 class="card-title">Advertising Campaigns</h5>
                        <p class="card-text">We create customized advertising campaigns on Google Ads, Facebook and Instagram to reach your target audience efficiently.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 3 -->
            <div class="col-md-4 py-2">
                <div class="card service-card">
                    <img src="../images/webSiteImages/newsletter.png" class="card-img-top" alt="Servicio 3">
                    <div class="card-body">
                    <h5 class="card-title">Newsletter</h5>
                    <p class="card-text">We design professional and engaging newsletters that keep your audience informed, build loyalty, and drive action through effective communication.</p>
                    </div>
                </div>
            </div>
             <!-- Servicio 4 -->
             <div class="col-md-4 py-2">
                <div class="card service-card">
                    <img src="../images/webSiteImages/logo.png" class="card-img-top" alt="Servicio 1">
                    <div class="card-body">
                        <h5 class="card-title">Logo Design</h5>
                        <p class="card-text">We manage your social media accounts, creating engaging content and advertising campaigns to increase your visibility and engagement.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 5 -->
            <div class="col-md-4 py-2">
                <div class="card service-card">
                    <img src="../images/webSiteImages/promotional.png" class="card-img-top" alt="Servicio 2">
                    <div class="card-body">
                    <h5 class="card-title">Promotional Material Design</h5>
                    <p class="card-text">We design eye-catching promotional materials that effectively communicate your message and elevate your brand.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 6 -->
            <div class="col-md-4 py-2">
                <div class="card service-card">
                    <img src="../images/webSiteImages/video.png" class="card-img-top" alt="Servicio 3">
                    <div class="card-body">
                    <h5 class="card-title">Video Design</h5>
                    <p class="card-text">We create dynamic and engaging videos tailored to promote your brand or business and captivate your audience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container d-flex align-items-center vh-100 py-5">
  <div class="row align-items-center w-100">
    <!-- Columna para el texto -->
    <div class="col-md-6 order-md-1 order-2">
      <h2 class="mb-5">Why hire our marketing service?</h2>
      <p class="lead">
        Our marketing service is designed to help you stand out in the digital world. 
        We help you increase your visibility, attract potential customers and convert 
        visits into sales through personalized and effective strategies.
      </p>
      <p>
        By working with us, you'll have access to strategic campaigns,
        social media management, and search engine optimization (SEO)
        to position yourself ahead of your competition. 
      </p>
      <a href="../views/contact.php" class="btn btn-secondary mt-3">Contact us</a>
    </div>
    <!-- Columna para la imagen -->
    <div class="col-md-6 text-center order-md-2 order-1 mb-4 mb-md-0">
      <img src="/images/webSiteImages/marketing.png" alt="Estrategias de marketing" class="img-fluid rounded">
    </div>
  </div>
</section>

<!--CARDS-->

<section class="container" style="margin-top: 100px">
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom text-secondary text-center py-5" style="font-weight: normal; font-size: 3em;" id="multicolor">Showcase</h2>
        
<!-- Newsletter   SHOWCASE        -->
        <div class="container mt-5">
            <h1 class="text-center mb-4 text-secondary lead" style="font-weight: normal">
                <a href="/newsletter.php" class="text-secondary" style="text-decoration: none;" id="invitationLink">Newsletter</a>
            </h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/newsletter/newsletter1.png" alt="Imagen 2" class="img-fluid expandable-image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/newsletter/newsletter2.png" alt="Imagen 3" class="img-fluid expandable-image">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/newsletter/newsletter3.png" alt="Imagen 3" class="img-fluid expandable-image">
                    </div>
                </div>
            </div>
        </div>
<!-- MENUS SHOWCASE          -->
        <div class="container mt-5">
            <h1 class="text-center mb-4 text-secondary lead" style="font-weight: normal">Menu's</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/menu/2.png" alt="Imagen 2" class="img-fluid expandable-image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/menu/3.png" alt="Imagen 3" class="img-fluid expandable-image">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/menu/4.png" alt="Imagen 3" class="img-fluid expandable-image">
                    </div>
                </div>
            </div>
        </div>
<!--INVITATION SHOWCASE-->
        <div class="container mt-5">
            <h1 class="text-center mb-4 text-secondary lead" style="font-weight: normal">
                <a href="/invitations.php" class="text-secondary" style="text-decoration: none;" id="invitationLink">Electronic Invitations</a>
            </h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/invitation/invitation.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/invitation/invitation2.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/invitation/invitation1.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>
            </div>
        </div>

<!--TRIP SHOWCASE-->
        <div class="container mt-5">
            <h1 class="text-center mb-4 text-secondary lead" style="font-weight: normal">Leaflet</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/trip/trip1.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/trip/trip2.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/trip/trip3.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>
            </div>
        </div>

<!--SOCIAL MEDIA SHOWCASE-->
        <div class="container mt-5">
            <h1 class="text-center mb-4 text-secondary lead" style="font-weight: normal">Social Media Post</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/fbImages/fbImages1.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/fbImages/fbImages2.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/fbImages/fbImages3.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>
            </div>
        </div>


<!--PRODUCTS,SERVERS-->
        <div class="container mt-5">
            <h1 class="text-center mb-4 text-secondary lead" style="font-weight: normal">Products , Services & Places</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/services/service1.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/services/service2.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/services/service3.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>
            </div>
        </div>

<!--CARDS-->
        <div class="container mt-5">
            <h1 class="text-center mb-4 text-secondary lead" style="font-weight: normal">Cards</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/cardPress/card1.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/cardPress/card2.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="image-container">
                        <img src="/images/webSiteImages/cardPress/card3.png" alt="Invitation Image" class="img-fluid expandable-image">
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-center mb-4 text-secondary lead py-5" style="font-weight: normal">
            Looking for a personalized design? We can create for you, 
            <a href="/views/contact.php" class="text-primary">contact us</a>.
        </h1>

    </div>
</section>

<!-- Sección de Testimonios -->
<!-- <section class="bg-light py-5 mb-5">
    <div class="container text-center">
        <h2 class="pb-4">Lo que dicen nuestros clientes</h2>
        <div class="row">
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p class="mb-0">Gracias a su gestión en redes sociales, nuestras ventas aumentaron un 30% en solo 3 meses.</p>
                    <footer class="blockquote-footer">Juan Pérez, Empresa XYZ</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p class="mb-0">El diseño de nuestro boletín ha mejorado significativamente la interacción con nuestros clientes.</p>
                    <footer class="blockquote-footer">María González, Tienda Online</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p class="mb-0">Las campañas de publicidad de Google Ads nos han permitido llegar a más clientes potenciales que nunca.</p>
                    <footer class="blockquote-footer">Carlos Fernández, Restaurante El Buen Sabor</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section> -->


<!-- CONTACT -->
<section class="py-5 text-center container" class="py-5 text-center container" style="margin-top: 100px; background-image: url('images/webSiteImages/'); background-size: cover; background-position: center;">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="text-muted mt-n5">Ready to get Started?</h2> <!-- Clase de margen negativo para mover hacia arriba -->
            <div class="justify-content-center py-3" >
                <a href="contact.html">
                    <button id="colora" class="btn btn-outline-secondary" type="button"  >Let's Talk About Your Project</button>
                </a>
            </div>
        </div>
    </div>
</section>




<!-- Header -->
<?php
include('../includes/footer.php');
?>