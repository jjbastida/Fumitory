<!DOCTYPE php>
<html lang="en">

<head>
    <?php
    include "../other/connect.php";
    include "../other/userKeywords.php"
    ?>
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../images/favicon/android-chrome-192x192">
    <link rel="icon" type="image/png" sizes="512x512" href="../images/favicon/android-chrome-512x512.png">
    <link rel="manifest" href="../images/favicon/site.webmanifest">
    <link rel="mask-icon" href="../images/favicon/safari-pinned-tab.svg" color="#6e6e6e">
    <meta name="msapplication-TileColor" content="#ffffff">
        <meta charset="utf-8"><!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113867348-2"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());    gtag('config', 'UA-113867348-2'); </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fumitory - Home</title>
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700|Charmonman:400,700" rel="stylesheet">
</head>

<body>
<!--  If the inventory is empty make it start with  Geranium, Med Kit, Paper Talisman and purge database of users and create encryption 
https://secure.php.net/manual/en/function.password-verify.php
https://secure.php.net/manual/en/function.password-hash.php-->
    <div id="overflow">
        <nav> <a id="logo" href='<?php echo ( "homepage.php?id=".$userId);?>'>
                <img src="../images/logos/fumitory-logo.png" style="height: 4em; display:inline-block;"><h1 class="fumiTitle">Fumitory</h1></a>
            <div id="userMenuContainer"><a href="#"id="userLink"><img src="../images/user.svg" style="width: 2.5em; height: 2.5em; margin:0 .5em; display:inline-block">
                <h2 class="dropDown"><?php
                echo ($userName)
                ?></h2></a></div>
        </nav>
        <div id="main" style="text-align:center">
            <a href='<?php echo ("inventory.php?id=".$userId);?>'><img src="../images/logos/inventory.png" style="width: 90%; display:block; margin: 0 auto 10%"><h1>Inventory</h1></a>
            <a href='<?php echo ("patients.php?id=".$userId);?>'><img src="../images/logos/work.png"  style="width: 100%; display:block;"><h1>Treat Patients</h1></a>
            <a href='<?php echo ("mail.php?id=".$userId);?>'><img src="../images/logos/mail.png" style="width: 80%; display:block; margin: 0 auto 20%"><h1>Mail</h1></a>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>