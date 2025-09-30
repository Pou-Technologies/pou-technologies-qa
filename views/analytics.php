<!-- Header -->
<?php
$pageTitle = "Analytics"; // Define el título de la página
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

  .section-title {
    font-size: 2rem;
    margin-bottom: 20px;
    font-weight: bold;
  }

  .section-content {
    font-size: 1.1rem;
    line-height: 1.8;
  }

  .footer {
    background: #333;
    color: white;
    padding: 20px 0;
    text-align: center;
  }
</style>



<!-- Hero Section -->
<section class="hero-section">
  <div class="container">
    <h1 class="text-secondary">Website Analytics & Performance Insights</h1>
    <p class="lead text-secondary">We monitor your website’s traffic, user behavior, and growth so you can make smarter business decisions.</p>
  </div>
</section>

<!-- What is Analytics Section -->
<section id="what-is-analytics" class="py-5">
  <div class="container">
    <h2 class="section-title text-secondary">What is Website Analytics and How Does It Help You?</h2>
    <div class="section-content">
      <p><strong>Website analytics</strong> is the process of tracking and analyzing how visitors interact with your website. Using tools like Google Analytics, we measure traffic, user behavior, location, engagement, and performance to help you understand what’s working and what needs improvement.</p>
      <p>Analytics focuses on key areas like:</p>
      <ul>
        <li><strong>Traffic sources:</strong> Discover whether visitors are coming from Google, social media, direct links, or ads.</li>
        <li><strong>User behavior:</strong> See what pages people visit, how long they stay, and what actions they take.</li>
        <li><strong>Audience insights:</strong> Analyze visitor locations, devices, and engagement.</li>
      </ul>
    </div>
  </div>
</section>

<!-- How We Apply Analytics Section -->
<section id="how-we-apply-analytics" class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title">How Do We Use Analytics in Our Services?</h2>
    <div class="section-content">
      <p>When we manage your website, analytics is a key part of monitoring performance and growth. Here's what we do:</p>
      <ol>
        <li><strong>Traffic tracking:</strong> We measure how many people visit your site and how that changes month to month.</li>
        <li><strong>Source analysis:</strong> We identify where your visitors come from — Google, Facebook, direct links, ads, etc.</li>
        <li><strong>Top pages:</strong> We track which pages get the most visits and engagement.</li>
        <li><strong>Geolocation insights:</strong> We show which cities and countries your visitors come from.</li>
        <li><strong>Monthly performance reports:</strong> We provide clear reports with results and recommendations.</li>
      </ol>
    </div>
  </div>
</section>

<!-- Questions -->
<section class="container py-5">
  <header>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis" id="multicolor">Questions</h1>
      <p class="fs-5 text-body-secondary">Common questions you may have about website analytics and performance tracking.</p>
    </div>
  </header>

  <div class="accordion" id="accordionExample">

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          What is website analytics and why is it important for my business?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Website analytics helps you understand how many people visit your site, where they come from, and what they do.
          This information helps you make better decisions, improve user experience, and increase leads or sales without guessing.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          How often do I receive performance reports?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          You receive a full performance report every month, including traffic, top pages, engagement time,
          visit growth, traffic sources, and recommendations to improve results.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          What’s included in your analytics service?
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Our analytics service includes traffic monitoring, visitor behavior tracking, top page performance,
          geographic insights, monthly reports, and strategic recommendations based on real data.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Can analytics help improve my website’s results?
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Absolutely. Analytics reveals what’s working and what needs improvement. By understanding user behavior,
          we can optimize pages, improve conversions, focus on the best traffic sources, and grow your online presence strategically.
        </div>
      </div>
    </div>

  </div>
</section>


<section class="py-5 text-center container " style="margin-top: 100px; background-image: url('images/webSiteImages/+light.png'); background-size: cover; background-position: center;">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="text-muted mt-n5">Ready to get analytics?</h2> <!-- Clase de margen negativo para mover hacia arriba -->
                <div class="justify-content-center py-3">
                    <a href="/contact">
                        <button id="colora" class="btn btn-outline-secondary" type="button">Let's Talk About Your Project</button>
                    </a>
                </div>
            </div>
        </div>
    </section>




<!-- Footer -->
<?php
include('../includes/footer.php');
?>