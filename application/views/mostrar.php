<?php
if(is_array($data)){
    foreach($data as $k)
    {
        echo "<div>".$k['cuerpo']."</div>";
    }
}
?>