<?php

namespace App\DAO;

require_once '../../vendor/autoload.php';

date_default_timezone_set('America/Sao_Paulo');

use App\Models\Operator;

class OperatorDAO{

    public function Create(Operator $Operator){
        
        $_SESSION['OP'][$Operator->getId()] = 
        [
            "Name" => $Operator->getName(),
            "Fares" => []
        ];

        return true;

    }

}

?>