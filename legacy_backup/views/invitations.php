<!-- Header -->
<?php
$pageTitle = "Invitations"; // Define el título de la página
include('../includes/header.php');
?>

<head>
   <!-- Optional CSS -->
    <style>
        .image-container {
            position: relative;
        }

        .image-number {
            position: absolute;
            top: 10px;
            right: 10px;
            color: rgba(255, 255, 255, 0.7); /* White with transparency */
            font-size: 24px;
            font-weight: bold;
        }

        .image-container img {
            width: 100%;
            height: auto;
            cursor: pointer;
        }
    </style>

    <!-- Custom CSS -->
    <style>
        /* Change the color of the carousel control icons to black */
        .custom-arrow {
            background-color: #6f42c1; /* Makes the arrow icon black */
        }
    </style>
</head>

<!-- Main Content -->
<section class="container py-4">
        <header class=" text-center container">
            <div class="row  ">
                <div class="col-lg-12 col-md-12 mx-auto text-center">
                    <h2 class="text-muted " id="multicolor" style="font-weight: lighter">Invitations catalogue</h2>
                    <p class="col-lg-8 mx-auto lead ">

                    </p>

                </div>
            </div>
        </header>
    </section>


<!--Show-->

    <section class="container">
        <!-- Carousel with arrows for more images -->
        <div id="invitationCarousel" class="carousel slide" data-bs-ride="carousel">
            <h1 class="text-center mb-4 text-secondary lead" style="font-weight: normal">Kids</h1>

            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/child/child.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#A1</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/child/child6.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#A2</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/child/child3.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#A3</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add more carousel items as needed -->
                <div class="carousel-item">
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/child/child4.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#A4</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/child/child1.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#A5</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/child/child2.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#A6</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Carousel controls with black arrows -->
            <button class="carousel-control-prev" type="button" data-bs-target="#invitationCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon custom-arrow" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#invitationCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon custom-arrow" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" id="modalImage" class="img-fluid" alt="Expanded Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript to change image inside the modal -->
    <script>
        function changeModalImage(element) {
            const imageSrc = element.getAttribute('src');
            document.getElementById('modalImage').setAttribute('src', imageSrc);
        }
    </script>


    <!-- Segundo Carrusel (Weddings) -->
    <section class="container">
        <div id="invitationCarousel2" class="carousel slide mt-5" data-bs-ride="carousel">
            <h1 class="text-center mb-4 text-secondary lead" style="font-weight: normal">Weddings</h1>

            <!-- Carrusel Items -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/weddind/wedding1.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#B1</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/weddind/wedding2.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#B2</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/weddind/wedding3.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#B3</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Más items de carrusel -->

                <div class="carousel-item">
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/weddind/wedding4.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#B4</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/weddind/wedding5.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#B5</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/weddind/wedding6.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#B6</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Controles del carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#invitationCarousel2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon custom-arrow" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#invitationCarousel2" data-bs-slide="next">
                <span class="carousel-control-next-icon custom-arrow" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

    <!-- 3 Carrusel (party) -->
    <section class="container py-5">
        <div id="invitationCarousel3" class="carousel slide mt-5" data-bs-ride="carousel">
            <h1 class="text-center mb-4 text-secondary lead" style="font-weight: normal">Party</h1>

            <!-- Carrusel Items -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/party/party.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#C1</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/party/party6.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#C2</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/party/party3.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#C3</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Más items de carrusel -->

                <div class="carousel-item">
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/party/party5.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#C4</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/party/party4.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#C5</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/party/party2.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#C6</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Controles del carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#invitationCarousel3" data-bs-slide="prev">
                <span class="carousel-control-prev-icon custom-arrow" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#invitationCarousel3" data-bs-slide="next">
                <span class="carousel-control-next-icon custom-arrow" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </section>


    <!-- 4 Carrusel (babyshower) -->
    <section class="container">
        <div id="invitationCarousel4" class="carousel slide mt-5" data-bs-ride="carousel">
            <h1 class="text-center mb-4 text-secondary lead" style="font-weight: normal">Baby Shower</h1>

            <!-- Carrusel Items -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/babyshower/baby.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#D1</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/babyshower/baby1.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#D2</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/babyshower/baby2.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#D3</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Más items de carrusel -->

                <div class="carousel-item">
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/babyshower/baby3.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#D4</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/babyshower/baby4.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#D5</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container position-relative">
                                <img src="/images/webSiteImages/invitation/babyshower/baby5.png" alt="Invitation Image" class="img-fluid expandable-image" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="changeModalImage(this)">
                                <div class="image-number">#D6</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Controles del carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#invitationCarousel4" data-bs-slide="prev">
                <span class="carousel-control-prev-icon custom-arrow" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#invitationCarousel4" data-bs-slide="next">
                <span class="carousel-control-next-icon custom-arrow" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </section>

<!--CONTACT US-->
<section class="py-5 text-center container rounded-5 position-relative overflow-hidden mt-5" 
    style="background-image: url('/images/80.png'); background-size: cover; background-position: center;">
    <div class="row py-lg-5 position-relative">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="text-muted mt-n5">Looking for a custom design?</h2>
            <div class="justify-content-center py-3">
                <a href="/contact.html">
                    <button id="colora" class="btn btn-outline-secondary" type="button">Contact Us</button>
                </a>
            </div>
        </div>
    </div>
</section>





<?php

include('../includes/footer.php');
?>