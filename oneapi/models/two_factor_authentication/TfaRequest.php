<?php

namespace hispasms\models\two_factor_authentication;

use hispasms\Models;
use hispasms\models\AbstractObject;

class TfaRequest extends AbstractObject {

    public $applicationId;
    public $messageId;

    public $senderId;
    public $phoneNumber;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('hispasms\models\two_factor_authentication\TfaRequest');

?>
