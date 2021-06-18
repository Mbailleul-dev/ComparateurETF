<?php
if (count($_POST) > 0) {
    $formData = [];
    $formErrors = [];
    $regexUsername = '/^[a-zA-Z0-9]+$/';
    if (!empty($_POST['username'])) {
        if (preg_match($regexUsername, $_POST['username'])) {
            $formData['username'] = htmlspecialchars($_POST['username']);
        } else {
            $formErrors['username'] = 'Le nom d\'utilisateur est incorrect';
        }
    } else {
        $formErrors['username'] = 'Le nom d\'utilisateur est obligatoire';
    }

    if (!empty($_POST['mail'])) {
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $formData['mail'] = htmlspecialchars($_POST['mail']);
        } else {
            $formErrors['mail'] = 'L\'adresse mail est incorrecte';
        }
    } else {
        $formErrors['mail'] = 'L\'adresse mail est obligatoire';
    }

    if (!empty($_POST['password'])) {
        $formData['password'] = $_POST['password'];
    } else {
        $formErrors['password'] = 'Le mot de passe est obligatoire';
    }

    if (!empty($_POST['confirmPassword'])) {
        $formData['confirmPassword'] = $_POST['confirmPassword'];
    } else {
        $formErrors['confirmPassword'] = 'La confirmation du mot de passe est obligatoire';
    }

    if (!isset($formErrors['password']) && !isset($formErrors['confirmPassword'])) {
        if ($formData['password'] == $formData['confirmPassword']) {
            $formData['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        } else {
            $formErrors['password'] = $formErrors['confirmPassword'] = 'Les mots de passes sont différents';
        }
    }
    var_dump($formData['password']);
}
