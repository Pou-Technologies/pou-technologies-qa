<!-- Header -->
<?php
$pageTitle = "Social Media Management"; // Define page title
include('../includes/header.php');
?>

<style>
    .navbar-brand {
        font-weight: bold;
        font-size: 1.5rem;
    }

    .hero-section {
        background-image: url('../images/webSiteImages/bgSeo.svg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: white;
        padding: 100px 0;
        text-align: end;
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="text-secondary">Social Media Management</h1>
        <p class="lead text-secondary">Turn Followers into Loyal Customers</p>
    </div>
</section>

<!-- What is Social Media Marketing Section -->
<section class="what-is-section section-spacer-xl">
    <div class="container">
        <h2 class="text-muted" style="font-weight: normal">What is Social Media Marketing?</h2>
        <p>
            Social Media Marketing is the strategic use of platforms like Instagram, Facebook, and TikTok to build trust, visibility, and engagement with your audience.
            It’s more than posting, it’s storytelling, branding, and creating consistent content that inspires people to choose your business over the competition.
        </p>
    </div>
</section>



<!-- WHY HIRE US -->
<section class="container d-flex align-items-center  py-5" style="margin-top: 100px; margin-bottom: 150px ">
    <div class="row align-items-center w-100">
        <!-- Columna para el texto -->
        <div class="col-md-6 order-md-1 order-2">
            <h2 class="mb-5">Why Your Business Needs Social Media Marketing</h2>
            <p class="lead">
                Whether you own a restaurant, gym, cleaning company, salon, or any local business
                your clients are already on social media. Without a strong online presence,
                your business becomes invisible to customers who are ready to buy.
            </p>
            <ul class="mt-3">
                <li><strong>Customers choose businesses</strong> they see online first.</li>
                <li><strong>Consistency builds trust</strong> and shows professionalism.</li>
                <li><strong>Reels give massive reach</strong> and attract new clients fast.</li>
                <li><strong>Social media is the new word-of-mouth</strong> for local businesses.</li>
                <li><strong>Your content works 24/7</strong> even when you're not there.</li>
            </ul>
            <p>
                Social media marketing is no longer optional, it's essential for any business
                that wants to stay relevant, grow, and stand out in today’s digital world.
            </p>
            <a href="../views/contact.php" class="btn btn-secondary mt-3">Contact us</a>
        </div>
        <!-- Columna para la imagen -->
        <div class="col-md-6 text-center order-md-2 order-1 mb-4 mb-md-0">
            <img src="/images/webSiteImages/socialM.jpg" alt="Estrategias de marketing" class="img-fluid rounded">
        </div>
    </div>
</section>



<!-- Services Section -->
<section id="social-services" class="section-spacer-xl bg-light">
    <div class="container">

        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-4">Grow Your Brand, Build Your Community</h2>
                <p class="lead text-muted mt-3">
                    We handle your social media so you can focus on running your business.
Our approach blends creativity, strategy, and analytics to attract the right audience and convert attention into real results.
                </p>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center">
                    <img src="/images/webSiteImages/startegic.png" class="img-fluid mb-3 mx-auto service-img" alt="Social media strategy calendar">
                    <h5 class="fw-bold">Strategic Planning</h5>
                    <p class="card-text text-muted">We create weekly or monthly content calendars that match your goals, voice, and audience behavior.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center">
                    <img src="/images/webSiteImages/content.png" class="img-fluid mb-3 mx-auto service-img" alt="Social media engagement icon">
                    <h5 class="fw-bold">Content Creation & Engagement</h5>
                    <p class="card-text text-muted">We produce professional photos, reels, designs, and captions, everything your profiles need to stand out and keep your community active.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center">
                    <img src="/images/webSiteImages/analytics.png" class="img-fluid mb-3 mx-auto service-img" alt="Social media analytics icon">
                    <h5 class="fw-bold">Analytics & Growth</h5>
                    <p class="card-text text-muted">We track your performance, measure engagement, and optimize your strategy every month for continuous improvement.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="py-5 bg-light">
    <div class="container">

        <!-- Title -->
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="fw-bold">Brands We've Worked With</h2>
                <p class="lead text-muted">A quick look at some of the businesses that trusted us with their social media presence.</p>
            </div>
        </div>

        <!-- Brands List -->
        <div class="row g-4 justify-content-center">

            <!-- Brand 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-200 shadow-sm border-0 text-center p-4 rounded-4">
                    <img src="/images/brands/azteca.png" 
                         alt="Azteca Restaurant Logo" 
                         class="img-fluid mb-3" 
                         style="max-height: 150px; object-fit: contain;">
                    <h5 class="fw-bold">Azteca Restaurant</h5>
                    <p class="text-muted small">
                        Professional food photography, weekly content, and reels that boosted their visibility and customer interaction.
                    </p>
                </div>
            </div>

            <!-- Brand 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-200 shadow-sm border-0 text-center p-4 rounded-4">
                    <img src="/images/brands/esasyClean.png" 
                         alt="Easy Clean Logo" 
                         class="img-fluid mb-3" 
                         style="max-height: 150px; object-fit: contain;">
                    <h5 class="fw-bold">Easy Clean</h5>
                    <p class="text-muted small">
                        Clean, modern visuals and engaging posts helped increase brand trust and lead generation.
                    </p>
                </div>
            </div>

            <!-- Brand 3 (Example) -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-200 shadow-sm border-0 text-center p-4 rounded-4">
                    <img src="/images/brands/pixel.png" 
                         alt="Pixel Engraving Logo" 
                         class="img-fluid mb-3" 
                         style="max-height: 150px; object-fit: contain;">
                    <h5 class="fw-bold">Pixel Engraving</h5>
                    <p class="text-muted small">
                        Reels and high-quality product photos that highlighted their craftsmanship and boosted engagement.
                    </p>
                </div>
            </div>

        </div>

        <!-- Instagram CTA -->
        <div class="text-center mt-5">
            <a href="https://www.instagram.com/poutechnologies" target="_blank" class="btn btn-primary btn-lg px-4 py-2 rounded-pill">
                📸 See More Work on Instagram
            </a>
        </div>

    </div>
</section>


<!-- Packages Section -->
<!-- Pricing Section -->
<section id="pricing" class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Social Media Management Packages</h2>
            <p class="text-muted">Choose the plan that fits your business needs.</p>
        </div>

        <div class="row g-4">

            <!-- Package 1 — Standard -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary">Standard</h5>
                        <h3 class="fw-bold">$249 <span class="fs-6 text-muted">/ month</span></h3>
                        <ul class="list-unstyled mt-3">
                            <li>• 3 posts per week</li>
                            <li>• 1 reel per month</li>
                            <li>• Copywriting</li>
                            <li>• Professional design</li>
                            <li>• Basic message management</li>
                            <li>• Profile optimization</li>
                            <li>• 1 monthly photo session</li>
                        </ul>
                        <a href="/views/contact.php" class="btn btn-primary w-100 mt-3">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Package 2 — Professional -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0 border-top border-3 border-primary">
                    <div class="card-body p-4">
                        <span class="badge bg-success mb-2">Most Popular</span>
                        <h5 class="fw-bold text-primary">Professional</h5>
                        <h3 class="fw-bold">$349 <span class="fs-6 text-muted">/ month</span></h3>
                        <ul class="list-unstyled mt-3">
                            <li>• 5 posts per week</li>
                            <li>• 2–3 reels per month</li>
                            <li>• Script + video recording</li>
                            <li>• Professional design</li>
                            <li>• Full message management</li>
                            <li>• Monthly analytics report</li>
                            <li>• 2 monthly photo/video sessions</li>
                            <li>• Ad campaign strategy</li>
                        </ul>
                        <a href="/views/contact.php" class="btn btn-primary w-100 mt-3">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Budget Package — No Photo Sessions -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary">Budget Plan</h5>
                        <h3 class="fw-bold">$129 <span class="fs-6 text-muted">/ month</span></h3>
                        <ul class="list-unstyled mt-3">
                            <li>• 3 posts per week</li>
                            <li>• Basic designs (using your photos)</li>
                            <li>• Copywriting</li>
                            <li>• 1 reel per month</li>
                            <li>• Basic message management</li>
                            <li>• Profile optimization</li>
                            <li class="text-danger">• No photo/video sessions included</li>
                        </ul>
                        <a href="/views/contact.php" class="btn btn-outline-primary w-100 mt-3">Get Started</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>





<!-- CONTACT -->
<section class="py-5 text-center container" style="margin-top: 100px;">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="text-muted mt-n5">Ready to Grow Your Business?</h2>
            <div class="justify-content-center py-3">
                <a href="contact.html">
                    <button id="colora" class="btn btn-outline-secondary" type="button">Let's Build Your Social Strategy</button>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    .service-img {
        width: 200px;
        height: 200px;
        display: block;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid var(--bs-primary, #0d6efd);
    }
</style>

<?php include('../includes/footer.php'); ?>