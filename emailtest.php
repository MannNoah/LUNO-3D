<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular</title>
  </head>
  <body>
    <?php
    $empfaenger = "noah-mann@t-online.de";
    $betreff = "Kontaktformular";
    $from = "From: ";
    $from .= $POST ['name'];
    $from .= " <";
    $from .= $_POST ['email']:
    $from . = ">\n";
    $from .= "Reply-To: "
    $from . = $_POST ['email'];
    $from .= "\n";
    $from .= "Content-Type: text\html\n";
    $text = $_POST ['Kommentar'];

    mail ($empfaenger, $betreff, $text, $from);
    echo "Vielen Dank";
    ?>
  </body>
</html>
