<?php
$csv = file_get_contents('./csv.csv');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="robots" content="index, follow, all" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript"  src="functions.js"></script>
        <title>Mage Noir TTS Deck maker</title>
    </head>
    <body id="home" class="container-fluid">
        <textarea id="area"></textarea>

    <script type="text/javascript">
        document.getElementById("area").innerHTML = csvJSON('<?php echo $csv; ?>');
    </script>
    </body>
</html>
