<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <!-- META -->
    <meta name="description" content="Boost your business with our web design, digital marketing, and cybersecurity services. We offer tailored solutions to grow your online presence. Contact us today!">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Pou Technologies, all rights reserved">
    <meta name="theme-color" content="#7f2bceff">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Pou Technologies"; ?></title>

    <!-- Meta Open Graph para redes sociales -->
    <meta property="og:title" content="Pou Technologies - Web Design, Cybersecurity & Marketing">
    <meta property="og:description" content="Boost your business with our digital services.">
    <meta property="og:image" content="https://www.poutechnologies.com/pou-technologies-og.jpg">
    <meta property="og:url" content="https://www.poutechnologies.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pou Technologies">
    <meta name="twitter:description" content="Web design, marketing, and cybersecurity services.">
    <meta name="twitter:image" content="https://www.poutechnologies.com/pou-technologies-og.jpg">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/favicon/favico.png" type="image/x-icon">
    <!-- Schema Markup para SEO local -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfessionalService",
            "name": "Pou Technologies",
            "image": "",
            "description": "We offer web design, digital marketing, and cybersecurity services.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "123 Main St",
                "addressLocality": "Charlottetown",
                "addressRegion": "PE",
                "postalCode": "C1C 0A5",
                "addressCountry": "CA"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "46.2382",
                "longitude": "-63.1311"
            },
            "telephone": "+1-902-940-4027",
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                ],
                "opens": "08:00",
                "closes": "17:00"
            },
            "url": "https://www.poutechnologies.com"
        }
    </script>
    <!-- Fin del Schema Markup -->

    <!-- Google tag (gtag.js) -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EZG9Y8YPVD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-EZG9Y8YPVD');
    </script>

    <!--Mic Clarity -->
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "sftj0h0y9s");
    </script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Bitdefender-->
    <a href='http://www.mindmatrix.net' title='Marketing Automation' onclick='window.open(this.href);return(false);'>
        <script type='text/javascript' src='https://partner-marketing.bitdefender.com/track/dq3v7httw9v4o/payload.js' async> </script>
    </a>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="/style/css/css.css">
</head>

<body>
    <section class="container">
        <header class="header-tr p-3 mb-3">
            <div class="container">
                <div class="row align-items-center">
                    <nav class="navbar navbar-expand-md" aria-label="Tenth navbar example">
                        <div class="container-fluid d-flex justify-content-between align-items-center">

                            <!-- Logo -->
                            <div class="col-auto mx-auto mx-md-0">
                                <a class="navbar-brand" href="/index.php">
                                    <img src="/images/logo/pouLogo.svg" alt="Pou Technologies Logo">
                                </a>
                            </div>

                            <!-- Botón de colapso (ahora a la derecha) -->
                            <button class="navbar-toggler d-md-none mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="nav ms-auto justify-content-center flex-wrap">
                                    <!-- Projects Dropdown -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" style="color: black" id="projectsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Services
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="projectsDropdown">
                                            <li><a class="dropdown-item" href="/webSphere">WebSphere</a></li>
                                            <li><a class="dropdown-item" href="/cybersecurity">Cybersecurity Services</a></li>
                                            <li><a class="dropdown-item" href="/marketing">Digital Marketing</a></li>
                                        </ul>
                                    </li>

                                    <!-- Other Menu Items -->
                                    <li class="nav-item">
                                        <a class="nav-link active" style="color: black" aria-current="page" href="/contact">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" style="color: black" aria-current="page" href="/about">About Us</a>
                                    </li>

                                    <!-- Members Dropdown -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-secondary-emphasis" href="" style="color: black" id="membersDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Members
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="membersDropdown">
                                            <li><a class="dropdown-item" href="/admin//login.php">Login</a></li>
                                            <!-- <li><a class="dropdown-item" href="/admin/singUp.php">Sign-up</a></li>
                                        </ul> -->
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
    </section>

</body>

</html>