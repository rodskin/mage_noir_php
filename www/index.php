<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="robots" content="index, follow, all" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="vendors/jquery.js" data-key="jquery"></script>
        <link rel="stylesheet" type="text/css" media="all" href="css/styles.css" data-key="style-general" />
        <title>Mage Noir TTS Deck Builder</title>
    </head>
    <body id="home" class="container-fluid">
        <div id="app">
        <?php include ('header.php'); ?>
        <?php
            switch ($_GET['page']) {
                case 'about':
                    include('about.php');
                    break;
                default:
                    include('deck_builder.php');
            }
        ?>
        </div>
    </body>
</html>
