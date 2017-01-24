<?php

namespace hispasms\models;

// Example:
// {"deliveryReceiptSubscription":{"callbackReference":{"callbackData":null,"notifyURL":"http://192.168.10.111/save_requests"},"resourceURL":"https://oneapi.hispasms.com/restapi/1/smsmessaging/outbound/subscriptions/q1id6ksfc8"}}

use hispasms\Models;
use hispasms\SubFieldConversionRule;

class DeliveryReportSubscription extends AbstractObject {

    public $subscriptionId;

    public function __construct() {
        parent::__construct();
    }

}

Models::register(
        'hispasms\models\DeliveryReportSubscription',
        new SubFieldConversionRule('subscriptionId', 'deliveryReceiptSubscription.resourceURL')
);
