<?php

namespace hispasms\models;
use hispasms\Models;
use hispasms\SubscriptionIdFieldConversionRule;

/**
 * Resulting object on message (HLR/LBS) send.
 */
class ResourceReference extends AbstractObject {

    /**
     * The client correlator for this message. This value may be used to query 
     * for message status later.
     */
    public $clientCorrelator;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register(
    'hispasms\models\ResourceReference',
    new SubscriptionIdFieldConversionRule('clientCorrelator', 'resourceReference.resourceURL')
);

?>
