<!-- Header -->
<?php
$pageTitle = "Contact"; // Define el título de la página
include('../includes/header.php');
?>

<div>
     <!-- Form Section -->
     <section id="contact" class="contact-section bg-contact" style="background-image: url('../images/webSiteImages/formLogo.png'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 60px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="form-title text-center">
                            <h3>Get in touch</h3>
                            <p>Let us know about your project</p>
                        </div>

                        <!-- Formulario actualizado para conectar con process.php -->
                        <form action="/includes/process_form.php" method="POST" class="needs-validation novalidate">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Service</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="subject1" name="subject[]" value="Website Solutions">
                                    <label class="form-check-label" for="subject1">Website Solutions</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="subject2" name="subject[]" value="Cybersecurity Services">
                                    <label class="form-check-label" for="subject2">Cybersecurity Services</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="subject3" name="subject[]" value="Marketing">
                                    <label class="form-check-label" for="subject3">Marketing</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="subject4" name="subject[]" value="Other" onchange="toggleOtherField()">
                                    <label class="form-check-label" for="subject4">Other</label>
                                </div>
                            </div>

                            <div class="mb-3" id="otherField" style="display: none;">
                                <label for="otherSubject" class="form-label">Please specify</label>
                                <input type="text" class="form-control" id="otherSubject" name="other_subject" placeholder="Describe your specific service">
                            </div>

                            <div class="mb-3">
                                <label for="subjectText" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subjectText" name="subject_text" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>

                            <div class="col-12 container">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">Agree the <a href="/views/privacy.php" target="_blank" class="text-decoration-underline">Privacy Policy</a></label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                            </div>

                            <!-- Google reCAPTCHA -->
                            <div class="mb-3">
                                <div class="g-recaptcha" data-sitekey="6Lei4FgqAAAAAPBRtDjdpD2mgMAVBxS8EmWQl9lE"></div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-lg btn-dark btn-block">Submit Form</button>
                            </div>
                        </form>

                        <script>
                            function toggleOtherField() {
                                const otherCheckbox = document.getElementById('subject4');
                                const otherField = document.getElementById('otherField');
                                if (otherCheckbox.checked) {
                                    otherField.style.display = 'block';
                                } else {
                                    otherField.style.display = 'none';
                                }
                            }
                        </script>

                    </div>
                </div>
            </div>
        </section>

        <!-- Info Section -->
        <section>
            <div class="form-title text-center ">
                <h3>Contact Us</h3>
                <p>Questions or comments? We are here to help you.</p>
            </div>
            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
                <div class="dropdown-menu position-static d-flex flex-column flex-lg-row align-items-stretch justify-content-start p-3 rounded-3 shadow-lg" data-bs-theme="light">
                    <nav class="col-lg-8">
                        <ul class="list-unstyled d-flex flex-column gap-2">
                            <li>
                                <a href="tel:+19029404027" class="btn btn-hover-light rounded-2 d-flex align-items-start gap-2 py-2 px-3 lh-sm text-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                    </svg>
                                    <div>
                                        <strong class="d-block">Telephone</strong>
                                        <small>(+1)902-940-40-27</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:contact@poutechnologies.com" class="btn btn-hover-light rounded-2 d-flex align-items-start gap-2 py-2 px-3 lh-sm text-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                </svg>
                                    <div>
                                        <strong class="d-block">Email</strong>
                                        <small>contact@poutechnologies.com</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-hover-light rounded-2 d-flex align-items-start gap-2 py-2 px-3 lh-sm text-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                    </svg>
                                    <div>
                                        <strong class="d-block">Location</strong>
                                        <small>Charlottetown PEI, Canada.</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="d-none d-lg-block vr mx-4 opacity-10">&nbsp;</div>
                    <hr class="d-lg-none">
                    <div class="col-lg-auto pe-3">
                        <nav>
                            <ul class="d-flex flex-column gap-2 list-unstyled small">
                                <li><a href="/views/privacy.php" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">Privacy</a></li>
                                <li><a href="/views/faqs.php" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">FAQS</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="dropdown-menu position-static d-flex flex-column flex-lg-row align-items-stretch justify-content-start p-3 rounded-3 shadow-lg" data-bs-theme="dark">
                    <nav class="col-lg-8">
                        <ul class="list-unstyled d-flex flex-column gap-2">
                            <li>
                                <a href="/views/faqs.php" class="btn btn-hover-light rounded-2 d-flex align-items-start gap-2 py-2 px-3 lh-sm text-start">
                                    <svg class="bi" width="24" height="24"><use xlink:href="#question-circle"></use></svg>
                                    <div>
                                        <strong class="d-block ">FAQs</strong>
                                        <small>More Questions?</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-hover-light rounded-2 d-flex align-items-start gap-2 py-2 px-3 lh-sm text-start">
                                    <svg class="bi" width="24" height="24"><use xlink:href="#image-fill"></use></svg>
                                    <div>
                                        <strong class="d-block">Do you offer advice?</strong>
                                        <small>Yes , If you have any questions about how a website works, feel free to ask anything, it's totally free. </small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-hover-light rounded-2 d-flex align-items-start gap-2 py-2 px-3 lh-sm text-start">
                                    <svg class="bi" width="24" height="24"><use xlink:href="#music-note-beamed"></use></svg>
                                    <div>
                                        <strong class="d-block">Can I hire services separately?</strong>
                                        <small>Yes , We have flexible plans that adapt to your needs.</small>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <div class="d-none d-lg-block vr mx-4 opacity-10">&nbsp;</div>
                    <hr class="d-lg-none">
                    <div class="col-lg-auto pe-3">
                        <nav>
                            <ul class="d-flex flex-column gap-2 list-unstyled small">
                                <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">Documentation</a></li>
                                <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">Team</a></li>
                                <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">Partners</a></li>
                                <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">Resources</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </section>
</div>

<!-- Footer -->
<?php
include '../includes/footer.php';
?>