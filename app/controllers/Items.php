<?php 

namespace app\controllers; 

class Items extends \app\core\Controller {
    public function receiptWriter(){
        $Item = new \app\models\Items;
        $Item->laneName($_POST["laneName"]);
        echo ($_POST["laneName"]);
    }
}