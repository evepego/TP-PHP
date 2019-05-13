<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Météo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    </head>
    <body>
        <?php
            $heure = date("h:i");
            $date = date("d F Y");
        ?>
        <h1>Date du jour : <?php echo $date ?></h1>
        <h2> Heure actuelle : <?php echo $heure ?></h2>
        <?php
            include ("paris.php");
            include ("bdx.php");

            while($heure >= 7 AND $heure <= 19)
            {
                echo "<body bgcolor='white'>";
                echo "body color='black'>";
            }
            if ($heure > 19 AND $heure < 6)
            {
                echo "<body bgcolor='black'>";
                echo "<body color='white'>";
            }
        ?>
    </body>
</html>