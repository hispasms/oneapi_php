<?php

namespace hispasms\models;

use hispasms\Models;

class SmsMessageSubscription extends AbstractObject {

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('hispasms\models\SmsMessageSubscription');


?>
