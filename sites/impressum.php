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
        <a href="wissensquiz.html">Wissensquiz</a>
        <a href="karte.html">Karte</a>
        <a id="navbar-active" style="float:right" href="impressum.html">Impressum</a>
    </div>
</div>

<div id="content-left">
    <div class="content-box-left">
        <h2>Kontaktformular</h2>
        <?php
        $name = $_GET['name'];
        $email = $_GET['email'];
        $message = $_GET['text'];
        $phone= $_GET['tel'];
        $formcontent=" Von: $name \n Telefon: $phone \n Mein Anliegen: $message";
        $recipient = "mattes@fgt16.de";
        $subject = "Anliegen im Kaiserreich";
        $mailheader = "From: $email \r\n";
        mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
        echo "<h3>Vielen dank für Ihre Nachricht!</h3>";
        ?>
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
