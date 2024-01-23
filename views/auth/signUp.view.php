<!doctype html>
<html lang="en">
<head>
    <title>Sign Up 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../../assets/css/signUp.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Bienvenue</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6 col-xl-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-edit"></span>
                    </div>
                    <h3 class="text-center mb-4">Créer un Compte</h3>
                    <form action="#" class="signup-form">
                        <div class="form-group mb-3">
                            <label class="label" for="name">Nom complet</label>
                            <input type="text" class="form-control" placeholder="John Doe">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label" for="email">Adresse email</label>
                            <input type="text" class="form-control" placeholder="johndoe@gmail.com">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label" for="password">Mot de passe</label>
                            <input id="password-field" type="password" class="form-control"
                                   placeholder="Entrez votre mot de passe">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-100 text-left">
                                <label class="checkbox-wrap checkbox-primary">I agree all statements in terms of service
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">S'inscrire
                            </button>
                        </div>
                    </form>
                    <p>Je suis déja un membre <a  href="<?= URL ?>login" >Vous connectez</a> </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../../assets/js/core/jquery.min.js"></script>
<script src="../../assets/js/core/popper.js"></script>
<script src="../../assets/js/core/bootstrap.min.js"></script>
<script src="../../assets/js/main.js"></script>

</body>
</html>

