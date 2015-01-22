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
                                    <?php
                                        if(isset($_GET['E']) && !empty($_GET['E']) && $_GET['E'] == '1')
                                    echo "<h4><b>Opération effectué avec succés</b></h4>";
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="indent">
            <div class="wrapper">
                <div class="col-1" style="width: 100%">
                    <h3><b>Gestion</b> Du Site</h3>
                    <?php
                    require_once 'scripts/connexion.php';
                    $user = $_SESSION['user'];
                    $sql = mysql_query("select * from tt_news");
                    $nbrow = mysql_numrows($sql);
                    ?>
                    <ul class="list" style="width: 30%;float: left;">

                        <li><a href="gestion-espace.php?act=addart">Ajouter Article</a></li>
                        <li><a href="gestion-nouvelles.php">Afficher Nouvelle</a>
                            <ul>
                                <?php
                                if($nbrow == 2) echo '<li><a style="color: gainsboro; text-decoration: none">Ajouter Nouvelle</a></li>';
                                else echo '<li><a href="gestion-espace.php?act=news">Ajouter Nouvelle</a></li>';
                                ?>

                            </ul>
                        </li>

                    </ul>
                    <ul class="list" style="width: 65%;float: left;">
                        <?php
                        require_once 'scripts/connexion.php';
                        $user = $_SESSION['user'];
                        $sql = mysql_query("select * from tt_articles order by art_date,art_id desc");
                        $nbrow = mysql_numrows($sql);
                        if($nbrow == 0){?>
                            <il>
                                <h3>Aucun article </h3>
                            </il>
                        <?php } else{
                            for($i=0;$i<$nbrow;$i++){
                                $id = mysql_result($sql,$i,'art_id');
                                $titre = mysql_result($sql,$i,'art_titre');
                                $desc = mysql_result($sql,$i,'art_desc');
                                $photo = mysql_result($sql,$i,'art_photo');
                                $valid = mysql_result($sql,$i,'art_valid');
                                ?>
                                <li>
                                    <div style="float: left;width: 100%;">
                                        <img src="images/<?php echo $photo ?>" alt="" style="height: 100px;width: 145px" /><a><?php echo $titre ?></a><br />
                                        <?php echo $desc ?>
                                    </div>
                                    <div style="float: right;">
                                        <a href="gestion-espace.php?act=editart&id=<?php echo $id ?>" class="button1">Modifier</a>
                                        <a href="#" onclick="validation('scripts/delete_article.php?item=<?php echo $id?>')" class="button1">Supprimer</a>
                                    </div>
                                </li>
                            <?php    }}
                        ?>

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <?php include_once 'layout/footer.php' ?>
</div>

<!-- END PAGE SOURCE -->
