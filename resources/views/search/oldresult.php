<html>
    <body>   
        <?php

                    //turns page content into string
                $aboutcontent = file_get_contents('C:\xampp\htdocs\mylara\resources\views\pages\about.blade.php', true);
                    //input field   
                $input = $_GET["name"];

            if (empty($_GET["name"])) {
                echo "Please search for something!";
                }

            else {
                    //find the number of into input-field inserted string
                $found = substr_count($aboutcontent, $input);

                    //find (canse insensitive)string in a string
                $matches = stristr($aboutcontent, $_GET["name"]);

                echo "Found: " . $found . "<br>";
            
                    //display the results in string from the 1st till 100 catarcter
                echo substr($matches, 0, 100)  . "....";
            }


        ?>              
    </body>
</html>

<?php
                            //input field in search
                        $input = $_GET["name"]; 
                            //get content from page as string
                        $aboutcontent = file_get_contents('C:\xampp\htdocs\mylara\resources\views\pages\about.blade.php', true);
                            //search all matches for pattern in lowercase
                        $match = preg_match_all('/\b'. strtolower($input) .'\b/', strtolower($aboutcontent));
                            //if the input field is empty
                    if (empty($_GET["name"])) {
                        echo "Please search for something";
                    }
                            //if there is no match 
                    elseif($match == 0){
                        echo "For the word: " .mb_strtoupper($input). " no match";    
                    }
                            //if there is a match
                    else{
                        echo "For the word: " .mb_strtoupper($input). " you have $match match";
                    }
                ?>