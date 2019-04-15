<!DOCTYPE php>
<html lang="en">

<head>
    <?php
    include "../other/connect.php";
    include "../other/userKeywords.php"
    ?>
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="512x512" href="../images/favicon/android-chrome-512x512.png">
    <link rel="manifest" href="../images/favicon/site.webmanifest">
    <link rel="mask-icon" href="../images/favicon/safari-pinned-tab.svg" color="#6e6e6e">
    <meta name="msapplication-TileColor" content="#ffffff">
        <meta charset="utf-8"><!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113867348-2"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());    gtag('config', 'UA-113867348-2'); </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fumitory - Inventory</title>
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700|Charmonman:400,700" rel="stylesheet"> </head>
    <script src="../other/patientSpeech.js"></script>
<body>
    <div id="overflow">
        <nav>
            <a id="logo" href='<?php echo ( "homepage.php?id=".$userId);?>'><img class="logo" src="../images/logos/fumitory-logo.png" style="height: 100%;"></a>
            <div id="userMenuContainer">
                <a href="#" id="userLink"><img src="../images/user.svg" style="width: 2.5em; height: 2.5em; margin:0 .5em; display:inline-block">
                    <h2 class="dropDown"><?php
                echo ($userName)
                ?></h2></a>
            </div>
        </nav>
        <div id="inventory">
            <?php
            $userItems = explode(", ", $userInventory);
            foreach ($userItems as $element) {
            $desc = $conn->query("SELECT `itemDesc` FROM items WHERE `itemName` = '".$element."';")->fetch_assoc()["itemDesc"];
            createItem($element, $desc);
            };
                
            function createItem($itemName, $itemDesc){
                $fileName = str_replace(' ', '-', $itemName);
                echo('<div><div class="overHover"><p>'.$itemDesc.'</p><img src="../images/inventory/'.$fileName.'.png" style="width: 100%; display:block;"></div>
                <p>'.$itemName.'</p>
            </div>');
            };
            ?>
            
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>