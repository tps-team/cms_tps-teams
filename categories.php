<?php

require_once 'app/header.php';
?>
<?php 
    
    
        switch ($_GET["id"]){
            case "instruction":
            {
                echo '<div class="news">
                        <h1 class="page-header"><?=$n_news["header"]?></h1>
                        <p class="well"><?=$n_news["text"]?></p>
                     </div>';
            }
        }
            
    
?>
<?php
require_once 'app/footer.php';
?>