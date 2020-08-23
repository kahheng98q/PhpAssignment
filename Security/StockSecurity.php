<?php

require_once '../Domain/FactoryMethod/StockFactory.php';

class StockSecurity {

    public function __construct() {
        
    }

    public function validateStock($UnitPrice, $Quantity, $WeightUnit, $Type) {
        $message = "";
        $error = 0;

        if (!is_numeric($UnitPrice)) {
            $message .= "The Unit price must be digit.<br/>";
            $error = $error + 1;
        }
        if (!is_numeric($Quantity)) {
            $message .= "The Quantity must be Integer.<br/>";
            $error = $error + 1;
        }
        if (!is_numeric($WeightUnit)) {
            $message .= "The Weight Unit must be digit.<br/>";
            $error = $error + 1;
        }
        if (!(strcmp(strtoupper($Type), "SOLID") == 0)) {
      
            if (!(strcmp(strtoupper($Type), "LIQUID")) == 0) {
      
                $message .= "The Type must be Solid or Liquid.<br/>";
                $error = $error + 1;
                ;
            }
        }
        echo $message;
        if ($error == 0) {

            return true;
        } else {
            return false;
        }
    }

}
