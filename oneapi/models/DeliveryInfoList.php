<?php

namespace hispasms\models;
use hispasms\Models;
use hispasms\ObjectArrayConversionRule;

/**
 * The delivery status of an message.
 */
class DeliveryInfoList extends AbstractObject {

    public $deliveryInfo;

    public function __construct() {
        parent::__construct();
    }

}

Models::register(
    'hispasms\models\DeliveryInfoList',
    new ObjectArrayConversionRule('hispasms\models\DeliveryInfo', 'deliveryInfo', 'deliveryInfoList.deliveryInfo')
);

