<?php require "db/dbconect.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public_html/media/css/fastfood.css">
    <link rel="stylesheet" href="../public_html/media/css/slid.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <title>Cafe Bars</title>


<?php require "header.php"?>

<body>

    <div class="container">
        <div class="block">
            <div class="block_content">
                <div class="all">
                <input checked="" type="radio" name="respond" id="desktop">
                <article id="slider">
                    <input checked="" type="radio" name="slider" id="switch1">
                    <input type="radio" name="slider" id="switch2">
                    <input type="radio" name="slider" id="switch3">
                    <input type="radio" name="slider" id="switch4">
                    <input type="radio" name="slider" id="switch5">
                    <div id="slides">
                        <div id="overflow">
                            <div class="image">
                                <article><img src="media/images/cafe/1.jpg"></article>
                                <article><img src="media/images/cafe/2.jpg"></article>
                                <article><img src="media/images/cafe/3.jpg"></article>
                                <article><img src="media/images/cafe/4.jpg"></article>
                                <article><img src="media/images/cafe/5.jpg"></article>
                            </div>
                        </div>
                    </div>
                    <div id="controls">
                        <label for="switch1"></label>
                        <label for="switch2"></label>
                        <label for="switch3"></label>
                        <label for="switch4"></label>
                        <label for="switch5"></label>
                    </div>
                    <div id="active">
                        <label for="switch1"></label>
                        <label for="switch2"></label>
                        <label for="switch3"></label>
                        <label for="switch4"></label>
                        <label for="switch5"></label>
                    </div>
                </article>
                </div>
            </div>
        </div>
    </div>




    <div class="height">
            <div class="container">

                    <div class="block2">
                        <div class="block_content2">

                            <?php
                            $info=mysqli_query($connection,"SELECT * FROM info");
                            ?>
                            <?php
                            while ($inf= $info->fetch_assoc()) {
                            ?>
                                <div class="design">
                            <div class="place_img">
                                <img class="img" src="media/images/cafe/<?php echo $inf['images'];?>">
                            </div>

                            <div class="text">
                                <div class="text_header"><?php echo $inf['name'];?></div>
                                <div class="info"><?php echo $inf['info'];?></div>
                            </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
            </div>
    </div>




</body>
</html>