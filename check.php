
<?php

        
    if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            header('location:login.php?invalid');
            
            
        }

        
    
        


?>