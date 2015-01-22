<div class="col-2">
    <div class="box2">
        <div class="border-top">
            <div class="left-top-corner">
                <div class="right-top-corner">
                    <div class="inner">
                        <h4>Nouvelles</h4>

                        <ul class="news">
                            <?php
                            require_once 'scripts/connexion.php';

                            $sql = mysql_query("select * from tt_news");
                            $nbrow = mysql_numrows($sql);
                            for($i=0;$i<$nbrow;$i++){
                                $date = mysql_result($sql,$i,'news_date');
                                $news = mysql_result($sql,$i,'news_news');?>
                                <li><a><?php echo $date ?></a>
                                    <p><?php echo $news ?></p>
                                </li>
                         <?php   }
                            ?>


                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box3">
        <div class="right-bot-corner">
            <div class="left-bot-corner">
                <div class="inner">
                    <h4><b>Connectez</b> Vous</h4>

                    <form action="scripts/authentification.php" id="login-form" method="post">

                        <fieldset>
                            <div class="field">
                                <label>E_mail:</label>
                                <input class="validate[required,custom[email]] text-input" type="text" name="email" id="email" />
                            </div>
                            <div class="field">
                                <label>Mot de passe:</label>
                                <input class="validate[required] text-input" type="password" name="password"  id="password" />
                            </div>
                            <div class="field1">
                                <button type="submit" class="link1 submit" style="border: none" ><em><b>Se connecter</b></em></button>
                            </div>
                            <ul>
                                <li><a href="#">Mot de passe oublier?</a></li>
                                <li class="last"><a href="inscrivez-vous.php">Inscrivez-Vous</a></li>
                            </ul>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>