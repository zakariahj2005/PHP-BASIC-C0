<?php  
    $leeftijd = 16;
?>
<html>
<head>
</head>
<body>

    <div id="IsMeerderJarig">
        <?php
            if($leeftijd < 18 ){
                echo "<h6>Je bent te jong om deze pagina te bekijken</h6>";
            }
        ?>
    </div>

</body>
</html>