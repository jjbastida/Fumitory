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
        <title>Fumitory - Mail</title>
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700|Charmonman:400,700" rel="stylesheet"> </head>

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
        <div id="mail">
            <div id="leftColumn">
                <?php
                    //fix this and also fix the main health timer, and double check it and also cry and also also also check ur self and do the patient like in betweens and shit for dialogue so yeah.... oh also also add in the new items and get organized again
            $mailRow = $conn->query("SELECT * FROM `mail` WHERE unlockTime <= '".date('Y/m/d')."';");
            foreach ($mailRow as $element) {
            $title = $element["mailTitle"];
            $desc = $element["mailContent"];
            createMail($title, $desc);
            };
                
            function createMail($mailTitle, $mailDesc){
                echo('<div class="mail greyeded"><h4>'.$mailTitle.'</h4>
                <p>'.$mailDesc.'</p></div>');
            };
            ?>
                    
            </div>
            <div id="rightColumn">
                <h1 id="mainTitle"></h1>
                <p id="mainContent"><strong>To start select some mail.</strong></p>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
    <script>
        var mail = document.getElementsByClassName("mail");
        var mainTitle = document.getElementById("mainTitle");
        var mainContent = document.getElementById("mainContent");
        for (i = 0; i < mail.length; i++) {
            mail[i].addEventListener("click", function () {
                greyAll(this);
                this.classList.remove("greyeded");
                this.classList.add("selected");
                mainTitle.innerHTML = this.children[0].innerHTML;
                mainContent.innerHTML = this.children[1].innerHTML;
            })
        }

        function greyAll(blob) {
            for (h = 0; h < mail.length; h++) {
                if (mail[h].classList.contains("greyeded") == false) {
                    mail[h].classList.add("greyeded");
                };
                if (mail[h].classList.contains("selected") == true) {
                    mail[h].classList.remove("selected");
                };
            }
        }
    </script>
</body>

</html>