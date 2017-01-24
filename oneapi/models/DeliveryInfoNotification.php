<?php

namespace hispasms\models;

use hispasms\Models;
use hispasms\SubFieldConversionRule;
use hispasms\SubObjectConversionRule;

class DeliveryInfoNotification extends AbstractObject {

    public $deliveryInfo;
    public $callbackData;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register(
        'hispasms\models\DeliveryInfoNotification',
        array(
            new SubObjectConversionRule('hispasms\models\DeliveryInfo', 'deliveryInfo', 'deliveryInfoNotification.deliveryInfo'),
            new SubFieldConversionRule('callbackData', 'deliveryInfoNotification.callbackData')
        )
);

?>
