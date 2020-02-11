<?php
    $currentHour = date('H');
    $outputText = '';
    $imageSrc = '';
    if($currentHour < 6) {
        $imageSrc = 'night.png';
        $outputText = 'Goede nacht!';
    } elseif($currentHour > 6 && 12 > $currentHour) {
        $imageSrc = 'morning.png';
        $outputText = 'Goede morgen!';
    } elseif($currentHour > 12 && 18 > $currentHour) {
        $imageSrc = 'afternoon.png';
        $outputText = 'Goede middag!';
    } elseif($currentHour > 18) {
        $imageSrc = 'evening.png';
        $outputText = 'Goede avond!';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./Data/CSS/main.css" rel="stylesheet">
    <title><?php echo $outputText ?></title>
</head>
<body>
    <?php echo '<img class="backgroundImage" src="./Data/Images/'.$imageSrc.'" alt="TEST?">'; ?>
    <h1><?php echo $outputText ?></h1>
    <h1><?php echo "Het is nu " . date('H\:i') ?></h1>
</body>
</html>