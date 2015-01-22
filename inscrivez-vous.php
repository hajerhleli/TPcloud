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
                                    <h4><b>Inscrivez</b> Vous</h4>

                                    <p class="p0 extra-wrap">
                                        Sed, a, sed proin mus turpis, est? Quis egestas, pid in adipiscing platea augue rhoncus, facilisis, egestas pid sit. Dapibus in adipiscing, urna facilisis? Ultricies in nisi, est, nisi lectus? Mid risus, placerat natoque phasellus! Nisi, natoque nascetur diam. Augue magnis amet? Penatibus in, integer, a quis a! Quis, ac, sit integer proin nec parturient vel cursus adipiscing, et sit? Diam! Augue sed! Nec nec ac! Parturient pid et odio in magna etiam ultrices magna, et elementum porttitor augue adipiscing ut? Nec ridiculus aenean, non elementum vel sed montes facilisis? Sed! Aenean. Adipiscing est elementum, tristique, elit auctor, et mattis.
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
                <div class="col-1">
                    <h3><b>Inscription</b></h3>
                    <?php
                    if(isset($_GET['E']) && !empty($_GET['E']) && $_GET['E'] == 1)
                        echo '<h4><b style="color: crimson"> Ce mail existe déja</b></h4>';
                    ?>
                    <form id="contacts-form" action="scripts/inscription.php" method="post" >
                        <fieldset>

                            <div class="field">
                                <label style="width: 170px;">Nom :</label>
                                <input class="validate[required,custom[onlyLetter],length[0,100]] text-input" type="text" name="firstname" id="firstname" />
                            </div>
                            <div class="field">
                                <label style="width: 170px;">Prénom :</label>
                                <input class="validate[required,custom[onlyLetter],length[0,100]] text-input" type="text" name="lastname" id="lastname" />
                            </div>
                            <div class="field">
                                <label style="width: 170px;">Tel :</label>
                                <input class="validate[required,custom[telephone]] text-input" type="text" name="telephone"  id="telephone"/>
                            </div>
                            <div class="field">
                                <label style="width: 170px;">Adresse:</label>
                                <textarea cols="1" rows="1" style="width: 265px;height: 75px;" name="adresse"></textarea>
                            </div>
                            <div class="field">
                                <label style="width: 170px;">E-mail:</label>
                                <input class="validate[required,custom[email]] text-input" type="text" name="email" id="email"/>
                            </div>
                            <div class="field">
                                <label style="width: 170px;">Mot de passe:</label>
                                <input class="validate[required,length[6,11]] text-input" type="password" name="password"  id="password"/>
                            </div>
                            <div class="field">
                                <label style="width: 170px;">Confirmez mot de passe:</label>
                                <input class="validate[required,confirm[password]] text-input" type="password" name="password2"  id="password2"/>
                            </div>
                            <div class="wrapper "><button type="submit" class="link1 submit" style="border: none" ><em><b>ENREGISTRER</b></em></button><div>
                        </fieldset>
                    </form>
                </div>
                <?php include_once 'layout/news.php' ?>
            </div>
        </div>
    </div>
    <?php include_once 'layout/footer.php' ?>
</div>

<!-- END PAGE SOURCE -->
