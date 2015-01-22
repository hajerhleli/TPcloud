<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once 'layout/header.php'; ?>

<body id="page5">
<!-- START PAGE SOURCE -->
<div id="main">
    <?php include_once 'layout/menu.php' ?>
    <div id="content">
        <div class="box">
            <div class="border-bot">
                <div class="right-bot-corner">
                    <div class="left-bot-corner">
                        <div class="inner">
                            <div class="box1 alt">
                                <div class="inner">
                                    <h4><b>Connectez</b> Vous</h4>

                                    <p class="p0 extra-wrap">
                                        Bienvenu chez Tunisie Telecom Zaghouan<br>
                                        Vous éte bien inscrit <br>
                                        Connectez Vous
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="indent">
            <div class="wrapper">
                <div class="col-1" style="margin: 100px">
                    <h3><b>Se</b> Connecter</h3>
                    <?php
                    if(isset($_GET['E']) && !empty($_GET['E']) && $_GET['E'] == 1)
                        echo '<h4 style="color: crimson">Veuillez vérifier votre E_mail / mot de passe.</h4>';
                    ?>
                    <form id="contacts-form" action="scripts/authentification.php" method="post" >
                        <fieldset>


                            <div class="field">
                                <label style="width: 170px;">E-mail:</label>
                                <input class="validate[required,custom[email]] text-input" type="text" name="email" id="email"/>
                            </div>
                            <div class="field">
                                <label style="width: 170px;">Mot de passe:</label>
                                <input class="validate[required] text-input" type="password" name="password"  id="password"/>
                            </div>

                            <div class="wrapper "><button type="submit" class="link1 submit" style="border: none" ><em><b>Se connecter</b></em></button><div>
                        </fieldset>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <?php include_once 'layout/footer.php' ?>
</div>

<!-- END PAGE SOURCE -->
