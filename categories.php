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
                $streams = get_streams_notifise($link);
                ?>
                <?php foreach ($streams as $stream) :?>
                        <div class="streams">
                            <h1 class="page-header"><?=$stream['stream_title']?></h1>
                            <img src='<?=$stream['stream_pic_url']?>'<a href="<?=$stream['stream_twitch_url']?>">
                            <p><?=$stream['stream_description']?></p>
                            <div class="alert alert-info"><p><?=$stream['stream_time']?> <?=$stream['stream_date']?></p></div>
                        </div>
                    <?php endforeach;?>
                <?php
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
