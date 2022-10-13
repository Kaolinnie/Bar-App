<?php

namespace app\models;

class Items{
    function laneName($input){
        $file = fopen('app/resources/order.txt','w+');
        flock($file,LOCK_EX);

        fwrite($file, "Name of person: " . $input);

        flock($file,LOCK_UN);
        fclose($file);
    }
}

