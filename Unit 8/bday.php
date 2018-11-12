<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
        $bday = new DateTime("2019-06-10 00:00:00");
        $date = new DateTime("now");
        $diff = $date->diff($bday);

        echo $diff->days.' days, '.$diff->i.' minutes and '. $diff->s.' seconds until your b-day.';
    ?>

</body>
</html>