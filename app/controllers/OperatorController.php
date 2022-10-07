<?php

namespace App\Controllers;

require_once '../../vendor/autoload.php';

date_default_timezone_set('America/Sao_Paulo');

$Operator = new \App\Models\Operator;

$Alert = new \App\Models\AlertMsg;

$OperatorDAO = new \App\DAO\OperatorDAO;

$Input = filter_input_array(INPUT_POST);

include_once '../../inc/header.php';

?>

    <div class="container mt-5 w-50">
        
        <?php

            if(isset($_POST["CreateOperator"])){
                
                $ID = (!empty($_SESSION['OP'])) ? count($_SESSION['OP']) + 1 : 1;

                $Operator->setId($ID);
                $Operator->setName($Input['NOME']);
                
                $CreateOperator = $OperatorDAO->Create($Operator);
                if($CreateOperator){
                    $Alert->success("Sucesso!", "Cadastro de operadora realizado com sucesso!");
                    echo $Alert;
                }else{
                    $Alert->danger("Erro!", "Erro ao cadastrar");
                    echo $Alert;
                }

            }

        ?>

        <div class="text-center">
            <a href="../../index.php" class="btn btn-secondary rounded-pill px-4">Voltar</a>
        </div>

    </div>
    
<?php include_once '../../inc/footer.php'; ?>