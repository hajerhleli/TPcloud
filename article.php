<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once 'layout/header.php'; ?>
<body id="page4">
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
                    <?php

                    $current = $_SESSION['id'];
                    require_once 'scripts/connexion.php';
                    $sql = mysql_query("select a.*,c.* from tt_articles a, tt_cat c where id_cat = art_cat and art_id= $current");
                    $cat = mysql_result($sql,0,'c.categorie');
                    $titre = mysql_result($sql,0,'a.art_titre');
                    $desc = mysql_result($sql,0,'a.art_desc');
                    $photo = mysql_result($sql,0,'a.art_photo');
                    ?>
                  <h4><?php echo $cat ?></h4>
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
          <h3><?php echo $titre ?></h3>
          <div class="img-box1"><img src="images/<?php echo $photo ?>" alt="" style="height: 250px;"/>
          </div>
          <p><?php echo $desc ?></p>
        </div>

        <?php include_once 'layout/news.php' ?>
          <div class="col-1">
              <h3>Votre avis</h3>
              <div class="img-box1">
                  <ul class="list">
                  <?php
                    $avis = mysql_query("select v.*,u.* from tt_avis v, tt_users u where avis_user = user_id ");
                    $result = mysql_numrows($avis);
                  for($i=0;$i<$result;$i++){
                      $avis_user = mysql_result($avis,$i,'avis_avis');
                      $user = mysql_result($avis,$i,'user_name');?>
                      <li>
                        <div style="float: left;margin: 5px;">
                          <a><?php echo $user ?></a><br />
                          <?php echo $avis_user; ?>
                        </div>

                      </li>

                 <?php }
                  ?>
                      </ul>
                  <form id="contacts-form" action="scripts/save_comment.php" method="post" >
                      <fieldset>

                          <div class="field">
                              <label style="width: 170px;">Commentaire :</label>
                              <textarea cols="1" rows="1" style="width: 265px;height: 75px;" name="textarea"></textarea>
                          </div>
                          <div class="wrapper ">
                              <?php
                               if(isset($_SESSION['name_user']) && !empty($_SESSION['name_user']))
                                   echo '<button type="submit" class="link1 submit" style="border: none" ><em><b>ENREGISTRER</b></em></button>';
                              else{?>
                                  <button type="button" onclick="connexion('se-connecter.php')" class="link1 submit" style="border: none" ><em><b>ENREGISTRER</b></em></button>
                              <?php }

                              ?>
                          <div>
                      </fieldset>
                  </form>
              </div>

          </div>
      </div>
    </div>
  </div>
    <?php include_once 'layout/footer.php' ?>
</div>

<!-- END PAGE SOURCE -->
