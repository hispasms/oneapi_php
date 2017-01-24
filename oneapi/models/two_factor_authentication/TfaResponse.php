<?php

namespace hispasms\models\two_factor_authentication;

use hispasms\Models;
use hispasms\models\AbstractObject;

class TfaResponse extends AbstractObject {

    public $smsId;
    public $phoneNumber;

    public $hlrStatus;
    public $smsStatus;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('hispasms\models\two_factor_authentication\TfaResponse');

?>
