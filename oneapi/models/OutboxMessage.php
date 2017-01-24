<?php

namespace hispasms\models;

use hispasms\Models;
use hispasms\SubObjectConversionRule;

class OutboxMessage extends AbstractObject {

    public $sendDateTime;
    public $messageId;
    public $smsCount;
    public $destinationAddress;
    public $sender;
    public $clientMetadata;
    public $messageText;
    public $status;
    public $bulkId;
    public $deliveryReportTime;
    public $ported;
    public $pricePerMessage;
    public $destinationNetwork;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}
Models::register(
    'hispasms\models\OutboxMessage',
    array(
        new SubObjectConversionRule('hispasms\models\Status', 'status'), 
        new SubObjectConversionRule('hispasms\models\Network', 'destinationNetwork'),
        new SubObjectConversionRule('hispasms\models\Price', 'pricePerMessage')
    )
);

?>
