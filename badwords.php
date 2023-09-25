<?php
$paragraph = $_GET['paragraph'];
$censored= $_GET['badwords'];
$lenghtParagraph = strlen($paragraph);
$censoredParagraph= str_replace( $censored,'***', $paragraph);
$lenghtCensoredParagraph= strlen($censoredParagraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <p><?php echo $paragraph . ' ';  ?></p>
    <p><?php echo 'paragraph length ' . $lenghtParagraph . ' chars'; ?></p>
    <p><?php echo $censoredParagraph . ' '; ?></p>
    <p><?php echo 'censored paragraph length ' . $lenghtCensoredParagraph . ' chars'; ?></p>
</body>
</html>