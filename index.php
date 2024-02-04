<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
	<head>

		<!-- Meta	 -->
		<meta charset="utf-8">
		<TITLE>THE TURING MACHINE PROJECT</TITLE>
		<META content="french, FR, francais" name=language>
		<META name=category content="">
		<META content="" name=keywords>
		<META content="" name=description>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="">
		
		<!--css-->
		<link rel="stylesheet" href="style/css/style.css">
		<link rel="stylesheet" href="style/css/index.css">
    </head>

    <body>
        <main>
            <h1>THE TURING MACHINE PROJECT</h1>

            <form method="post">
                <label>Entrez un nombre</label>
                <input type="number" name="x" min="1" max="5">
                <input type="number" name="y" min="1" max="5">
                <input type="number" name="z" min="1" max="5">

                <input type="submit">
            </form>

            <?php 
                $postdata = $_POST;
                $math = $postdata['x'] * 100 + $postdata['y'] * 10 + $postdata['z'];
                $answer = 421;
                    switch(true) {
                        case $math < $answer :
                            echo "C'est plus grand!";
                            break;
                        case $math == $answer :
                            echo "C'est une bonne réponse! Bravo!";
                            break;
                        case $math > $answer :
                            echo "C'est plus petit!";
                            break;
                    }
            ?>
        </main>
    </body>