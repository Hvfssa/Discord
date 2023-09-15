<form action="/?controller=User&action=register" method="post">
    <input type="text" name="pseudo" id="a">
    <input type="password" name="mdp" id="b">
    <input type="password" name="mdpVerify" id="c">
    <input type="submit" value="envoyer">

</form>


<?php

// require("gump.class.php");
require("./vendor/wixel/gump/gump.class.php");


// $_POST['pseudo'] = 'Niche';
// $_POST['mdp'] = 'Azertyuiop1?';
// var_dump($_POST);

function showRegisterForm()
{
    // require("./app/core/views/formRegister.php");
    require("./app/core/views/formRegister.php");
}

function register()
{
    require("./app/core/models/UserModel.php");

    $regex = "/(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[#?!@$%^&*-])(?=.*?[0-9])/";

    $gump = new GUMP();

    $gump->validation_rules([
        'pseudo' => 'required|max_len,50|alpha_numeric_dash',
        'mdp' => 'required|max_len,255|min_len,8|regex,' . $regex,
        'mdpVerify' => 'required|max_len,255|equalsfield,mdp'
    ]);

    $gump->set_fields_error_messages([
        'pseudo' => [
            'required' => 'Veuillez remplir le champ pseudo.',
            'max_lengh' => 'Le pseudo ne peut faire que 50 charactère de long.',
            'alpha_numeric_dash' => 'Le pseudo ne peut contenir que des charactères aphanumériques, des dash et des underscores.'
        ],
        'mdp' => [
            'required' => 'Veuillez remplir ce champ.',
            'min_len' => 'Le mot de passe doit faire au moins 8 charactères'
        ],
        'mdpVerify' => [
            'required' => 'Veuillez remplir ce champ',
            'equalsfield,mdp' => 'Les mots de passe doivent etre identiques.'
        ]

    ]);

    $gump->filter_rules([
        'pseudo' => 'trim|htmlencode',
        'mdp' => 'trim|htmlencode',
        'mdpVerify' => 'trim|htmlencode',
    ]);

    $valid_data = $gump->run($_POST);

    // var_dump($valid_data["pseudo"]);

    if ($gump->errors()) {
        var_dump($gump->get_readable_errors());
    } else {
        if (isset($_POST)) {
            $pseudo = $valid_data["pseudo"];
            $alreadyExists = getByOneUser($valid_data["pseudo"]);

            if ($alreadyExists["COUNT(*)"] === 0) {


                $mdp = password_hash($valid_data["mdp"], PASSWORD_ARGON2I);


                $result = addUser($pseudo, $mdp);
                if ($result) {
                    var_dump('redirect');
                } else {
                    // var_dump("erreur");
                }
            } else {
                var_dump("Le nom d'utilisateur est déja utilisé");
            }
        }
    }
}

function showLoginForm()
{
    require("./app/core/views/formLogin.php");
}

function logIn()
{
    require("./app/core/models/UserModel.php");
    $connectGump = new GUMP();

    $connectGump->validation_rules([
        'pseudo' => ['required' => 'Veuillez remplir le champ pseudo.'],
        'mdp' => ['required' => 'Veuillez remplir le champ pseudo.'],

    ]);

    $connectGump->set_fields_error_messages([
        'pseudo' => ['required' => 'Veuillez remplir le champ pseudo.'],
        'mdp' => ['required' => 'Veuillez remplir ce champ.'],
    ]);

    $gump->filter_rules([
        'pseudo' => 'trim|htmlencode',
        'mdp' => 'trim|htmlencode',
    ]);

    $valid_data = $gump->run($_POST);

    $userExists = getByOneUser($pseudo);


    if ($gump->errors()) {
        var_dump($gump->get_readable_errors());
        // redirect form
    } else {
        if (getByOneUser($valid_data["pseudo"]) === 1 && getByOneUser($valid_data["pseudo"])['mdp'] === $valid_data["mdp"]) {
            var_dump($valid_data["pseudo"]);
            var_dump(password_hash($valid_data["mdp"], PASSWORD_ARGON2I));

            addUser($pseudo, $password, $picture);

            // creation session
            // redirection page

        } else {
            var_dump("Le nom d'utilisateur est déja utilisé");
        }
    }


    // verification et création de session/ cookie

    // redirection ou message d'erreur car l'utilisateur existe déja
}


function signOut()
{
    // destruction des sessions ou cookies
    // redirection page de connexion
}


function showUpdateForm()
{
    require("./app/core/models/UserModel.php");

    getByIdUser($id);

    require("./app/core/views/formRegister.php");

    // require modele user

    // select des données de l'utilisateur

    // require view formulaire de mise a jour utilisateur 

    // appelle fonction modification

}

function modify()
{
    require("./app/core/models/UserModel.php");

    // controlle données

    // modification BDD

    // redirection ou message erreur
    updateUser($id, $pseudo, $mdp, $pfpic);
}
