<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if (isset($_GET['page'])) {
                if ($_GET['page'] == 'home') {
                    echo 'Startseite';
                } else {
                echo 'The Lexicon Project';
                }
            } else {
                echo 'The Lexicon Project';
            }
        ?>
    </title>
    <link rel="icon" href="icon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        body {
            background: rgba(235, 235, 235, 1.0);
        }

        .side {
            position: fixed;
            top: 8.3%;
            width: 10%;
            height: 97%;
            right: 90%;
            border-style: solid;
            border-width: 0px 2px 4px 0px;
            border-color: rgb(214, 214, 214);
            text-align: center;
        }

        .head_panel {
            position: absolute;
            top: 0%;
            width: 100%;
            height: 8.2%;
            right: 0%;
            background: rgba(255, 255, 255, 1.0);
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 1.0), rgba(235, 235, 235, 1.0));
            background: -moz-linear-gradient(top, rgba(255, 255, 255, 1.0), rgba(235, 235, 235, 1.0));
            background: linear-gradient(to bottom, rgba(255, 255, 255, 1.0), rgba(235, 235, 235, 1.0));
            border-style: solid;
            border-width: 0px 0px 2px 0px;
            border-color: rgb(214, 214, 214);
        }

        .head_box {
            position: fixed;
            left: 50%;
            top: 3.5%;
            transform: translate(-50%, -50%);
            padding: 10px;    
            display: inline-block;
            font-size: 14px;
            background-color: rgb(211, 211, 211);
            box-shadow: 2px 7px 10px 0px rgba(138,138,138,0.75);
            border-radius: 4px;
            font-family: 'Montserrat', sans-serif;
        }

        a {
            text-decoration: none;
            color: rgb(21, 73, 151);
        }

        a:hover {
            text-decoration: underline;
        }

        .nav_head_img {
            position: absolute;
            width: 340px;
            top: -44px;
            left:0%
        }

        .nav_box_header {
            padding-bottom: 4%;
            color: rgb(49, 49, 49);
            font-weight: 900;
            font-size: 18px;
            font-family: 'Ubuntu', sans-serif;
        }

        .nav_box_header {
            padding-top: 6%;
            text-decoration: underline;
        }

        .center_content_title {
            position: fixed;
            left: 50%;
            top: 20%;
            transform: translate(-50%, -50%);
        }

        .greeting_title_cc {
            font-family: 'Open Sans', sans-serif;
            font-size: 44px;
        }

        .center_search_form {
            position: fixed;
            left: 50%;
            top: 37%;
            transform: translate(-50%, -50%);
        }

        .center_search_form_submit_button {
            position: fixed;
            height: 30px;
            width: 40%;
            left: 50%;
            top: 120%;
            transform: translate(-50%, -50%);
            background-color: rgb(100, 167, 230);
            border: none;
            border-radius: 8px;
            transition: 220ms all ease-in-out;
        }

        .center_search_form_submit_button:hover {
            background-color: rgb(93, 154, 211);
        }

        .center_search_form_input_field_1 {
            height: 30px;
            width: 690px;
            border: none;
            border-radius: 4px;
            box-shadow: -2px 5px 13px 0px rgba(171,171,171,0.75);
            padding-left: 40px;
            background: white url(images/search_FILL0_wght400_GRAD0_opsz48.png) left no-repeat;
            background-size: 29px 29px;
        }

        .center_search_form_input_field_1:hover {
            box-shadow: -2px 5px 11px 0px rgba(150,150,150,0.75);
        }

    </style>
</head>
<body>
    <div class="navigation">
        <div class="head_panel"> 
            <div class="head_image">
                <img src="images\The_Lexicon_Project.png" class="nav_head_img">
            </div>
            <div class="head_box"> 
                <a href="index.php?page=home">Startseite</a> |
                <a href="index.php?page=login">Anmelden</a> |
                <a href="index.php?page=signup">Registrieren</a> 
            </div>    
        </div>
        <div class="side"> 
            <ul class="nav_sidebar_list">
                <div class="nav_sidebar_items">
                    <div class="nav_box_sta">
                        <header class="nav_box_header">Allgemein</header>
                        <li>
                            <a>Startseite</a>
                        </li>
                        <li>
                            <a>Hilfe</a>
                        </li>
                        <li>
                            <a>Kontakt</a>    
                        </li>
                        <li>
                            <a>Datenschutz</a>    
                        </li>
                    </div>
                    <div class="nav_box_misc_1">
                        <header class="nav_box_header">Artikel</header>
                        <li>
                            <a>Zufälliger Artikel</a>
                        </li>
                        <li>
                            <a>Artikel suchen</a>
                        </li>
                        <li>
                            <a>Artikel verbessern</a>    
                        </li>
                        <li>
                            <a>Artikel erstellen</a>    
                        </li>
                        <li>
                            <a>Artikelwünsche</a>    
                        </li>
                    </div>
                    <div class="nav_box_misc_2">
                        <header class="nav_box_header">Tools</header>
                        <li>
                            <a>Wörterbuch</a>
                        </li>
                        <li>
                            <a>Externe Links</a>
                        </li>
                        <li>
                            <a>Änderungen</a>    
                        </li>
                        <li>
                            <a>Statistik</a>    
                        </li>
                        <li>
                            <a>Seiteninformationen</a>    
                        </li>
                    </div>
                    <div class="nav_box_misc_3">
                        <header class="nav_box_header">Sprachen</header>
                        <li>
                            <a>Alemannisch</a>
                        </li>
                        <li>
                            <a>العربية</a>
                        </li>
                        <li>
                            <a>Boarisch</a>    
                        </li>
                        <li>
                            <a>Català</a>    
                        </li>
                        <li>
                            <a>Čeština</a>    
                        </li>
                        <li>
                            <a>Dansk</a>
                        </li>
                        <li>
                            <a>Dolnoserbski</a>
                        </li>
                        <li>
                            <a>Ελληνικά</a>    
                        </li>
                        <li>
                            <a>English</a>    
                        </li>
                        <li>
                            <a>Español</a>    
                        </li>
                        <li>
                            <a>فارسی</a>
                        </li>
                        <li>
                            <a>Suomi</a>
                        </li>
                        <li>
                            <a>Français</a>    
                        </li>
                        <li>
                            <a>Arpetan</a>    
                        </li>
                        <li>
                            <a>Nordfriisk</a>    
                        </li>
                        <li>
                            <a>Frysk</a>
                        </li>
                        <li>
                            <a>עברית</a>
                        </li>
                        <li>
                            <a>हिन्दी</a>    
                        </li>
                        <li>
                            <a>Hrvatski</a>    
                        </li>
                        <li>
                            <a>Hornjoserbsce</a>    
                        </li>
                        <li>
                            <a>Magyar</a>
                        </li>
                        <li>
                            <a>Bahasa Indonesia</a>
                        </li>
                        <li>
                            <a>Italiano</a>    
                        </li>
                        <li>
                            <a>日本語</a>    
                        </li>
                        <li>
                            <a>한국어</a>    
                        </li>
                        <li>
                            <a>Ripoarisch</a>    
                        </li>
                        <li>
                            <a>Latina</a>    
                        </li>
                        <li>
                            <a>Lëtzebuergesch</a>
                        </li>
                        <li>
                            <a>Limburgs</a>
                        </li>
                        <li>
                            <a>Lombard</a>    
                        </li>
                        <li>
                            <a>Plattdüütsch</a>    
                        </li>
                        <li>
                            <a>Nederlands</a>    
                        </li>
                        <li>
                            <a>Norsk bokmål</a>
                        </li>
                        <li>
                            <a>Deitsch</a>
                        </li>
                        <li>
                            <a>Polski</a>    
                        </li>
                        <li>
                            <a>Português</a>    
                        </li>
                        <li>
                            <a>Rumantsch</a>    
                        </li>
                        <li>
                            <a>Română</a>
                        </li>
                        <li>
                            <a>Русский</a>
                        </li>
                        <li>
                            <a>Slovenčina</a>    
                        </li>
                        <li>
                            <a>Slovenščina</a>    
                        </li>
                        <li>
                            <a>Shqip</a>    
                        </li>
                        <li>
                            <a>Српски / srpski</a>
                        </li>
                        <li>
                            <a>Seeltersk</a>    
                        </li>
                        <li>
                            <a>Svenska</a>    
                        </li>
                        <li>
                            <a>ไทย</a>    
                        </li>
                        <li>
                            <a>Türkçe</a>
                        </li>
                        <li>
                            <a>Українська</a>
                        </li>
                        <li>
                            <a>Tiếng Việt</a>    
                        </li>
                        <li>
                            <a>ייִדיש</a>    
                        </li>
                        <li>
                            <a>中文</a>    
                        </li>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class="center_content_title">
        <h1 class="greeting_title_cc">Hallo!
            <span
                class="txt-rotate"
                data-period="2000"
                data-rotate='[ "Willkommen!", "Welcome!", "Welkom!", "Bienvenue!", "Tervetuloa!", "καλώς ήρθατε!", "Benvenuto", "Witamy!" ]'>
            </span>
        </h1>
        <script src="js\anim.js">
        </script>
    </div>
    <div class="center_search_form">
        <form action="/action_page.php">
            <input type="text" id="input_field_1" name="input_field_1" placeholder="Suche" class="center_search_form_input_field_1"> <br><br>
            <input type="submit" value="Suchen" class="center_search_form_submit_button">
        </form>
    </div>
</body>
</html>