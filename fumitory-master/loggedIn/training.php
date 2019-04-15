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
    <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8"><!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113867348-2"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());    gtag('config', 'UA-113867348-2'); </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fumitory - Training</title>
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700|Charmonman:400,700" rel="stylesheet">
</head>

<body>
    <div id="overflow">
      <nav>
            <a id="logo" href='<?php echo ( "homepage.php?id=".$userId);?>'> <img class="logo" src="../images/logos/fumitory-logo.png"  style="height: 100%;"></a>
            <div id="userMenuContainer">
                <a href="#" id="userLink"><img src="../images/user.svg" style="width: 2.5em; height: 2.5em; margin:0 .5em; display:inline-block">
                    <h2 class="dropDown"><?php
                echo ($userName)
                ?></h2></a>
            </div>
        </nav>
        <div id="content">
            <div class="leftBox">
                <br>
                <br>
                <h1 class="noSpace">Welcome, Doctor <?php
            echo($userName);
            ?></h1>
                <p>This short tutorial will take you through all the steps necessary to becoming a plague doctor and helping your patients!</p><br>
                <p>It is the year 1656, in the village of Novive, Kingdom of Naples;
                <br>Death looms as the black death has continued to feast on the innocent (for the most part). Every person is equal in death, most may not make it to see the light of tomorrow.<br>This is where you come in, <strong>It's your job to help the people!</strong><br><br> Start by going to work in town and selecting a patient. Each patient has different needs and different symptoms so be sure to think of the best cure.</p>
                <img class="bodyImage" src="../images/image1.png" style="width: 100%;">
                <p><br><br><strong>Find ingredients and different tools to help patients, everything is hidden on or near Sheridan Campus grounds outside! Be sure to only scan things you find, and leave them where you found them.</strong> You'll recieve mail every other day telling you where some items could be to help cure your patients in different ways.</p>
                <img class="bodyImage" src="../images/image3.png" style="width: 100%;">
                <p><br><br>Once you have used an ingredient on someone you will be unable to give them anything else for 12 hours while it takes effect. <strong>Remember to take care of your patients as their sickness worsens with each passing day, and if you're not careful, death could strike.</strong></p>
                <br>
                <a class="button thickB" href='<?php echo ("homepage.php?id=".$userId);?>'>Continue</a>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>