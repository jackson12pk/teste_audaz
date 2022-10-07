<?php

namespace App\Controllers;

require_once '../../vendor/autoload.php';

date_default_timezone_set('America/Sao_Paulo');

// echo '<meta http-equiv="refresh" content="5;url=../../index.php">';

$Fare = new \App\Models\Fare;

$Alert = new \App\Models\AlertMsg;

$FareDAO = new \App\DAO\FareDAO;

$Input = filter_input_array(INPUT_POST);

include_once '../../inc/header.php';

?>

    <div class="container mt-5 w-50">
        
        <?php

            if(isset($_POST["CreateFare"])){
                
                $ID = (!empty($_SESSION['OP'][$Input['OPERADORA']]['Fares'])) ? count($_SESSION['OP'][$Input['OPERADORA']]['Fares']) + 1 : 1;
                $VALOR = str_replace(',', '.', str_replace('.', '', $Input['VALOR']));
                $Fare->setId($ID);
                $Fare->setValue($VALOR);
                $Fare->setStatus($Input['STATUS']);
                $Fare->setCreated(date("Y-m-d H:i:s", strtotime($Input['CRIADOEM'])));
                $Fare->setOperatorId($Input['OPERADORA']);
                
                $CreateFare = $FareDAO->Create($Fare);

                if($CreateFare){
                    $Alert->success("Sucesso!", "Cadastro de tarifa realiado com sucesso!");
                    echo $Alert;
                }else{
                    $Alert->danger("Não foi possível cadastrar!", "Você não pode cadastrar uma nova <b>tarifa ativa no mesmo período (6 meses) e de mesmo valor.</b>");
                    echo $Alert;
                }

            }

        ?>

        <div class="text-center">
            <a href="../../index.php" class="btn btn-secondary rounded-pill px-4">Voltar</a>
        </div>

    </div>

<?php include_once '../../inc/footer.php'; ?>