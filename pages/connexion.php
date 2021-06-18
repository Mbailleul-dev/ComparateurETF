<?php require_once 'userController.php'; ?>

<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Connexion - Comparateur ETF</title>
</head>

<body>

    <header>
        <?php include "header2.php" ?>
    </header>

    <?php include "nav_bar.php"; ?>

    <div class="container-fluid">
        <div class="row text-center mt-5 mb-5">
            <div class="col-md-2">
            </div>
            <div class="col-md-4 inscription">
                <fieldset>
                    <form action="index.php" method="POST" enctype="multipart/form-data">
                        <legend id="legend">Inscription</legend>

                        <div class="form-group <?= !isset($formErrors['username']) ?: 'has-danger' ?>">
                            <label for="username" class="form-label">Nom d'utilisateur:</label>
                            <input type="text" name="username" id="username" placeholder="ex: MonPseudo123" class="form-control <?= isset($formErrors['username']) ? 'is-invalid' : '' ?>" />
                            <small class="invalid-feedback"><?= @$formErrors['username'] ?></small>
                        </div>
                        <div class="form-group <?= !isset($formErrors['password']) ?: 'has-danger' ?>">
                            <label for="password" class="form-label">Mot de passe:</label>
                            <input type="password" name="password" id="password" placeholder="******" class="form-control <?= !isset($formErrors['password']) ?: 'is-invalid' ?>" />
                            <small class="invalid-feedback"><?= @$formErrors['password'] ?></small>
                        </div>
                        <div class="form-group <?= !isset($formErrors['confirmPassword']) ?: 'has-danger' ?>">
                            <label for="confirmPassword" class="form-label">Confirmation mot de passe:</label>
                            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="******" class="form-control <?= !isset($formErrors['confirmPassword']) ?: 'is-invalid' ?>" />
                            <small class="invalid-feedback"><?= @$formErrors['confirmPassword'] ?></small>
                        </div>
                        <div class="form-group <?= !isset($formErrors['mail']) ?: 'has-danger' ?>">
                            <label for="mail" class="form-label">Adresse mail:</label>
                            <input type="email" name="mail" id="mail" placeholder="ex: monPseudo123@gmail.com" class="form-control  <?= !isset($formErrors['mail']) ?: 'is-invalid' ?>" />
                            <small class="invalid-feedback"><?= @$formErrors['mail'] ?></small>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Confirmer" class="btn btn-secondary mt-3" />
                        </div>
                    </form>
                </fieldset>
            </div>
            <div class="col-md-4 connexion">
                <fieldset>
                    <legend id="legend">Connexion</legend>

                    <div class="form-group <?= !isset($formErrors['username']) ?: 'has-danger' ?>">
                            <label for="username" class="form-label">Nom d'utilisateur:</label>
                            <input type="text" name="username" id="username" placeholder="ex: MonPseudo123" class="form-control <?= isset($formErrors['username']) ? 'is-invalid' : '' ?>" />
                            <small class="invalid-feedback"><?= @$formErrors['username'] ?></small>
                        </div>
                        <div class="form-group <?= !isset($formErrors['password']) ?: 'has-danger' ?>">
                            <label for="password" class="form-label">Mot de passe:</label>
                            <input type="password" name="password" id="password" placeholder="******" class="form-control <?= !isset($formErrors['password']) ?: 'is-invalid' ?>" />
                            <small class="invalid-feedback"><?= @$formErrors['password'] ?></small>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Confirmer" class="btn btn-secondary mt-3" />
                        </div>
                </fieldset>
                <p class="mt-3"><a href="">Mot de passe oublié ?</a><br />
                </p>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>

    <?php include "footer.php" ?>

    <script href="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script href="accueil.js"></script>
</body>

</html>