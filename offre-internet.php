<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once 'layout/header.php'; ?>
<body id="page3">
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
                  <h4><b>Offre</b> Internet</h4>
                  <p class="p0">Avec l’ADSL de Tunisie Telecom, surfez sur internet et bénéficiez du confort du haut débit.</p>
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
          <h3><b>Découvrez</b> Nos Offre Internet</h3>
            <ul class="list" style="width: 65%;float: left;">
                <?php
                require_once 'scripts/connexion.php';
                
                $sql = mysql_query("select * from tt_articles where art_cat ='3' order by art_date,art_id desc");
                $nbrow = mysql_numrows($sql);
                if($nbrow == 0){?>
                    <li>
                        <h3>Aucun article </h3>
                    </li>
                <?php } else{
                    $max = 200;
                    for($i=0;$i<$nbrow;$i++){
                        $id = mysql_result($sql,$i,'art_id');
                        $titre = mysql_result($sql,$i,'art_titre');
                        $desc = mysql_result($sql,$i,'art_desc');
                        $photo = mysql_result($sql,$i,'art_photo');
                        if(strlen($desc)>=$max){
                            // Met la portion de chaine dans $chaine
                            $pres = substr($desc,0,$max);
                            // position du dernier espace
                            $espace1=strrpos($pres," ");
                            // test si il ya un espace
                            if($espace1)
                                // si ya 1 espace, coupe de nouveau la chaine
                                $pres = substr($pres,0,$espace1);
                            // Ajoute ... Ã  la chaine
                            $pres .= '...';}
                        ?>
                        <li>
                            <div style="float: left;width: 100%;">
                                <img src="images/<?php echo $photo ?>" alt="" style="height: 100px;width: 145px" /><a href="<?php echo $titre ?>" name="<?php echo $id ?>" class="articles"><?php echo $titre ?></a><br />
                                <?php if (strlen($desc) > $max) echo $pres ; else echo $desc; ?>
                            </div>
                            <div style="float: right">
                                <a href="<?php echo $titre ?>" name="<?php echo $id ?>" class="articles">Lire Plus</a>
                            </div>
                        </li>
                    <?php    }}
                ?>

            </ul>
        </div>
          <?php include_once 'layout/news.php' ?>
      </div>
    </div>
  </div>
    <?php include_once 'layout/footer.php' ?>
</div>

<!-- END PAGE SOURCE -->
