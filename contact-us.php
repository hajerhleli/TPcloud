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
                  <h4><b>Nos</b> Contacts</h4>
                  <div class="address"><b>Code Postal:</b>1100<br />
                    <b>Pays:</b>Tunisie<br />
                    <b>Telephone:</b>72 676 645<br />
                    <b>Fax:</b>72 675 088</div>
                  <p class="p0 extra-wrap"><b>Adresse:</b><br />
                      AVENUE DE L'INDEPENDANCE<br>
                      Zaghouan, Zaghouan, Tunisie
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
          <h3><b>Contactez</b> Nous</h3>
            <?php
                if(isset($_GET['E']) && !empty($_GET['E']) && $_GET['E'] == 1)
                echo '<h4><b> Votre message à été bien transmis</b></h4>';
            ?>
          <form id="contacts-form" action="scripts/contact.php" class="formular" method="post">
            <fieldset>
              <div class="field">
                <label>Nom & Prénom:</label>
                <input class="validate[required,custom[onlyLetter],length[0,100]] text-input" type="text" name="firstname" id="firstname" />
              </div>
              <div class="field">
                <label>E-mail:</label>
                <input class="validate[required,custom[email]] text-input" type="text" name="email" id="email" />
              </div>
              <div class="field">
                <label>Sujet:</label>
                <input type="text" name="sujet" />
              </div>
              <div class="field">
                <label>Message:</label>
                <textarea class="validate[required] text-input" name="comments" id="comments" cols="1" rows="1"></textarea>
              </div>
                <div class="wrapper "><button type="submit" class="link1 submit" style="border: none" ><em><b>ENVOYER</b></em></button><div>
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
