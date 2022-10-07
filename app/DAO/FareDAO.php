<?php

namespace App\DAO;

require_once '../../vendor/autoload.php';

date_default_timezone_set('America/Sao_Paulo');

use App\Models\Fare;

class FareDAO{

    public function Create(Fare $Fare){
        
        if( !self::CanCreate($Fare) ){
            return false;
        }
        
        $ArrFare = [
            'Id' => $Fare->getId(),
            'Value' => $Fare->getValue(),
            'OperatorId' => $Fare->getOperatorId(),
            'Created' => $Fare->getCreated(),
            'Status' => $Fare->getStatus()
        ];
        
        $_SESSION['OP'][$Fare->getOperatorId()]["Fares"][$Fare->getId()] = $ArrFare;

        return true;

    }

    public function CanCreate(Fare $Fare){
        
        if( self::FareIsActive($Fare->getOperatorId()) ){
            
            if( !self::FareValueInPeriodSixMonths($Fare->getOperatorId()) && !self::FareValueIsSame($Fare->getOperatorId(), $Fare->getValue()) ){
                return true;
            }

            return false;

        }

        return true;

    }

    public function FareIsActive(int $OperatorId){

        if( !empty($_SESSION['OP']) && array_key_exists($OperatorId, $_SESSION['OP']) ){
            
            foreach( $_SESSION['OP'][$OperatorId]["Fares"] as $FareSession ){

                if( $FareSession['Status'] == 1 ){
                    return true;
                }

            }
        }

        return false;

    }

    public function FareValueInPeriodSixMonths(int $OperatorId){
        
        $Today = strtotime(date("Y-m-d H:i:s"));

        if( array_key_exists($OperatorId, $_SESSION['OP']) ){

            foreach( $_SESSION['OP'][$OperatorId]["Fares"] as $FareSession ){

                if( strtotime($FareSession['Created'] . "+ 6 months") < $Today ){
                    return true;
                }

            }

        }

        return false;

    }

    public function FareValueIsSame(int $OperatorId, float $Value){

        if( array_key_exists($OperatorId, $_SESSION['OP']) ){

            foreach( $_SESSION['OP'][$OperatorId]["Fares"] as $FareSession ){

                if( $FareSession['Value'] == $Value ){
                    return true;
                }

            }

        }

        return false;

    }

}

?>