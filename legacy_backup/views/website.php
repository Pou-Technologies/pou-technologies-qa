<!-- Header -->
<?php
$pageTitle = "Website"; // Define el título de la página
include('../includes/header.php');
?>

<!-- Main Content -->
<section class="full-height container" style="background-image: url('/images/webSiteImages/internetImage.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <header class="py-5 text-center container">
        <div class="row py-lg-5 fade-in">
            <div class="col-lg-6 col-md-8 mx-auto text-center">
                <h2 class="text-muted " style="font-weight: normal">Did you know that more than 60% of the population is online?</h2>
                <p class="col-lg-8 mx-auto lead py-5">
                    According to the webpage <a href="https://datareportal.com/reports/digital-2023-april-global-statshot" target="_self"><code>Datareportal</code></a>, on average, a person spends around 6 hours and 35 minutes a day using the internet in 2023.
                </p>
            </div>
        </div>
    </header>
</section>


<section>
    <div class="bg-black text-secondary px-4 py-5 text-center" style="position: relative; background-image: url('/images/webSiteImages/breakdownImage.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div id="breakdown" class="py-2">
            <h1 class="display-5 text-white">Breakdown</h1>
        </div>

        <!-- New Icon Section -->
        <div class="icon-section py-5" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 d-flex flex-column align-items-center text-white mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                        </svg>
                        <div class="number" data-target="180">0:00</div>
                        <p class="description">Work and Education</p>
                    </div>
                    <div class="col-md-4 d-flex flex-column align-items-center text-white mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
                        </svg>
                        <div class="number" data-target="150">0:00</div>
                        <p class="description">Social Media</p>
                    </div>
                    <div class="col-md-4 d-flex flex-column align-items-center text-white mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-fast-forward-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                            <path d="M4.271 5.055a.5.5 0 0 1 .52.038L8 7.386V5.5a.5.5 0 0 1 .79-.407l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 8 10.5V8.614l-3.21 2.293A.5.5 0 0 1 4 10.5v-5a.5.5 0 0 1 .271-.445"/>
                        </svg>
                        <div class="number" data-target="100">0:00</div>
                        <p class="description">Streaming</p>
                    </div>
                    <p class="col-lg-8 mx-auto lead mt-3 text-white">
                        By 2024, around 227 million people will join social media annually.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-image: url('../images/43.png'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; height: 80vh;">
    <header class="py-5 text-center container">
        <div class="row py-lg-5 fade-in">
            <div class="col-lg-6 col-md-8 mx-auto text-center">
                <p class="col-lg-8 mx-auto lead py-3">
                    The world is undergoing a digital transformation
                </p>
                <h2 class="text-muted" style="font-weight: normal">What if you could showcase your project or business to each person based on their interests in the digital world?</h2>
                <p class="lead py-5">
                    "Every time a user performs a search in a browser for a product or service, the search engine conducts a local evaluation of the businesses 
                    or providers offering that product or service. This evaluation takes into account various factors such as relevance, 
                    content quality, and geographic proximity to the user. The better a business's website is positioned based on these criteria, 
                    the higher it will rank in local search results. In other words, the business with the best <strong>SEO</strong> positioning and an optimized
                     local SEO strategy will appear among the top results, increasing the chances of being found by users interested in the products
                      or services they offer."
                </p>
                <p class="col-lg-8 mx-auto lead">
                    "Now is the perfect time to create your website"
                </p>
            </div>
        </div>
    </header>
</section>




<!-- FEATURES -->

<section class="container">
    <h2 class="text-center mb-5 text-secondary  py-5" id="multicolor" style="font-size: 2.5rem;">Features of our websites</h2>
    <div class="row justify-content-center">

        <!-- Feature Box 1 -->
        <div class="col-lg-4 featureBox1 text-center">
            <img src="/images/webSiteImages/webpage.png" alt="Intuitive Design" width="300" height="300">
            <h3 class="text-secondary">Intuitive & Attractive Design</h3>
            <p>Easy, visually appealing, and tailored to your audience with intelligent technology for a seamless experience.</p>
        </div>

        <!-- Feature Box 2 -->
        <div class="col-lg-4 featureBox2 text-center">
            <img src="/images/webSiteImages/estadistics.png" alt="Visit Report" width="300" height="300">
            <h3 class="text-secondary">Monthly Visit Reports</h3>
            <p>Receive insights into your visitors, including demographics and the most visited sections, to optimize your content.</p>
        </div>

        <!-- Feature Box 3 -->
        <div class="col-lg-4 featureBox3 text-center">
            <img src="/images/webSiteImages/mail.png" alt="Business Email" width="300" height="300">
            <h3 class="text-secondary">Professional Business Email</h3>
            <p>Boost your brand's credibility and communication with a professional business email.</p>
        </div>
    </div>
</section>

<!-- SHOWCASE -->

<section class="container" style="margin-top: 100px">
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="text-center mb-5 text-secondary font-weight-bold" id="multicolor" style="font-size: 2.5rem; letter-spacing: 1px;">Showcase</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">
            <div class="col">
                <a href="https://lovely-kitten-4fbc7a.netlify.app/" target="_blank" class="text-decoration-none">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg hover-zoom" style="background-image: url('/images/websitePictures/furnitureStore.png'); background-size: 200%; background-position: center " >
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <ul class="d-flex list-unstyled mt-auto">
                            </ul>
                        </div>
                    </div>
                </a>
                <p class="text-center mt-2 py-3 text-secondary">Multimueble</p>        
            </div>
            <div class="col">
                <a href="https://onfiery.com/" target="_blank" class="text-decoration-none">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg hover-zoom" style="background-image: url('/images/websitePictures/onFiery.png'); background-size: 200%; background-position: center " >
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <ul class="d-flex list-unstyled mt-auto">
                            </ul>
                        </div>
                    </div>
                </a>
                <p class="text-center mt-2 py-3 text-secondary">Onfiery</p> 
            </div>
            <div class="col">
                <a href="http://easycleanca.com" target="_blank" class="text-decoration-none">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg hover-zoom" style="background-image: url('/images/websitePictures/easyClean.png');">
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


<section class="py-5 text-center container" style="margin-top: 100px; background-image: url('images/webSiteImages/+light.png'); background-size: cover; background-position: center;">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="text-muted mt-n5">Ready to get Started?</h2> <!-- Clase de margen negativo para mover hacia arriba -->
            <div class="justify-content-center py-3">
                <a href="contact.html">
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