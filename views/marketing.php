
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
        background-image: url('../images/webSiteImages/bgSeo.svg');
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
                        <!-- <a href="#" class="btn btn-outline-primary mt-auto">Learn More</a> -->
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
                        <!-- <a href="#" class="btn btn-outline-primary mt-auto">Learn More</a> -->
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
                    <!-- <a href="#" class="btn btn-outline-primary mt-auto">Learn More</a> -->
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
                        <a href="/views/logoDesign.php" class="btn btn-outline-primary mt-auto">Learn More</a>
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
                    <!-- <a href="#" class="btn btn-outline-primary mt-auto">Learn More</a> -->
                    </div>
                </div>
            </div>
            <!-- Servicio 6 -->
            <div class="col-md-4 py-2">
                <div class="card service-card">
                    <img src="../images/webSiteImages/video.png" class="card-img-top" alt="Servicio 3">
                    <div class="card-body">
                    <h5 class="card-title">Photo and Video Design</h5>
                    <p class="card-text">We create dynamic and engaging videos tailored to promote your brand or business and captivate your audience.</p>
                    <!-- <a href="#" class="btn btn-outline-primary mt-auto">Learn More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY HIRE US -->
<section class="container d-flex align-items-center  py-5" style="margin-top: 100px; margin-bottom: 150px ">
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



<!-- PLANS -->
<!-- <section>

    <div class="container py-5">
        <header>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal text-body-emphasis" id="multicolor">✨ Digital Marketing Services</h1>
                <p class="fs-5 text-body-secondary">Whether you're just getting started or looking to scale, we have the right solution for you.</p>
            </div>
        </header>

        <main>
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-2 text-center">

                <div class="col">
                    <div class="card mb-3 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Essential Package</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><small class="text-body-secondary fw-light" style="font-size: 0.4em;"> CAD/$</small>300<small class="text-body-secondary fw-light" style="font-size: 0.4em;"> / Sesion </small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>✔️ 5 promotional graphics
                                    <span class="info-icon bi bi-info-circle" data-bs-toggle="tooltip" title="Up to 4 pages: Home, Services, About, Contact"></span>
                                </li>
                                <li>✔ 1 photo session (10 edited photos)
                                    <span class="info-icon bi bi-info-circle" data-bs-toggle="tooltip" title="Client pays nothing extra"></span>
                                </li>

                                <li>✔ 1 short video (30–50 seconds)
                                    <span class="info-icon bi bi-info-circle" data-bs-toggle="tooltip" title="E.g., hello@business.com"></span>
                                </li>
                            
                            </ul>
                            <a href="/views/contact.php">
                                <button type="button" class="w-100 btn btn-lg btn-primary btn-con-movimiento">Contact Us</button>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col">

                    <div class="card mb-3 rounded-3 shadow-sm border-primary ">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal text-dark">Growth Package</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><small class="text-body-secondary fw-light" style="font-size: 0.4em;"> CAD/$</small> 400<small class="text-body-secondary fw-light" style="font-size: 0.4em;"> / Sesion</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>✔️ 8 promotional graphics
                                    <span class="info-icon bi bi-info-circle" data-bs-toggle="tooltip" title="Up to 4 pages: Home, Services, About, Contact"></span>
                                </li>
                                <li>✔ 1 photo session (15 edited photos)
                                    <span class="info-icon bi bi-info-circle" data-bs-toggle="tooltip" title="Client pays nothing extra"></span>
                                </li>

                                <li>✔ 2 short videos (30–50 seconds)
                                    <span class="info-icon bi bi-info-circle" data-bs-toggle="tooltip" title="E.g., hello@business.com"></span>
                                </li>
                            


                            </ul>
                            <a href="/views/contact.php">
                                <button type="button" class="w-100 btn btn-lg text-light btn-con-movimiento" style="background-image: linear-gradient(to right, #3498db,rgb(219, 24, 236),rgb(188, 41, 224)) !important;">Contact us</button>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col">

                    <div class="card mb-3 rounded-3 shadow-sm ">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal text-dark">Premium Package</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><small class="text-body-secondary fw-light" style="font-size: 0.4em;"> CAD/$</small> 500<small class="text-body-secondary fw-light" style="font-size: 0.4em;"> / Sesion</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>✔️ 12 promotional graphics
                                    <span class="info-icon bi bi-info-circle" data-bs-toggle="tooltip" title="Up to 4 pages: Home, Services, About, Contact"></span>
                                </li>
                                <li>✔ 2 photo session (20 edited photos)
                                    <span class="info-icon bi bi-info-circle" data-bs-toggle="tooltip" title="Client pays nothing extra"></span>
                                </li>

                                <li>✔ 3 short videos (30–50 seconds)
                                    <span class="info-icon bi bi-info-circle" data-bs-toggle="tooltip" title="E.g., hello@business.com"></span>
                                </li>
                            

                            </ul>
                            <a href="/views/contact.php">
                                <button type="button" class="w-100 btn btn-lg text-light btn-con-movimiento" style="background-image: linear-gradient(to right, #3498db,rgb(177, 60, 231),rgb(103, 8, 182)) !important;">Contact us</button>
                            </a>

                        </div>
                    </div>

                </div>

            </div>
            <p class="text-center mt-4">Packages include 1 Facebook promotion for <b>FREE!</b></p>

</section> -->


<!-- Data-Driven Marketing Section -->
<section class="section-spacer-xxl bg-light" id="data-driven">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Text content -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h2 class=" text-dark mb-3">Data-Driven Marketing</h2>
        <p class="text-muted mb-3">
          At our agency, we use <strong>real data and advanced tools</strong> to measure, analyze, and build strategies that truly work. 
          We meticulously track <em>days, hours, and audience behavior</em> to connect with your customers at the perfect time.
        </p>
        <p class="text-muted">
          Every campaign we launch is backed by metrics, insights, and constant optimization. 
          That’s how we ensure a <strong>successful and measurable final product</strong>.
        </p>
      </div>

      <!-- Chart & image -->
      <div class="col-md-6 text-center">
        <div class="card shadow-sm border-0 p-3">
          <canvas id="growthChart" height="220"></canvas>
        </div>
        <small class="text-muted d-block mt-2">Growth powered by real data</small>
      </div>
    </div>

    <!-- Optional image row -->
    <div class="row text-center mt-5">
      <div class="py-3 col-md-4">
        <img src="https://cdn-icons-png.flaticon.com/512/4144/4144558.png" width="80" alt="Data analytics">
        <h6 class="mt-3">Data Analytics</h6>
      </div>
      <div class="py-3 col-md-4">
        <img src="https://cdn-icons-png.flaticon.com/512/3208/3208707.png" width="80" alt="Marketing tools">
        <h6 class="mt-3">Smart Tools</h6>
      </div>
      <div class="py-3 col-md-4">
        <img src="https://cdn-icons-png.flaticon.com/512/4149/4149644.png" width="80" alt="Strategy">
        <h6 class="mt-3">Effective Strategies</h6>
      </div>
    </div>
  </div>
</section>

<!-- Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart Scroll Animation Script -->
<script>
  let chartInitialized = false; // prevent multiple animations

  function createGrowthChart() {
    const ctx = document.getElementById('growthChart').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
          label: 'Performance Growth',
          data: [10, 20, 28, 35, 50, 65, 80],
          borderColor: '#007bff',
          backgroundColor: 'rgba(0,123,255,0.1)',
          borderWidth: 3,
          tension: 0.4,
          fill: true,
          pointRadius: 4,
          pointBackgroundColor: '#007bff'
        }]
      },
      options: {
        responsive: true,
        animation: {
          duration: 2000,
          easing: 'easeOutQuart'
        },
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } }
      }
    });
  }

  // Trigger chart when visible
  const section = document.querySelector('#data-driven');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !chartInitialized) {
        createGrowthChart();
        chartInitialized = true;
        observer.disconnect(); // stop observing once triggered
      }
    });
  }, { threshold: 0.3 });

  observer.observe(section);
</script>


<!-- Professional Content Creation Section -->
<section class="section-spacer-xxl" id="content-creation">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Image / video preview -->
      <div class="col-md-6 text-center mb-4 mb-md-0">
        <img src="/images/webSiteImages/cont.png" width="580" alt="Social Media Content" class="img-fluid animate-fade">
      </div>

      <!-- Text content -->
      <div class="col-md-6">
        <h2 class="fw-bold text-dark mb-3">Professional Content Creation</h2>
        <p class="text-muted mb-3">
          We don’t just manage campaigns — we create <strong>eye-catching, high-quality content</strong> that connects with your audience. 
          From social media posts and ads to professional photo & video sessions, 
          every piece of content is crafted to represent your brand in the best way.
        </p>
        <p class="text-muted mb-3">
          Our creative team designs visuals that tell stories, 
          build trust, and drive engagement. Because in today’s digital world, 
          <strong>professional content is what makes your brand stand out.</strong>
        </p>

        <ul class="list-unstyled text-muted">
          <li>✅ High-quality visuals & videos</li>
          <li>✅ Engaging posts for social media</li>
          <li>✅ Consistent branding across platforms</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<style>
.animate-fade {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 1s ease, transform 1s ease;
}
.animate-fade.visible {
  opacity: 1;
  transform: translateY(0);
}
</style>

<script>
const fadeElements = document.querySelectorAll('.animate-fade');
const fadeObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      fadeObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.3 });

fadeElements.forEach(el => fadeObserver.observe(el));
</script>


<!--CARDS-->

<section class="container" style="margin-top: 100px">
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-5 border-bottom text-secondary text-center py-5" style="font-weight: normal; font-size: 3em;" id="multicolor" style="margin-bottom:100px">Showcase</h2>
        
<!-- Newsletter   SHOWCASE        -->
        <div class="container mt-5">
            <h1 class="text-center mb-4 text-secondary lead" style="font-weight: normal">
                <a href="/newsletter" class="text-secondary" style="text-decoration: none;" id="invitationLink">Newsletter</a>
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
                <a href="/invitations" class="text-secondary" style="text-decoration: none;" id="invitationLink">Electronic Invitations</a>
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