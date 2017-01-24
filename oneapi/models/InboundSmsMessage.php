<?php

namespace hispasms\models;

use hispasms\Models;

class InboundSmsMessage extends AbstractObject {

    public $dateTime;
    public $destinationAddress;
    public $messageId;
    public $message;
    public $resourceURL;
    public $senderAddress;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('hispasms\models\InboundSmsMessage');

?>