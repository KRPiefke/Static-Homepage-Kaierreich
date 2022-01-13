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
        $recipient = "spam@kaiserreich.cloud";
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
            <img class="image-center" src="" alt="Image will be load in few seconds...">
            <p>
                Derzeit stehen keine Neuigkeiten zur Verfügung.
            </p>
        </div>
    </div>
</body>
</html>
