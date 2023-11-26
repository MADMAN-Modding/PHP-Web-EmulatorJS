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
        
        <link type="text/css" rel="stylesheet" href="css/universal.css"/>
    </head>
    <body>
        <h1 id="title">Welcome to E.P.W.F.<a href="https://github.com/MADMAN-Modding/EPWF" target="_blank"><img class="github" src="https://github.com/favicon.ico"></a></h1>

        <h2>Or EmulatorJS PHP Web Frontend</h2>
        
        <h3>Hover/Tap on a console to list the games</h3>

        <h5>(If a game loads but doesn't start just press a button such as enter or a touchscreen button)</h5>

        <?php
            if ($consoleFinder = opendir('roms/')) {

                // Makes the consoleList array
                $consoleList = [];

                // Makes the romList array
                $romList = [];

                // Reads the directory till the end
                while (false !== ($console = readdir($consoleFinder))) {
                    // Excludes . and .. as files/directories
                    if ($console != "." && $console != "..") {
                        // Adds each rom to the list
                        $consoleList[] = $console;
                    }
                }
                
                // Closes the directory to save resources
                closedir($consoleFinder);

                // Alphabetically sorts the consoles
                natsort($consoleList);

                // Runs all this code below for every folder found in
                foreach($consoleList as $consoleName) {              
                    
                    // Scans the rom folders
                    if ($romFinder = opendir("roms/$consoleName")) {

                        // Sets the properties of the game links and sets the game anchor properties
                            echo "<style>.$consoleName-link {font-size: 20px; display: none; margin-bottom: 10px;}.$consoleName:hover .$consoleName-link {display: block;}</style>";
                        
                        // Creates the div
                            echo "<div class=$consoleName>";

                        // Makes the title for the console
                            echo "<h2 class=$consoleName>", strtoupper($consoleName), " Games</h2>";
                        
                        // Reset $romList array for each console
                        $romList = [];
                        
                        // Reads the directory till the end
                        while (false !== ($rom = readdir($romFinder))) {
                            // Excludes . and .. as files/directories
                            if ($rom != "." && $rom != "..") {
                                // Adds each rom to the list
                                $romList[] = $rom;
                            }
                        }

                        // Closes the directory to save resources
                        closedir($romFinder);

                        // Alphabetically sorts the roms
                        natsort($romList);

                        // Runs a loop for every rom to make an anchor
                        foreach($romList as $romName) {
                            
                            // Replace the console extension .7z .rar and .zip with nothing
                                $romName = str_replace(".$consoleName","",$romName);
                                $romName = str_replace(".sfc","",$romName);
                                $romName = str_replace(".7z","",$romName);
                                $romName = str_replace(".rar","",$romName);
                                $romName = str_replace(".zip","",$romName);
                            
                            // Makes the first part of the anchor setting the class, rom file name, and the console
                            echo "<a class=$consoleName-link href=game.html?rom=$romName&console=$consoleName>";
                            
                            // Replaces all the - with spaces
                            $romName = str_replace("-"," ",$romName);

                            // Finishes the anchor tag with the new file name
                            echo "$romName</a>";
                        }
                        // Finishes the div
                        echo "</div>";
                    }
                }
            }
                
        ?>
    </body>
</html>