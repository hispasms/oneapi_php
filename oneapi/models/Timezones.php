<?php

namespace hispasms\models;

use hispasms\Models;
use hispasms\ObjectArrayConversionRule;

class Timezones extends AbstractObject {

    public $timezones;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register(
        'hispasms\models\Timezones',
        new ObjectArrayConversionRule('hispasms\models\Timezone', 'timeZones')
);


?>
