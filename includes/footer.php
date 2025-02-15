<!-- FOOTER -->
<!-- FOOTER -->
<section class="container mt-5">
    <div class="dropdown-divider"></div>
    <footer class="py-5 border-top">
        <div class="row">
            <!-- About Us Section -->
            <div class="col-12 col-md-3 mb-4">
                <h5>About Us</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="/views/about.php" class="nav-link p-0 text-body-secondary">About our Company</a></li>
                    <li class="nav-item mb-2"><a href="/views/future.php" class="nav-link p-0 text-body-secondary">The Future</a></li>
                    <li class="nav-item mb-2"><a href="/views/2u.php" class="nav-link p-0 text-body-secondary">2U</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary disabled">Enerna</a></li>
                    <li class="nav-item mb-2"><a href="/views/blog.php" class="nav-link p-0 text-body-secondary">Blog</a></li>
                    <li class="nav-item mb-2"><a href="/views/careers.php" class="nav-link p-0 text-body-secondary">Careers</a></li>
                </ul>
            </div>

            <!-- Legal Section -->
            <div class="col-12 col-md-3 mb-4">
                <h5>Legal</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/views/copyright.php" class="nav-link p-0 text-body-secondary">Copyright</a></li>
                    <li class="nav-item mb-2"><a href="/views/privacy.php" class="nav-link p-0 text-body-secondary">Privacy</a></li>
                </ul>
            </div>

            <!-- Support Section -->
            <div class="col-12 col-md-3 mb-4">
                <h5>Support</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/views/faqs.php" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="/views/contact.php" class="nav-link p-0 text-body-secondary">Contact Us</a></li>
                </ul>
            </div>

            <!-- Subscribe Section -->
            <div class="col-12 col-md-3 mb-4">
                <h5>Newsletter</h5>
                <p>Monthly digest of what's new and exciting from us.</p>
                <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#subscribeModal">
                    Subscribe
                </button>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 border-top">
            <p>© 2025, <span id="colora">Pou Technologies</span>. All Rights Reserved.<br>
                <span class="text-secondary">version 1.0.3</span>
            </p>
            <ul class="list-unstyled d-flex">
                <!-- <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-x" style="font-size: 1.5rem;"></i></a></li> -->
                <li class="ms-3"><a class="link-body-emphasis" href="https://www.instagram.com/poutechnologies?igsh=MWJkb282Nm96ZnVzZQ==" target="_blank"><i class="bi bi-instagram" style="font-size: 1.5rem;"></i></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="https://www.facebook.com/share/15s2bkwjxV/" target="_blank"><i class="bi bi-facebook" style="font-size: 1.5rem;"></i></a></li>
            </ul>
        </div>
    </footer>
</section>


<!-- Bundle JS (Bootstrap y Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Otras librerías (como three.js) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

<!-- Tu archivo de movimiento (movement.js) -->
<script src="/style/js/movement.js"></script>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);

            // Verifica el estado del formulario de proyecto
            const formStatus = urlParams.get('form_status');
            if (formStatus === 'success') {
                Swal.fire({
                    title: "Message Sent!!",
                    text: "Thank you for reaching out. We will get back to you soon.",
                    icon: "success"
                });
            } else if (formStatus === 'error') {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                    footer: '<a href="pages/faqs.html">Why do I have this issue?</a>'
                });
            } else if (formStatus === 'missing') {
                Swal.fire({
                    title: "Are there any fields left unfilled?",
                    text: "Please fill in all fields",
                    icon: "question"
                });
            } else if (formStatus === 'captcha_error') {
                Swal.fire({
                    title: "Captcha Not Selected",
                    text: "Please click on the captcha to verify you're not a robot.",
                    icon: "warning"
                });
            }

            // Verifica el estado del formulario de suscripción
            const newsletterStatus = urlParams.get('newsletter_status');
            if (newsletterStatus === 'success') {
                Swal.fire({
                    title: "Subscribed!",
                    text: "Thank you for subscribing to our newsletter.",
                    icon: "success"
                });
            } else if (newsletterStatus === 'error') {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "There was an error with your subscription.",
                    footer: '<a href="pages/faqs.html">Why did I get this issue?</a>'
                });
            } else if (newsletterStatus === 'invalid') {
                Swal.fire({
                    title: "Invalid Email",
                    text: "Please enter a valid email address.",
                    icon: "warning"
                });
            }
        });
    </script>

</body>

</html>