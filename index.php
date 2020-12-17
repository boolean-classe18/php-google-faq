<?php include 'faq.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Google FAQ</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="dist/app.css">
    </head>
    <body>
        <header>
            <div class="header-left">
                <div class="logo">
                    <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="Google">
                    <h1>Privacy e termini</h1>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li>
                            <a href="#">Introduzione</a>
                        </li>
                        <li>
                            <a href="#">Norme sulla privacy</a>
                        </li>
                        <li>
                            <a href="#">Termini di servizio</a>
                        </li>
                        <li>
                            <a href="#">Tecnologie</a>
                        </li>
                        <li>
                            <a href="#" class="active">Domande frequenti</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header-right">
                <i class="fas fa-2x fa-th"></i>
                <i class="fas fa-2x fa-user-circle"></i>
            </div>
        </header>
        <main>
            <div class="container">
                <?php
                foreach ($faq as $single_faq) { ?>
                    <h2><?php echo $single_faq['question']; ?></h2>
                    <?php
                    foreach ($single_faq['answer'] as $paragraph) { ?>
                        <p><?php echo $paragraph; ?></p>
                        <?php
                    }
                }
                ?>
            </div>
        </main>
        <footer>
            <div class="container">
                <div class="footer-wrapper">
                    <div class="footer-left">
                        <ul>
                            <li>
                                <a href="#">Google</a>
                            </li>
                            <li>
                                <a href="#">Tutto su Google</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Termini</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-right">
                        <i class="fas fa-comment-alt"></i>
                        <select class="" name="">
                            <option value="">italiano</option>
                            <option value="">English</option>
                            <option value="">Espanol</option>
                            <option value="">Deutsch</option>
                        </select>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
