<!-- LOGICA DI LAVORO -->
<?php
    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
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
    <title>Snack 3</title>
</head>
<body>
    <h1 class="text-center my-4">Ultime notizie</h1>
    <div class="container">
        <div class="row">
            <?php foreach($posts as $index => $day){ ?>
                <div class="row">
                    <h3><?php echo $index; ?></h3>
                    <?php foreach($day as $post){ ?>
                        <div class="">                
                            <h5> <?php echo $post['title']; ?> </h5>
                            <h6> <?php echo $post['author']; ?> </h6>
                            <p> <?php echo $post['text']; ?> </p>
                        </div> 
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>