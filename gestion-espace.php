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
                    <div class="list" style="width: 65%;float: left;">
                        <?php
                            require_once 'scripts/connexion.php';
                            $action = $_GET['act'];
                            if($action == 'addart'){ ?>
                                <form id="contacts-form" action="scripts/save_art.php" class="formular" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                        <div class="field">
                                            <label>Catégorie:</label>
                                            <select name="cat" required="">
                                                <option></option>
                                                <?php

                                                    $req = mysql_query("select * from tt_cat");
                                                    $res = mysql_numrows($req);
                                                    for($i=0;$i<$res;$i++){
                                                        $id_cat = mysql_result($req,$i,'id_cat');
                                                        $cat = mysql_result($req,$i,'categorie');
                                                        ?>
                                                        <option value="<?php echo $id_cat ?>"><?php echo $cat ?></option>

                                                 <?php   }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="field">
                                            <label>Titre:</label>
                                            <input type="text" class="input" name="titre" required />
                                        </div>
                                        <div class="field">
                                            <label>Photo:</label>
                                            <input type="file"  name="photo-site" required />
                                        </div>
                                        <div class="field">
                                            <label>Article:</label>
                                            <textarea name="textarea" id='desc' cols="1" rows="1" ></textarea>
                                        </div>

                                        <div class="wrapper "><button type="submit" class="link1 submit" style="border: none" ><em><b>Enregistrer</b></em></button><div>
                                    </fieldset>
                                </form>

                        <?php    }
                            elseif($action == 'editart'){
                                $current = $_GET['id'];
                                $sql = mysql_query("select * from tt_articles where art_id=$current");
                                $id = mysql_result($sql,0,'art_id');
                                $titre = mysql_result($sql,0,'art_titre');
                                $desc = mysql_result($sql,0,'art_desc');
                                $photo = mysql_result($sql,0,'art_photo');
                                $categ = mysql_result($sql,0,'art_cat');
                                ?>
                                <form id="contacts-form" action="scripts/save_art.php" class="formular" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                        <div class="field">
                                            <label>Catégorie:</label>
                                            <select name="cat" required="">
                                                <option></option>
                                                <?php
                                                $req = mysql_query("select * from tt_cat");
                                                $res = mysql_numrows($req);
                                                for($i=0;$i<$res;$i++){
                                                    $id_cat = mysql_result($req,$i,'id_cat');
                                                    $cat = mysql_result($req,$i,'categorie');
                                                    ?>
                                                    <option value="<?php echo $id_cat ?>" <?php if($categ == $id_cat) echo 'selected' ?>><?php echo $cat ?></option>

                                                <?php   }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="field">
                                            <label>Titre:</label>
                                            <input type="text" class="input" value="<?php echo $titre ?>" name="titre" required />
                                            <input type="hidden" class="input" value="<?php echo $id ?>" name="id" required />
                                        </div>
                                        <div class="field">
                                            <label>Photo:</label>
                                            <input type="file"  name="photo-site"  />
                                            <label><?php echo $photo; ?></label>
                                        </div>
                                        <div class="field">
                                            <label>Article:</label>
                                            <textarea name="textarea" id='desc' cols="1" rows="1" ><?php echo $desc; ?></textarea>
                                        </div>

                                        <div class="wrapper "><button type="submit" class="link1 submit" style="border: none" ><em><b>Enregistrer</b></em></button><div>
                                    </fieldset>
                                </form>
                        <?php    }
                            elseif($action == 'news'){?>
                                <form id="contacts-form" action="scripts/save_news.php" class="formular" method="post" enctype="multipart/form-data">
                                    <fieldset>

                                        <div class="field">
                                            <label>News :</label>
                                            <textarea name="textarea" id='desc' cols="1" rows="1" ></textarea>
                                        </div>

                                        <div class="wrapper "><button type="submit" class="link1 submit" style="border: none" ><em><b>Enregistrer</b></em></button><div>
                                    </fieldset>
                                </form>
                        <?php }
                            elseif($action == 'editnews'){
                                $current = $_GET['id'];
                                $sql = mysql_query("select * from tt_news where news_id=$current");
                                $news = mysql_result($sql,0,'news_news');
                                $id = mysql_result($sql,0,'news_id');
                                ?>
                                <form id="contacts-form" action="scripts/save_news.php" class="formular" method="post" enctype="multipart/form-data">
                                    <fieldset>

                                        <div class="field">
                                            <label>News :</label>
                                            <textarea name="textarea" id='desc' cols="1" rows="1" ><?php echo $news ?></textarea>
                                            <input type="hidden" name="id" value="<?php echo $id ?> ">
                                        </div>

                                        <div class="wrapper "><button type="submit" class="link1 submit" style="border: none" ><em><b>Enregistrer</b></em></button><div>
                                    </fieldset>
                                </form>
                        <?php }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include_once 'layout/footer.php' ?>
</div>

<!-- END PAGE SOURCE -->
