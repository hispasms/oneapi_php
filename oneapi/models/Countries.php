<?php

namespace hispasms\models;

use hispasms\Models;
use hispasms\ObjectArrayConversionRule;

class Countries extends AbstractObject {

    public $countries;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register(
        'hispasms\models\Countries',
        new ObjectArrayConversionRule('hispasms\models\Country', 'countries')
);

?>
