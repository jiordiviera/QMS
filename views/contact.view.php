<?php
// Détection du protocole (http ou https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

// Nom de l'hôte (domaine)
$host = $_SERVER['HTTP_HOST'];

define("URL", "$protocol://$host/");
if (!defined('ACCESS')) {
    // Redirection ou affichage d'une erreur
    header("Location: ".URL.'error');
    exit();
}
?>

<?php
$contact = true;
$title = "Contact";
include "./include/header.php";

?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <!--                    <li class="breadcrumb-item"><a href="#">Pages</a></li>-->
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Contact</p>
                    <h1 class="display-5 mb-4">Si vous avez des questions, veuillez nous contacter</h1>
                    <form method="post" action="jiordikengne@gmail.com">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Votre Nom" required>
                                    <label for="name">Votre Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email"
                                           placeholder="Entrez votre adresse mail" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Sujet" required>
                                    <label for="subject">Sujet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                              style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7959.2978581294665!2d9.743914263037835!3d4.091672239007315!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1705573816961!5m2!1sfr!2sfr"
                                frameborder="0" style="min-height: 450px; border:0;" allowfullscreen=""
                                aria-hidden="false"
                                tabindex="0"></iframe>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
<?php include "./include/footer.php"; ?>