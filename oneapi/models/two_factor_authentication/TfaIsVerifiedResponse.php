<?php

namespace hispasms\models\two_factor_authentication;

use hispasms\Models;
use hispasms\models\AbstractObject;

class TfaIsVerifiedResponse extends AbstractObject {

    public $verified;
    public $verifiedAt;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('hispasms\models\two_factor_authentication\TfaIsVerifiedResponse');

?>
