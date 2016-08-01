<?php

require_once 'app/header.php';
?>
<?php 
    
    
        switch ($_GET["id"]){
            case "instruction":
            {
                $instructions = get_instruction($link);
                ?>
                    <?php foreach ($instructions as $inst) :?>
                        <div class="inst">
                            <h1 class="page-header"><?=$inst["inst_header"]?></h1>
                            <p class="well"><?=$inst["inst_text"]?></p>
                            <p><?=$inst["inst_author"]?></p>
                            <p><?=$inst["inst_date"]?></p>
                        </div>
                    <?php endforeach;?>
                <?php
            }
            case "streams":
            {
                
            }
            case "files":
            {
                
            }
            case "partners":
            {
                
            }
            case "contact":
            {
                
            }
        }
            
    
?>
<?php
require_once 'app/footer.php';
