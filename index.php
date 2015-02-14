

<!DOCYPE html>
<html>
    <head>
        <title>Lab 2: Silverjack</title>
        <meta charset="utf-8"/>
        <link href="css/styles.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
        
    </head>
    
    
    <body>
        
        <?php
            require 'Includes/Functions.php'; 
        ?>
        <div class="wrapper">
            
            <h1 id="mainheader" font:><strong>SILVERJACK</strong></h1>
            
            <img src="img/miranda.png" alt="Miranda Trayford"/>
            <?=generateRandomNumer();?>
            <br />
            <img src="img/alonso.png" alt="Alonso Mendoza"/>
            <?=generateRandomNumer();?>
            <br />
            <img src="img/elias.png" alt="Elias Ramirez"/>
            <?=generateRandomNumer();?>
            <br />
            <img src="img/adrian.png" alt="Adrian Miguel"/>
            <?=generateRandomNumer();?>
            <?php
                $players = array("Miranda", "Alonso", "Elias", "Adrian");
                $count = 0;
                $max = array_search(max($total), $total);
                echo "<p style = 'color: white; text-align: center; font-size: xx-large'>".$players[$max]." won!</p>";
        

            ?>
            <div class="myButton">
            <a href="index.php" style = "text-decoration: none; color:black; font-weight: bold;">Play Again</a>
            
            </div>
            <br/><br/>
            <footer style = 'color:white; text-align:center; font-size: large;'>&copy 2015 by Elias Ramirez, Mirand Trayford, Alonso Mendoza, and Adrian Miguel.</footer>
        </div> 
        
    </body>
    
</html>
