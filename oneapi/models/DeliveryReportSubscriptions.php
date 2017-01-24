<?php

namespace hispasms\models;

use hispasms\Models;
use hispasms\ObjectArrayConversionRule;

class DeliveryReportSubscriptions extends AbstractObject {

    public $subscriptionId;

    public function __construct() {
        parent::__construct();
    }

}

Models::register(
        'hispasms\models\DeliveryReportSubscriptions',
        new ObjectArrayConversionRule('hispasms\models\DeliveryReportSubscription', 'deliveryReceiptSubscriptions')
);
