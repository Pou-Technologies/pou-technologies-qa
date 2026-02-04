<!-- Header -->
<?php
$pageTitle = "Faqs"; // Define el título de la página
include '../includes/header.php'
?>

<!-- Main Content -->
<div class="container my-5 w-75 w-md-50 mx-auto">
    <h1 class="text-center mb-4">Frequently Asked Questions</h1>
    <p class="text-center">Here are the most common questions our clients ask us. If you have any further inquiries, feel free to contact us!</p>
    <div class="accordion" id="faqAccordion">
        <!-- Categoría 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <i class="fas fa-info-circle me-2"></i> I’m not familiar with how a website works. Do you offer guidance?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Absolutely! We provide free, expert advice to help guide you through the process and ensure your project is successfully brought to life.
                </div>
            </div>
            
        </div>

        <!-- Pregunta 2 -->
        <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        I have an idea for a project, but it's not fully developed, and I'm unsure how it will look. Can you assist me in completing it?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Absolutely, we can assist you in bringing your project to life. To gain a clearer understanding of your vision, we kindly ask you to fill out a form with specific questions. This will allow us to better comprehend your needs and ensure we provide the most tailored solutions for your project.
                    </div>
                </div>
            </div>

            <!-- Pregunta 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What payment methods do you accept?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We accept different types of payment, whether debit, credit, cash, even Bitcoin.
                    </div>
                </div>
            </div>
            <!-- Pregunta 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Can I cancel my subscription at any time?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, you can cancel your subscription at any time. Once you cancel, you'll continue to enjoy all the benefits of the service until the current billing cycle ends. For example, if your subscription started on April 29, and you choose to cancel, the service will remain active until May 29, and no further charges will be made after that date.
                    </div>
                </div>
            </div>
            <!-- Pregunta 5 (corregida) -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Do you offer additional services beyond the standard packages?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, in addition to our packages, we offer personalized services tailored to your specific needs. If you require additional solutions or services beyond what is included in the plans, we would be happy to provide you with a customized proposal. Please contact us for more details.
                    </div>
                </div>
            </div>

            <!-- Pregunta 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Why isn't my subscription or form being submitted?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>There are several reasons why your subscription form may not be submitted correctly:</p>
                        <p><strong>1. Invalid email address:</strong> Make sure you're entering a valid email address in the required field. If the email is incorrect, we won't be able to process your subscription.</p>
                        <p><strong>2. Connection issues:</strong> If there's an issue with your internet connection when submitting the form, it may not process correctly. Try checking your connection and submitting again.</p>
                        <p><strong>3. Server error:</strong> If the server handling your subscription is experiencing issues or is overloaded, this may prevent the form from being submitted. In this case, we recommend trying again later.</p>
                        <p><strong>4. Browser blocking:</strong> Some browsers may block the execution of scripts or forms if they consider the content to be insecure. Try enabling scripts in your browser settings or use a different browser.</p>
                        <p><strong>5. JavaScript disabled:</strong> If JavaScript is disabled in your browser, the form won't be able to process the subscription properly. Make sure JavaScript is enabled.</p>
                        <p>If you’ve checked all these points and the issue persists, please contact us directly via <a href="contact.php">our contact form</a> or email us at <a href="mailto:contact@poutechnologies.com">contact@poutechnologies.com</a>. We’d be happy to assist you.</p>
                    </div>
                </div>


        
        <!-- Más preguntas... -->

    </div>
    <p class="text-center mt-4">Didn’t find what you were looking for? <a href="contact.php">Contact us</a> and we’ll be happy to assist!</p>
</div>


<!-- Footer -->
<?php
include '../includes/footer.php'
?>