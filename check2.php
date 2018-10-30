
<?php

        
    if ($_POST['semail'] && filter_var($_POST["semail"], FILTER_VALIDATE_EMAIL) === false) {
        header('location:login.php?sinvalid');
            
            
        }
        
    
        


?>