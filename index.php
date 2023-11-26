<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" lang="en">
        <title>EPWF</title>
    	<!--Bootstrap5-->
            <!-- Latest compiled and minified CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- Latest compiled JavaScript -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
        
        <link type="text/css" rel="stylesheet" href="css/index.css"/>
    </head>
    <body>
        <h1 id="title">Welcome to E.P.W.F.</h1>

        <h2>Or EmulatorJS PHP Web Frontend</h2>
        
        <?php
            echo "<div id='gb' class='gb'>";
            echo "<h2 id='gb'>GameBoy Games</h2>";
                if ($scanner = opendir('roms/gb')) {
                    while (false !== ($entry = readdir($handle))) {
                        if ($entry != "." && $entry != "..") {
                            $files[] = $entry;
                        }
                    }
                    closedir($scanner);

                    natsort($files);
                    foreach($files as $file) {
                        echo "<a id='gb-link' href='game.html?rom=$file&console=gb'>";
                        // Replace .gb .gbc .gba .7z .rar and .zip with nothing
                            $file = str_replace(".gb","",$file);
                            $file = str_replace(".7z","",$file);
                            $file = str_replace(".rar","",$file);
                            $file = str_replace(".zip","",$file);
                        echo "$file</a>";
                    }
                }
                echo "</div>";
        ?>
    </body>
</html>