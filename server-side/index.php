<?php
require __DIR__ . '/../database/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>php dischi</title>
</head>
<body>
    <section>
        <div class="container">
            <?php
        foreach ($database as $disco){
            ?>
        
            <div class="card">
                
                
                <div class="img">
                <img src="<?php echo $disco['poster']; ?>" alt="<?php echo 'copertina ' . $disco['title']; ?>">
                </div>
                <h3 class="title"><?php echo $disco['title']; ?></h3>
                <h4 class="artist"><?php echo $disco['author']; ?></h4>
                <h4 class="date"><?php echo $disco['year'] ?></h4>
            </div> 
            <?php
                } ?>
        </div>
    </section> 
</body>
</html>