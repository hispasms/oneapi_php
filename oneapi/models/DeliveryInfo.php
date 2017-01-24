<?php

namespace hispasms\models;

use hispasms\Models;

class DeliveryInfo extends AbstractObject {

    public $deliveryStatus;
    public $address;
    public $messageId;
    public $clientCorrelator;

    public function __construct() {
        parent::__construct();
    }

}

Models::register('hispasms\models\DeliveryInfo');
