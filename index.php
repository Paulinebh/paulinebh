<?php
// Form
$_formAction = 'http://getsimpleform.com/messages?form_api_token=f3e207bc5e0f68d68c5c40fad3472aa3';
$_formRedirect = 'http://pauline.bodin-hullin.net/?success';

// Downloads
// CV
$files = glob(__DIR__ . '/downloads/*cv*');
$cvPath = '/downloads/' . basename($files[0]);
$cvSize = ceil(filesize(__DIR__ . $cvPath) / 1024) . 'Ko';

// Portfolio
$files = glob(__DIR__ . '/downloads/*portfolio*');
$portfolioPath = '/downloads/' . basename($files[0]);
$portfolioSize = round(filesize(__DIR__ . $portfolioPath) / 1024 / 1024, 2) . 'Mo';
?>
<!DOCTYPE HTML>
<html lang="fr-FR">
    <head>
        <title>Pauline Bodin-Hullin - Architecte D.E.</title>
        <meta charset="UTF-8" />
        
        <meta name="viewport" content="width=840" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <link rel="stylesheet" href="css/main.css" type="text/css" />

        <!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script type="text/javascript">
            var FORM_ACTION = '<?php echo $_formAction; ?>';
        </script>
        <script src="js/events.js"></script>
    </head>

    <!--[if lt IE 7 ]><body class="is_ie6 lt_ie7 lt_ie8 lt_ie9 lt_ie10"><![endif]--> 
    <!--[if IE 7 ]><body class="is_ie7 lt_ie8 lt_ie9 lt_ie10"><![endif]--> 
    <!--[if IE 8 ]><body class="is_ie8 lt_ie9 lt_ie10"><![endif]--> 
    <!--[if IE 9 ]><body class="is_ie9 lt_ie10"><![endif]--> 
    <!--[if gt IE 9]><body class="is_ie10"><![endif]--> 
    <!--[if !IE]><!--><body><!--<![endif]-->
        <div id="main">

<?php if (isset($_GET['success'])): ?>
<p class="cssn_messages">
    <a class="success" href="#">Merci pour votre message. Je vous répondrai dans les meilleurs délais.</a>
</p>
<?php endif; ?>
            
            <hgroup>
                <h1>
                    Pauline Bodin-Hullin
                    <span class="slash-left">/</span><span class="slash-right">/</span>
                    Architecte diplômée d'Etat
                </h1>
                <h2>
                    <span>/</span>
                    ENSA Paris Val-de-Seine - Hafen City Universität Hamburg
                </h2>
            </hgroup>

            <ul id="concepts">
                <li><span>/</span> Conception urbaine, paysage et espaces publics</li>
                <li><span>/</span> Conception architecturale</li>
            </ul>

            <div id="info">
                <p id="open">&gt; <strong>En poste.</strong></p>

                <ul id="links">
                    <li class="contact"><a href="#contact">Me contacter</a></li>
                    <li class="cv"><a href="<?php echo $cvPath; ?>" target="_blank">CV <small>(pdf <?php echo $cvSize; ?>)</small></a></li>
                    <li class="portfolio">
                        Mon Portfolio
                        <ul>
<?php /* ?>
                            <li><a href="#">&gt; en ligne</a></li>
<?php //*/ ?>
                            <li><a href="<?php echo $portfolioPath; ?>" target="_blank">&gt; télécharger <small>(pdf <?php echo $portfolioSize; ?>)</small></a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div id="contact">
                <form method="post" action="" class="cssn_form float_form">
                    <fieldset>
                        <legend>Me contacter</legend>
                        <ul>
                            <li class="box">
                                <label for="form_name">Votre nom</label>
                                <input id="form_name" type="text" placeholder="" name="Nom" />
                            </li>
                            <li class="box">
                                <label for="form_email">Votre email</label>
                                <input id="form_email" type="text" placeholder="" name="Email">
                            </li>
                            <li class="box">
                                <label for="form_company">Votre société</label>
                                <input id="form_company" type="text" placeholder="" name="Société">
                            </li>
                            <li class="box textarea-box">
                                <label for="form_message">Votre message</label>
                                <textarea id="form_message" name="Message" cols="20" rows="5"></textarea>
                            </li>
                            <li class="box buttons-box">
                                <input type="hidden" name="redirect_to" value="<?php echo $_formRedirect; ?>" />
                                <a class="le-button back" href="#back">Retour</a>
                                <button class="le-button" type="submit">Envoyer</button>
                            </li>
                        </ul>
                    </fieldset>
                </form>
            </div>

        </div>
    </body>
</html>
