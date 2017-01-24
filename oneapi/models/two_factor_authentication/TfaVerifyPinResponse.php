<?php

namespace hispasms\models\two_factor_authentication;

use hispasms\Models;
use hispasms\models\AbstractObject;

class TfaVerifyPinResponse extends AbstractObject {

    public $applicationId;
    public $phoneNumber;
    public $verified;
    public $attemptsRemaining;
    public $pinError;
    
    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('hispasms\models\two_factor_authentication\TfaVerifyPinResponse');

?>
