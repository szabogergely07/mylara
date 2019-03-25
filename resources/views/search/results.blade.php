
<html>
    <body>   
        <?php
             $aboutcontent = file_get_contents('C:\xampp\htdocs\mylara\resources\views\pages\about.blade.php', true);//returns page content as string
             $found = strpos($aboutcontent, $_GET["name"]);
            echo $found;
        ?>              
    </body>
</html>
