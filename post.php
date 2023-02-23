<?php
    $array=$_POST['array'];
    if(count($array)<4){
        for($i=count($array);$i<4;$i++){
            $array[$i]=' ';
        };
    };
    
    echo json_encode($array);
    
?>