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
                    <li class="nav-item mb-2"><a href="/about" class="nav-link p-0 text-body-secondary">About our Company</a></li>
                    <li class="nav-item mb-2"><a href="/future" class="nav-link p-0 text-body-secondary">The Future</a></li>
                    <li class="nav-item mb-2"><a href="/2u" class="nav-link p-0 text-body-secondary">2U</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary disabled">Enerna</a></li>
                    <li class="nav-item mb-2"><a href="/blog" class="nav-link p-0 text-body-secondary">Blog</a></li>
                    <li class="nav-item mb-2"><a href="/careers" class="nav-link p-0 text-body-secondary">Careers</a></li>
                </ul>
            </div>

            <!-- Legal Section -->
            <div class="col-12 col-md-3 mb-4">
                <h5>Legal</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/copyright" class="nav-link p-0 text-body-secondary">Copyright</a></li>
                    <li class="nav-item mb-2"><a href="/privacy" class="nav-link p-0 text-body-secondary">Privacy</a></li>
                    <li class="nav-item mb-2"><a href="/termsAndConditions" class="nav-link p-0 text-body-secondary">Terms and Conditions</a></li>
                </ul>
            </div>

            <!-- Support Section -->
            <div class="col-12 col-md-3 mb-4">
                <h5>Support</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/faqs" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="/contact" class="nav-link p-0 text-body-secondary">Contact Us</a></li>
                </ul>
            </div>

            <!-- Subscribe Section -->
            <div class="col-12 col-md-3 mb-4">
                <h5>Newsletter</h5>
                <p>Monthly digest of what's new and exciting from us.</p>
                <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#modalSubscriptions">

                    Subscribe
                </button>

            </div>

            <!-- Modal Subscriptions-->
            <div class="modal fade" id="modalSubscriptions" tabindex="-1" aria-labelledby="modalSubscriptions" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalSubscriptions">Subscribe to our Newsletter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="/includes/process/process_subscribe.php" id="subscriptionForm">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <div class="invalid-feedback">Please provide your name.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="container">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">Agree the <a href="/views/privacy.php" target="_blank" class="text-decoration-underline">Privacy Policy</a></label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>

                            </div>

                            <!-- reCAPTCHA -->
                            <div class="mb-3 g-recaptcha container" data-sitekey="6Lei4FgqAAAAAPBRtDjdpD2mgMAVBxS8EmWQl9lE"></div>
                            <div id="recaptchaError" class="alert alert-danger d-none">Please complete the reCAPTCHA</div>

                            <div class="modal-footer justify-content-end">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <div>
                                    <button type="submit" name="add_customer" class="btn btn-primary">Subscribe</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>



            <!-- Footer Bottom Section -->
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 border-top">
                <p>© 2025, <span id="colora">Pou Technologies</span>. All Rights Reserved.<br>
                    <span class="text-secondary">Version 1.1.8</span>
                </p>
                <ul class="list-unstyled d-flex">
                    <!-- <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-x" style="font-size: 1.5rem;"></i></a></li> -->
                    <li class="ms-3"><a class="link-body-emphasis" href="https://www.instagram.com/poutechnologies?igsh=MWJkb282Nm96ZnVzZQ==" target="_blank"><i class="bi bi-instagram" style="font-size: 1.5rem;"></i></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="https://www.facebook.com/share/15s2bkwjxV/" target="_blank"><i class="bi bi-facebook" style="font-size: 1.5rem;"></i></a></li> 
                    <li class="ms-3"><a class="link-body-emphasis" href="https://www.tiktok.com/@pou.technologies?is_from_webapp=1&sender_device=pc" target="_blank"><i class="bi bi-tiktok" style="font-size: 1.5rem;"></i></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="https://youtube.com/@poutechnologies?si=GEe1J8YfsEAXrPI8" target="_blank"><i class="bi bi-youtube" style="font-size: 1.5rem;"></i></a></li> 
                </ul>
            </div>

    </footer>

</section>




<!-- Bundle JS (Bootstrap y Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Otras librerías (como three.js) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<!-- Finalmente SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Tu archivo de movimiento (movement.js) -->
<script src="/style/js/movement.js"></script>




<!-- Swal States -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        // Manejar los estados del formulario (tu código existente)


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
            }).then(() => {
                // Limpiar URL después de cerrar el alert
                window.history.replaceState({}, '', window.location.pathname);
            });
        } else if (newsletterStatus === 'error') {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "There was an error with your subscription.",
                footer: '<a href="/views/faqs.php">Why did I get this issue?</a>'
            }).then(() => {
                window.history.replaceState({}, '', window.location.pathname);
            });
        } else if (newsletterStatus === 'invalid') {
            Swal.fire({
                title: "Invalid Email",
                text: "Please enter a valid email address.",
                icon: "warning"
            }).then(() => {
                window.history.replaceState({}, '', window.location.pathname);
            });
        } else if (newsletterStatus === 'captcha_error') {
            Swal.fire({
                title: "reCAPTCHA Required",
                text: "Please complete the reCAPTCHA verification.",
                icon: "error"
            }).then(() => {
                window.history.replaceState({}, '', window.location.pathname);
            });
        }
    });
</script>



</body>

</html>