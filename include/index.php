<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="style.css">
    <?php 
        require_once 'data.php';

    ?>
</head>
<body>

<div class="container">
        <div id="app" class="app" >
            <header>
                <div class="logo">BOOLFIX</div>
                <div class="right_header">
                    <input type="search">

                    <button>
                    Cerca
                    </button>
                </div>
            </header>
    
            <section>
                    <?php
                    foreach ($database as $infotype=>$album){ ?>
                <div class="pre-containers">
                        <div class="small-containers">
                            <img src="<?php echo $album["poster"]?>" alt="">
                            <div class="info">
                            
                            <?php 
                                
                                echo $album["title"] . "<br>";
                                echo $album["author"]. "<br>";
                                echo $album["year"]. "<br>";
                            
                    ?>

                            </div>
                        </div>
                </div>
                <?php }
                ?>
</body>
</html>