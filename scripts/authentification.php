<?php
// Se connecter a DB.
require_once 'connexion.php';

//r�cup�ration des cooerdonn�es d'utilisateur.
@$login_valide = $_POST['email'];
@$pwd_valide = $_POST['password'];
echo $login_valide.$pwd_valide ;
// on teste si nos variables sont d�finies
if (isset($login_valide) && isset($pwd_valide)) {
    if (!empty($login_valide) && !empty($pwd_valide)) {
        // r�cup�ration de tout les enregistrement qui contien $recherche.
        $req = "select * from tt_users where user_email = '$login_valide' AND user_pass = '$pwd_valide'";
        $exec = mysql_query($req) or die(mysql_error());
        $num=mysql_numrows($exec);
        // on v�rifie les informations du formulaire, � savoir si le pseudo saisi est bien un pseudo autoris�, de m�me pour le mot de passe
        if ($num != 0) {
            // on la d�marre :)
            session_start ();
            $_SESSION['user'] = mysql_result($exec,0,'user_id');
            $_SESSION['name_user'] = mysql_result($exec,0,'user_name');
            // on enregistre les param�tres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
            if(mysql_result($exec,0,'user_type') == 0){
                $_SESSION['user_account']= 0;
                // on redirige notre visiteur vers une page de notre section membre
                header ('location: ../index.php');
            }
            if(mysql_result($exec,0,'user_type') == 1){
                // on redirige notre visiteur vers une page de notre section admin
                $_SESSION['user_account']= 1;
                header ('location: ../espace-admin.php');
            }
        }
        else {
            header ('location: ../se-connecter.php?E=1');
        }
    }
}
else {
    header ('location: ../se-connecter.php?E=1');
}
?>
