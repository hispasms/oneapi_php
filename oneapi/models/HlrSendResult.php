<?php

namespace hispaSMS\models;

use hispaSMS\Models;

class HlrSendResult extends AbstractObject {

    public $clientCorrelator;
    public $address;
    public $notifyURL;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('hispaSMS\models\HlrSendResult');

?>
