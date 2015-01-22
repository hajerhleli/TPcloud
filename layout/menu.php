<div id="header">
    <div class="row-1">
        <div class="fleft"><a href="#"><img src="images/logo.png" alt="logo.png" class="logo" /></a></div>
        <div class="fright">
            <ul style="margin: -30px">
                <?php
                session_start();
                if(isset($_SESSION['name_user']) && !empty($_SESSION['name_user']) && $_SESSION['user_account']== 1){
                    echo '<li>Bienvenue <a href= "espace-admin.php">'.$_SESSION['name_user'].'</a></li>';
                    echo '<li><a href="scripts/deconneter.php">Se déconnecter</a></li>';
                }
				if(isset($_SESSION['name_user']) && !empty($_SESSION['name_user']) && $_SESSION['user_account']== 0){
                    echo '<li>Bienvenue '.$_SESSION['name_user'].'</li>';
                    echo '<li><a href="scripts/deconneter.php">Se déconnecter</a></li>';
                }
                ?>
            </ul>
            <br><br>
            <ul>
                <li><a href="#"><img src="images/<?php if ($_SERVER['REQUEST_URI'] == "/telecomapp.tn/accueil.php") echo 'icon1-act.gif'; else echo 'icon1.gif' ?>" alt="" /></a></li>
                <li><a href="#"><img src="images/<?php if ($_SERVER['REQUEST_URI'] == "/telecomapp.tn/contact-us.php") echo 'icon2-act.gif'; else echo 'icon2.gif' ?>" alt="" /></a></li>
                <li><a href="#"><img src="images/<?php if ($_SERVER['REQUEST_URI'] == "/telecomapp.tn/sitemap.php") echo 'icon3-act.gif'; else echo 'icon3.gif' ?>" alt="" /></a></li>
            </ul>
        </div>
    </div>
    <div class="row-2">
        <div class="left">
            <ul>
                <li><a href="index.php" <?php if ($_SERVER['REQUEST_URI'] == "/telecomapp.tn/accueil.php") echo 'class="active"'; ?> ><span>Accueil</span></a></li>
                <li><a href="services.php" <?php if ($_SERVER['REQUEST_URI'] == "/telecomapp.tn/services.php") echo 'class="active"'; ?>><span>Services</span></a></li>
                <li><a href="about-us.php" <?php if ($_SERVER['REQUEST_URI'] == "/telecomapp.tn/about-us.php") echo 'class="active"'; ?>><span>Qui Sommes Nous</span></a></li>

                <li><a href="contact-us.php" <?php if ($_SERVER['REQUEST_URI'] == "/telecomapp.tn/contact-us.php") echo 'class="active"'; ?>><span>Contact</span></a></li>
                <li class="last"><a href="sitemap.php" <?php if ($_SERVER['REQUEST_URI'] == "/telecomapp.tn/sitemap.php") echo 'class="active"'; ?>><span>Plan Du Site</span></a></li>
            </ul>
        </div>
    </div>
    <div class="row-3">
        <div class="inside">
            <h2>Tunisie <b>Telecom</b></h2>
            <p>
                Nous nous engageons à satisfaire nos clients et à répondre à leurs exigences dans les meilleures conditions.
            </p>
        </div>
    </div>
    <div class="extra"><img src="images/header-top.png" alt="" /></div>
</div>