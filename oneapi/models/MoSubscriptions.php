<?php

namespace hispasms\models;

use hispasms\Models;
use hispasms\ObjectArrayConversionRule;

class MoSubscriptions extends AbstractObject {

    public $subscriptions;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register(
        'hispasms\models\MoSubscriptions',
        new ObjectArrayConversionRule('hispasms\models\MoSubscription', 'subscriptions')
);

?>
