<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rottorf</title>
    <link rel="stylesheet" href="../mystyle.css">

    <div id="head">
        <h1>Kaiserreich Rottorf</h1>
    </div>
</head>

<body>
    <div id="navbar">
        <div id="navbar-margin">
            <a href="../index.html">Home</a>
            <a href="sportverein.html">Sportverein</a>
            <a href="feuerwehr.html">Feuerwehr</a>
            <a href="ur.html">united Rottorf</a>
            <a id="navbar-active" href="wissensquiz.html">Wissensquiz</a>
            <a href="karte.html">Karte</a>
            <a style="float:right" href="impressum.html">Impressum</a>
        </div>
    </div>

    <div id="content-left">
        <div class="content-box-left">
            <h2>Ihre Auswertung</h2>
            <div style="margin: 3% 6% 0 3%">
                <?php
                    if($_POST['submit'] == true) {
                        $gesamtpunkte = "0";

                        echo "<h3><br>Frage 1</h3>";
                        if ($_POST['ew'] == "1100-1200") {
                            echo "Richtig! In Rottorf leben (Stand 31. Dezember 2017) 1143 nette leute.";
                            $gesamtpunkte += 1;
                        }
                        else {
                            echo "Leider Flasch! Richtig wäre 1100-1200 gewesen. In Rottorf Leben (Stand 31. Dezember 2017) 1143 nette Leute";
                        }
                        echo "<h3>Frage 2</h3>";
                        if (isset ($_POST['tbk']) and ($_POST['zl']) and ($_POST['cc'])) {
                            echo "Richtig! Bei Zur Linde, Café Canapé und Taverna bei Kosta kann man essen gehen.";
                            $gesamtpunkte += 1;
                        }
                        else {
                            echo "Leider Flasch! Richtig wären Zur Linde, Café Canapé und Taverna bei Kosta gewesen.";
                        }

                        echo "<h3>Frage 3</h3>";
                        if ($_POST['aktion'] == "sf-df") {
                            echo "Richtig! Das Sommerfest und das Dorffest finden alle zwei Jahre im Wechsel statt.";
                            $gesamtpunkte += 1;
                        }
                        else {
                            echo "Leider Flasch! Richtig wären Sommerfest und Dorffest gewesen.";
                        }
                        echo "<h3><br><br>Gesamtpunktezahl</h3>Sie haben $gesamtpunkte/3 Punkten erreicht.<br>Gratulation";

                    }
                ?>
            </div>
        </div>
    </div>

    <div id="content-right">
        <div class="content-box-right">
            <h2>NEWS</h2>
             <h3>Sommerfest</h3>
            <img class="image-center" src="../images/news_sommerfest.jpg" alt="Image will be load in few seconds...">
            <p>
                Kommendes Wochenende steht in Rottorf das Sommerfest der Feuerwehr vor der Tür.
                Kleine Spiele für die Kinder und abends ein DJ der für ordentlich Partystimmung sorgt.
            </p>
        </div>

        <div class="content-box-right">
            <h2>NEWS</h2>
            <h3>15 Jahre Jubiläum uR</h3>
            <img class="image-center" src="../images/urjubiläumsfeier.jpg" alt="Image will be load in few seconds...">
            <p>
                united Rottorf feierte am letzten Wochenden ihr 15 jähriges Jubiläum.
                Eine Band Spielte Musik, die gute Laune verbreitete. Bei der Tombola wurden
                einige tolle Preise verlost. Eine rundum schöne Feier.
            </p>
        </div>
    </div>
</body>
</html>
