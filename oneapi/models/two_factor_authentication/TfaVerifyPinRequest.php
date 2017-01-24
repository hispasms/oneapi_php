<?php

namespace hispasms\models\two_factor_authentication;

use hispasms\Models;
use hispasms\models\AbstractObject;

class TfaVerifyPinRequest extends AbstractObject {

    public $applicationId;
    public $phoneNumber;
    public $pin;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('hispasms\models\two_factor_authentication\TfaVerifyPinRequest');

?>
