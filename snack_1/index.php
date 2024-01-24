<!-- LOGICA DI LAVORO -->

<?php 
    $match = [
        [
            'casa' => 'Indiana Pacers',
            'trasferta' => 'Denver Nuggets',
            'score_casa' => '109',
            'score_trasferta' => '114',
        ],
        [
            'casa' => 'Brooklyne Nets',
            'trasferta' => 'New Yorks Knicks',
            'score_casa' => '103',
            'score_trasferta' => '108',
        ],
        [
            'casa' => 'Dallas Mavericks',
            'trasferta' => 'Boston Celtics',
            'score_casa' => '110',
            'score_trasferta' => '119',
        ],
        [
            'casa' => 'Sacramento Kings',
            'trasferta' => 'Atlanta Hawks',
            'score_casa' => '122',
            'score_trasferta' => '107',
        ]
    ];
?>

<!-- LOGICA DI VISUALIZZAZIONE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack 1</title>
</head>
<body>
    <h1 class="text-center text-uppercase my-3">risultati nba</h1>
    <div class="container">
        <div class="row">
            <?php foreach ($match as $match) { ?>
                <div class="col-6 my-5">
                    <h4 class=" text-center"><?php echo $match['casa']." - ".$match['trasferta']; ?></h4>
                    <h5 class="text-center"> Finale: </h5>
                    <p class=" text-center"><?php echo $match['score_casa']." - ".$match['score_trasferta']; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>